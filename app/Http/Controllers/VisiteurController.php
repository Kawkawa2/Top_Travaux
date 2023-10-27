<?php

namespace App\Http\Controllers;

use App\Mail\ContactArtisan;
use App\Models\categorie;
use App\Models\departement;
use App\Models\specialite;
use App\Models\cat_spec_art;
use App\Models\dep_ville_art;
use App\Models\ville;
use App\Models\User;
use App\Models\commentaire;
use App\Models\views;
use App\Models\subscribe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class VisiteurController extends Controller
{
    /**
     * home page 
     */
    public function index(Request $request)
    {
        $TopCategories = Categorie::orderBy('nom_categorie')
            ->distinct()
            ->take(10)
            ->get();
        $TopSpecialites = specialite::orderBy('nom_specialite')
            ->distinct()
            ->take(12)
            ->get();
        $TopDepartements = departement::LeftJoin('ville', 'ville.departement_id', 'departement.id')
            ->select('departement.id', 'departement.nom_departement', DB::Raw('count(ville.id) as countVille'))
            ->groupBy('departement.id', 'departement.nom_departement')
            ->havingRaw('count(ville.id) >= ?', [1])
            ->orderBy('countVille', 'desc')
            ->limit(8)
            ->get();
        $TopVilles = ville::orderBy('nom_ville')->distinct()->limit(8)->get();

        $allCategorie = categorie::orderBy('nom_categorie')->distinct()->get();
        $allSpecialites = specialite::orderBy('nom_specialite')->distinct()->get();
        $allDepartments = departement::orderBy('nom_departement')->distinct()->get();
        $allVilles = ville::orderBy('nom_ville')->distinct()->get();

        $TopSixCategories = specialite
            ::Select('nom_categorie', 'image_categorie', DB::raw('count(*) as nbSpecPerCateg'))
            ->join('categorie', 'categorie.id', 'specialite.categorie_id')
            ->groupBy('nom_categorie', 'image_categorie')
            ->orderBy('nbSpecPerCateg', 'desc')
            ->limit(6)
            ->get();

        $nbSubscribers = User::all()->count();


        $nbVisits = views::latest()->first();

        if (!$nbVisits) {
            // If there are no rows in the `views` table, create a new row with a value of 1
            views::create(['viewsTrack' => 1]);
        } else {
            // If there are rows in the `views` table, increment the `viewsTrack` value in the latest row

            $nbVisits->increment('viewsTrack');
        }

        $averageRating = commentaire::avg('note');
        $averageRatingPercent = round(($averageRating * 100) / 5, 0);


        return view('Visiteur.index', compact('TopCategories', 'TopSpecialites', 'TopDepartements', 'TopVilles', 'allCategorie', 'allSpecialites', 'allDepartments', 'allVilles', 'TopSixCategories', 'nbSubscribers', 'nbVisits', 'averageRatingPercent'));
    }

    /**
     * searching functionnality
     */
    public function Search(Request $request)
    {
        $TopCategories = Categorie::orderBy('nom_categorie')
            ->distinct()
            ->take(10)
            ->get();
        $TopSpecialites = specialite::orderBy('nom_specialite')
            ->distinct()
            ->take(12)
            ->get();
        $TopDepartements = departement::LeftJoin('ville', 'ville.departement_id', 'departement.id')
            ->select('departement.id', 'departement.nom_departement', DB::Raw('count(ville.id) as countVille'))
            ->groupBy('departement.id', 'departement.nom_departement')
            ->havingRaw('count(ville.id) >= ?', [1])
            ->orderBy('countVille', 'desc')
            ->limit(8)
            ->get();
        $TopVilles = ville::orderBy('nom_ville')->distinct()->limit(8)->get();

        $allCategorie = categorie::all()->sortBy('nom_categorie');
        $allSpecialites = specialite::all()->sortBy('nom_specialite');
        $allDepartments = departement::all()->sortBy('nom_departement');
        $allVilles = ville::all()->sortBy('nom_ville');

        $departement = $request->query('departement');
        $ville = $request->query('ville');
        $categorie = $request->query('categorie');
        $specialite = $request->query('specialite');

        $DeptId = $request->query('DeptId');
        $VilleId = $request->query('VilleId');
        $categorieId = $request->query('categorieId');
        $specialityId = $request->query('specialityId');

        $validator = Validator::make($request->all(), [
            'departement' => 'required',
            // 'ville' => 'required',
            'categorie' => 'required',
            // 'specialite' => 'required',

        ]);
        if ($DeptId) {
            $result = dep_ville_art
                ::select('dep_ville_art.user_id', 'user.*', 'd.*', 'v.*', 'commentaire.nombreCommentaire', 'commentaire.MoyenneNote')
                ->distinct('v.nom_ville')
                ->join('cat_spec_art as csa', 'csa.user_id', 'dep_ville_art.user_id')
                ->join('user', 'user.id', '=', 'dep_ville_art.user_id')
                ->join('departement as d', 'd.id', '=', 'dep_ville_art.departement_id')
                ->leftJoin('ville as v', 'v.departement_id', '=', 'd.id')
                ->leftJoin(
                    DB::raw('(SELECT user_id, COUNT(*) AS nombreCommentaire,AVG(note) as MoyenneNote FROM commentaire GROUP BY user_id) commentaire'),
                    'commentaire.user_id',
                    '=',
                    'user.id'
                )
                ->where('dep_ville_art.departement_id', $DeptId);

            $countResult = $result->count();
            $result = $result->paginate(12);

            $selectedValues = [
                'departement' => departement::where('id', '=', $DeptId)->first(),
            ];



            return view('Visiteur.result', compact('TopCategories', 'TopSpecialites', 'allCategorie', 'TopDepartements', 'TopVilles', 'allSpecialites', 'allDepartments', 'allVilles', 'result', 'selectedValues', 'countResult', 'DeptId', 'VilleId'));
        } elseif ($VilleId) {
            $result = dep_ville_art
                ::select('dep_ville_art.user_id', 'user.*', 'd.*', 'v.*', 'commentaire.nombreCommentaire', 'commentaire.MoyenneNote')
                ->distinct('v.code_postal')
                ->join('cat_spec_art as csa', 'csa.user_id', 'dep_ville_art.user_id')
                ->join('user', 'user.id', '=', 'dep_ville_art.user_id')
                ->join('departement as d', 'd.id', '=', 'dep_ville_art.departement_id')
                ->Join('ville as v', 'v.id', '=', 'dep_ville_art.ville_id')
                ->leftJoin(
                    DB::raw('(SELECT user_id, COUNT(*) AS nombreCommentaire,AVG(note) as MoyenneNote FROM commentaire GROUP BY user_id) commentaire'),
                    'commentaire.user_id',
                    '=',
                    'user.id'
                )
                ->where('dep_ville_art.ville_id', $VilleId);


            $countResult = $result->count();
            $result = $result->paginate(12);

            $selectedValues = [
                'ville' => ville::where('id', '=', $VilleId)->first(),
            ];

            return view('Visiteur.result', compact('TopCategories', 'TopSpecialites', 'allCategorie', 'TopDepartements', 'TopVilles', 'allSpecialites', 'allDepartments', 'allVilles', 'result', 'selectedValues', 'countResult', 'VilleId'));
        } elseif ($categorieId) {
            $result = cat_spec_art
                ::select('cat_spec_art.user_id', 'user.*', 'd.*', 'v.*', 'commentaire.nombreCommentaire', 'commentaire.MoyenneNote')
                ->distinct('v.nom_ville')
                ->join('dep_ville_art as dva', 'dva.user_id', 'cat_spec_art.user_id')
                ->join('user', 'user.id', '=', 'cat_spec_art.user_id')
                ->join('categorie', 'categorie.id', '=', 'cat_spec_art.categorie_id')
                ->join('departement as d', 'd.id', '=', 'dva.departement_id')
                ->Join('ville as v', 'v.id', '=', 'dva.ville_id')
                ->leftJoin(
                    DB::raw('(SELECT user_id, COUNT(*) AS nombreCommentaire,AVG(note) as MoyenneNote FROM commentaire GROUP BY user_id) commentaire'),
                    'commentaire.user_id',
                    '=',
                    'user.id'
                )
                ->where('cat_spec_art.categorie_id', $categorieId);

            $countResult = $result->count();
            $result = $result->paginate(12);

            $selectedValues = [
                'categorie' => categorie::where('id', '=', $categorieId)->first(),
            ];

            return view('Visiteur.result', compact('TopCategories', 'TopSpecialites', 'allCategorie', 'TopDepartements', 'TopVilles', 'allSpecialites', 'allDepartments', 'allVilles', 'result', 'selectedValues', 'countResult', 'categorieId'));
        } elseif ($specialityId) {
            $result = cat_spec_art
                ::select('cat_spec_art.user_id', 'user.*', 'd.*', 'v.*', 'commentaire.nombreCommentaire', 'commentaire.MoyenneNote')
                ->distinct('v.nom_ville')
                ->join('dep_ville_art as dva', 'dva.user_id', 'cat_spec_art.user_id')
                ->join('user', 'user.id', '=', 'cat_spec_art.user_id')
                ->join('specialite', 'specialite.id', '=', 'cat_spec_art.specialite_id')
                ->join('departement as d', 'd.id', '=', 'dva.departement_id')
                ->Join('ville as v', 'v.id', '=', 'dva.ville_id')
                ->leftJoin(
                    DB::raw('(SELECT user_id, COUNT(*) AS nombreCommentaire,AVG(note) as MoyenneNote FROM commentaire GROUP BY user_id) commentaire'),
                    'commentaire.user_id',
                    '=',
                    'user.id'
                )
                ->where('cat_spec_art.specialite_id', $specialityId);

            $countResult = $result->count();
            $result = $result->paginate(12);

            $selectedValues = [
                'specialite' => specialite::where('id', '=', $specialityId)->first(),
            ];

            return view('Visiteur.result', compact('TopCategories', 'TopSpecialites', 'allCategorie', 'TopDepartements', 'TopVilles', 'allSpecialites', 'allDepartments', 'allVilles', 'result', 'selectedValues', 'countResult', 'specialityId'));
        } else {
            if ($validator->fails()) {
                return back()->with(['msg1' => 'Vous devez sélectionner au moins un departement et une categorie']);
            } else {
                $result = cat_spec_art::join('dep_ville_art', 'cat_spec_art.user_id', '=', 'dep_ville_art.user_id')
                    ->join('user', 'user.id', '=', 'cat_spec_art.user_id')
                    ->join('departement', 'departement.id', '=', 'dep_ville_art.departement_id')
                    ->join('categorie', 'categorie.id', '=', 'cat_spec_art.categorie_id')
                    ->leftJoin(
                        DB::raw('(SELECT user_id, COUNT(*) AS nombreCommentaire,AVG(note) as MoyenneNote FROM commentaire GROUP BY user_id) commentaire'),
                        'commentaire.user_id',
                        '=',
                        'user.id'
                    )->select('cat_spec_art.user_id', 'user.*', 'departement.*', 'categorie.*', 'commentaire.nombreCommentaire', 'commentaire.MoyenneNote')
                    ->distinct('cat_spec_art.user_id')
                    ->where('dep_ville_art.departement_id', '=', isset($departement) ? $departement : null)
                    ->where('cat_spec_art.categorie_id', '=', isset($categorie) ? $categorie : null);

                if (isset($specialite)) {
                    $result = $result
                        ->join('specialite', 'specialite.id', '=', 'cat_spec_art.specialite_id')
                        ->where('cat_spec_art.specialite_id', '=', $specialite);
                }

                if (isset($ville)) {
                    $result = $result
                        ->join('ville', 'ville.id', '=', 'dep_ville_art.ville_id')
                        ->select('ville.*', 'departement.*', 'categorie.*', 'user.*', 'cat_spec_art.user_id', 'commentaire.nombreCommentaire', 'commentaire.MoyenneNote')
                        ->where('dep_ville_art.ville_id', '=', $ville);
                }

                $countResult = $result->count();
                $result = $result->paginate(12);


                $selectedValues = [
                    'departement' => departement::where('id', '=', $departement)->first(),
                    'ville' => ville::where('id', '=', $ville)->first(),
                    'categorie' => categorie::where('id', '=', $categorie)->first(),
                    'specialite' => specialite::where('id', '=', $specialite)->first(),
                ];


                return view('Visiteur.result', compact('TopCategories', 'TopSpecialites', 'allCategorie', 'TopDepartements', 'TopVilles', 'allSpecialites', 'allDepartments', 'allVilles', 'result', 'selectedValues', 'countResult'));
            }
        }
    }

    /**
     * searching result.
     */
    public function SearchResult(Request $request)
    {

        $TopCategories = Categorie::orderBy('nom_categorie')
            ->distinct()
            ->take(10)
            ->get();
        $TopSpecialites = specialite::orderBy('nom_specialite')
            ->distinct()
            ->take(12)
            ->get();
        $TopDepartements = departement::LeftJoin('ville', 'ville.departement_id', 'departement.id')
            ->select('departement.id', 'departement.nom_departement', DB::Raw('count(ville.id) as countVille'))
            ->groupBy('departement.id', 'departement.nom_departement')
            ->havingRaw('count(ville.id) >= ?', [1])
            ->orderBy('countVille', 'desc')
            ->limit(8)
            ->get();

        $TopVilles = ville::orderBy('nom_ville')->distinct()->limit(8)->get();

        $allCategorie = categorie::all()->sortBy('nom_categorie');
        $allSpecialites = specialite::all()->sortBy('nom_specialite');
        $allDepartments = departement::all()->sortBy('nom_departement');
        $allVilles = ville::all()->sortBy('nom_ville');
        return view('Visiteur.result', compact('TopCategories', 'TopSpecialites', 'TopDepartements', 'TopVilles', 'allCategorie', 'allSpecialites', 'allDepartments', 'allVilles'));
    }

    /**
     *  show profiles
     */
    public function showProfile($idArtisan, Request $request)
    {
        $TopCategories = Categorie::orderBy('nom_categorie')
            ->distinct()
            ->take(10)
            ->get();
        $TopSpecialites = specialite::orderBy('nom_specialite')
            ->distinct()
            ->take(12)
            ->get();
        $TopDepartements = departement::LeftJoin('ville', 'ville.departement_id', 'departement.id')
            ->select('departement.id', 'departement.nom_departement', DB::Raw('count(ville.id) as countVille'))
            ->groupBy('departement.id', 'departement.nom_departement')
            ->havingRaw('count(ville.id) >= ?', [1])
            ->orderBy('countVille', 'desc')
            ->limit(8)
            ->get();
        $TopVilles = ville::orderBy('nom_ville')->distinct()->limit(8)->get();

        $allCategorie = categorie::orderBy('nom_categorie')->distinct()->get();
        $allSpecialites = specialite::orderBy('nom_specialite')->distinct()->get();
        $allDepartments = departement::orderBy('nom_departement')->distinct()->get();
        $allVilles = ville::orderBy('nom_ville')->distinct()->get();

        $profile = User::select('user.*')
            ->where('user.id', '=', $idArtisan)
            ->first();

        // dd($profile);
        $commentaires = User::join('commentaire', 'commentaire.user_id', 'user.id')
            ->select('user.id', 'commentaire.*')
            ->where('user.id', '=', $idArtisan)
            ->orderBy('commentaire.created_at', 'DESC');


        $ArtSpecialite = cat_spec_art
            ::join('specialite', 'specialite.id', '=', 'cat_spec_art.specialite_id')
            ->select('specialite.nom_specialite')->distinct()
            ->where('cat_spec_art.user_id', '=', $idArtisan)
            ->limit(5)
            ->get();

        $FinDept = Departement
            ::select('departement.id', 'departement.nom_departement')
            ->join('dep_ville_art as dva', 'dva.departement_id', 'departement.id')
            ->where('dva.user_id', '=', $idArtisan)
            ->limit(3)
            ->get();

        $ArtDepVille = Ville
            ::join('departement as d', 'd.id', 'ville.departement_id')
            ->whereIn('d.id', $FinDept->pluck('id'))
            ->select('ville.nom_ville', 'd.nom_departement')
            ->limit(6)
            ->get();

        // dd($ArtDepVille);



        $nombreCommentaire = $commentaires->count();
        $commentaires = $commentaires->limit(10)->get();

        //avis etoile
        $cm = Commentaire::where('user_id', $idArtisan)->avg('note');
        $roundRating = number_format($cm, 1);
        // dd($roundRating); 

        $nbRaters = Commentaire::where('user_id', $idArtisan)->count('note');

        $nbRating = Commentaire::select('note', DB::raw('count(id) as count_comment'))
            ->groupBy('note')
            ->orderBy('note', 'DESC')
            ->where('user_id', $idArtisan)
            ->get();

        $CurrentProfileUrl = $request->url();

        return view('Visiteur.profile', compact('TopCategories', 'TopSpecialites', 'TopDepartements', 'TopVilles', 'allCategorie', 'allSpecialites', 'allDepartments', 'allVilles', 'profile', 'commentaires', 'nombreCommentaire', 'ArtSpecialite', 'FinDept', 'ArtDepVille', 'roundRating', 'nbRaters', 'nbRating', 'CurrentProfileUrl'));
    }

    /**
     * store comment functionnality
     */
    public function store($idArtisan, Request $request)
    {

        // Validate the form data
        $validatedData = validator::make(
            $request->all(),
            [
                'nom' => 'required|max:255',
                'email' => 'required|email:rfc,dns|max:255',
                'note' => 'required|max:255',
                'Commentaire' => 'required',
            ]
        );
        if ($validatedData->fails()) {
            return back()->withErrors($validatedData)->withInput();
        } else {
            $searchMail = commentaire::where('email', '=', $request->email)->first('email');
            if ($searchMail) {
                return redirect()->back()->with(['fail' => 'Desole! votre email deja exist dans les commentaires, veuillez saisir un autre.']);
            } else {
                // Create a new comment instance and save it to the database
                $currentUser = User::where('id', '=', $idArtisan)->first();
                $comment = new commentaire();
                $comment->nom = $request->nom;
                $comment->email = $request->email;
                $comment->note = $request->note;
                $comment->details_commentaire = $request->Commentaire;
                $currentUser->commentaires()->save($comment);
                return redirect()->back()->with(['success' => 'votre commentaire est ajoute avec succes']);
            }
        }
    }

    /**
     * send mail functionnality
     */
    public function mailing(Request $request, $id)
    {
        $artisanEmail = User::select('email')->where('id', $id)->first();

        $validator = Validator::make($request->all(), [
            'Nom_Complet' => 'required',
            'Telephone' => 'required|regex:/^[0-9]{10}$/',
            'Email' => 'required|email:rfc,dns',
            'Sujet' => 'required|string',
            'Message' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $data = [
                'reciever' => $artisanEmail->email,
                'Email' => $request->input('Email'),
                'Nom_Complet' => $request->input('Nom_Complet'),
                'Telephone' => $request->input('Telephone'),
                'Sujet' => $request->input('Sujet'),
                'Message' => $request->input('Message'),
            ];

            Mail::to($artisanEmail->email)
                ->send(new ContactArtisan($data));

            // return new ContactArtisan($data);
            return back()->with(['success2' => 'Votre e-mail a été envoyé avec succès']);
        }
    }

    /**
     * subscribe functionnality
     */
    public function subscribe(Request $request)
    {
        $email = $request->input('email');
        $validatData = validator::make(
            $request->all(),
            [
                'email' => 'required|max:255|email:rfc,dns'
            ]
        );
        if ($validatData->fails()) {
            return back()->withErrors($validatData)->withInput();
        } else {
            $searchEmail = subscribe::where('email', '=', $email)->first();
            // dd($searchEmail);
            if ($searchEmail) {
                return back()->with('warning', 'Vous êtes déjà abonné à la newsletter');
            } else {
                $subscribe = new Subscribe();
                $subscribe->email = $email;
                $subscribe->save();
                return back()->with('success', 'Vous êtes abonné à la newsletter');
            }
        }
    }
    /**
     * 404 page 
     */
    public function notFoundPage()
    {

        $TopCategories = Categorie::orderBy('nom_categorie')
            ->distinct()
            ->take(10)
            ->get();
        $TopSpecialites = specialite::orderBy('nom_specialite')
            ->distinct()
            ->take(12)
            ->get();
        $TopDepartements = departement::LeftJoin('ville', 'ville.departement_id', 'departement.id')
            ->select('departement.id', 'departement.nom_departement', DB::Raw('count(ville.id) as countVille'))
            ->groupBy('departement.id', 'departement.nom_departement')
            ->havingRaw('count(ville.id) >= ?', [1])
            ->orderBy('countVille', 'desc')
            ->limit(8)
            ->get();
        $TopVilles = ville::orderBy('nom_ville')->distinct()->limit(8)->get();

        $allCategorie = categorie::orderBy('nom_categorie')->distinct()->get();
        $allSpecialites = specialite::orderBy('nom_specialite')->distinct()->get();
        $allDepartments = departement::orderBy('nom_departement')->distinct()->get();
        $allVilles = ville::orderBy('nom_ville')->distinct()->get();

        return view('Visiteur.404-page', compact('TopCategories', 'TopSpecialites', 'TopDepartements', 'TopVilles', 'allCategorie', 'allSpecialites', 'allDepartments', 'allVilles'));
    }
}
