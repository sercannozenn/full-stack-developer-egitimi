<p>
    Sayın {{ $user->name }},
</p>
<p>
    Bu maili şifre sıfırlama isteğiniz üzerine almaktasınız.
    <br>
    <br>

 <a href="{{ route('reset.password.showReset',$user->reset_password_token) }}" class="btn-large w100 blue accent-4">Şifremi Sıfırla</a>
</p>

