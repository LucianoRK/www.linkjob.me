<form action="<?= base_url() ?>/login/redefinirSenhaUpdate/<?= $token ?>" method="POST">
    <input type="password" name="senha" placeholder="Digite a nova senha" autocomplete="false" minlength="6" required>
    <input type="password" name="senha2" placeholder="Repita a senha" autocomplete="false" minlength="6" required>
    <button type="submit">Alterar</button>
</form>