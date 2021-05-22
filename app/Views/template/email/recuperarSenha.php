<?php if (!empty($link)) : ?>
    <h1>Recuperação de Senha</h1>
    <span>Foi requisitada uma <i>recuperação</i> de senha em nosso sistema em <?=  date('d/m/Y H:i:s') ?>, se a requisição for inválida, ignore este e-mail.</span>
    <p>Para concluir com sua recuperação de senha, acesse <a href="<?= $link; ?>">este link</a>, ou copie e cole: "<?= $link; ?>" na sua barra de endereço.</p>
<?php endif;?>

<p><a href="<?= base_url()?>">Entre em Contato</a><p>
