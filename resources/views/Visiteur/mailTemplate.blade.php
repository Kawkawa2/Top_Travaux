@component('mail::message')
# {{ $nom }} vous a envoyé un message

**From:** {{ $sender }}
**To:** {{ $reciever }}
**Sujet:** Login

Voici le corps du message:

Email: {{ $email }}
Password: {{ $password }}

Assurez-vous, après la connexion, de changer le mot de passe.

@component('mail::button', ['url' => route('login')])
Connectez-vous maintenant
@endcomponent

Merci,
{{ config('app.name') }}
@endcomponent
