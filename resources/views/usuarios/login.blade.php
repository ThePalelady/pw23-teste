{{-- views/usuarios/login.blade.php --}}
<div style="border:1px solid peru; width:50%; margin:0 auto;text-align: center">

    <h1>Login!!!!!</h1>

    @if (session('erro'))
        <div>{{ session('erro') }}</div>
    @endif

    <form action="{{ url()->current() }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <input type="password" name="password" placeholder="Senha">
        <br><br>
        <input type="submit" value="Login, por favor.">
    </form>

</div>
