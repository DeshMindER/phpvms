@component('mail::message')
  # Thanks for signing up, {{ $user->name }}!

  Your account is ready to use. Make sure to visit our Discord and introduce yourself.
  
  @component('mail::button', ['url' => url('https://discord.gg/u6ZHhSVrRZ')])
    Discord Cruzeiro
  @endcomponent
 <br/> 
 You can access the DOV here:
  @component('mail::button', ['url' => url('/login')])
    Visit your account now!
  @endcomponent
<br/>

  Thanks,<br>
  Management, {{ config('app.name') }}
@endcomponent
