<x-layouts.main>
    <h1>Login</h1>
    <form method="POST" action="/auth/login">
        Usuario<br />
        <input type="text" name="email" /><br />
        Password<br />
        <input type="password" name="password" /><br />
        <button type="button" onclick="document.location='/';">Cancelar</button>
        <button type="submit">Ingresar</button>
    </form>
</x-layouts.main>
