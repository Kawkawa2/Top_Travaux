<div class="card">
    <div class="container">
      <strong><h1 class="card-header txt-danger">Bienvenue {!! $Nom !!} !</h1></strong>
        <section id="body">
            <div class="card-header"></div>
            <div class="card-body">
            @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                </div>
            @endif
            <div ><strong>Nom Et Prenom:</strong>  {!! $Nom !!}<br></div>
                    <div><strong>Email : </strong>{!! $Email !!}<br></div>
                    <div><strong>Telephone : </strong> {!! $Telephone !!}<br></div>
                    <div><strong>Sujet :</strong> {!! $Sujet !!}<br></div>
                    <div><strong>Message :</strong> {!! $Message !!}</div>
           </div>
        </section>
   </div>
</div>



