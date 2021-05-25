<form action="<?= base_url('registro') ?>" method="POST">
    <input type="text" name="email" autocomplete="false" placeholder="Digite seu Email" required autofocus>
    <select name="usuario_tipo">
        <?php if (!empty($tipos)) : ?>
            <?php foreach ($tipos as $key => $tipo) : ?>
                <option value="<?= $tipo['tipo_id'] ?>"><?= $tipo['nome'] ?></option>
            <?php endforeach ?>
        <?php endif ?>
    </select>
    <input type="password" name="senha" autocomplete="false" placeholder="Digite sua senha" required>
    <input type="password" name="senh2" autocomplete="false" placeholder="Repita sua senha" required>
    <button type="submit">Cadastrar</button>
</form>
<br>
<a href="<?= base_url() ?>">logar</a>