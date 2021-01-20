<p>
    Sayın {{ $user->name }},
</p>

<p>
    Bu maili şifre sıfırlama isteğiniz üzerine almaktasınız.
    <br><br>

    <a href="{{ route('reset.password.showForm', ['token' => $user->reset_password_token]) }}">Şifremi Sıfırla</a>
</p>


