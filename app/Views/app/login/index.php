<form action="<?= base_url('login') ?>" method="POST">
    <input type="text" name="email" autocomplete="false" required autofocus>
    <input type="password" name="senha" autocomplete="false" required>
    <button type="submit">Entrar</button>
</form>
<br>
<a href="<?= base_url('login/recuperarSenha') ?>">Esqueceu sua senha?</a>
<a href="<?= base_url('/registro') ?>">registrar</a>