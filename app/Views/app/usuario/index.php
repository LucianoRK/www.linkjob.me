<?php use App\Helpers\HelperM; ?>

<div id="page-home"></div>
<div class="lower-page element-color-switch" id="page-about">
    <div class="center-container">
        <div class="center-block">
            <div class="container sections">
                <div class="inner-divider"></div>
                <div class="inner-divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-heading-all">
                            <span></span>Usuários
                        </h2>
                        <div class="inner-divider"></div>
                        <div class="table-responsive">
                            <table id="table-usuarios" class="table table-bordered dataTable dtr-inline">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Data cadastro</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($usuarios)) { ?>
                                        <?php foreach ($usuarios as $usuario) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $usuario['nome']; ?>
                                                </td>
                                                <td>
                                                    <?php if ($usuario['tipo_id'] == 1) { ?>
                                                        Administrador
                                                    <?php } else if ($usuario['tipo_id'] == 2) { ?>
                                                        Profissional
                                                    <?php } else { ?>
                                                        Empresa
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo HelperM::dataMysqlParaBr($usuario['created_at']); ?>
                                                </td>
                                                <td width="73" usuario_id="<?php echo $usuario['usuario_id']; ?>">
                                                    <button type="button" class="btn btn-sm btn-default btn-excluir-usuario" title="Excluir usuário"><i class="text-danger fas fa-trash"></i></button>
                                                    <a href="editar-dados-usuario/<?php echo $usuario['usuario_id']; ?>" target="blank" class="btn btn-sm btn-default editar" type="button" title="Editar informações do usuário"> 
                                                        <span class="text-primary fas fa-edit"></span> 
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>