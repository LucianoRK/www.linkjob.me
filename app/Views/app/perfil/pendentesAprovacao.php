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
                            <span></span>Perfis Pendentes de Aprovação
                        </h2>
                        <div class="inner-divider"></div>
                        <div class="table-responsive">
                            <table id="table-aprovacao" class="table table-bordered dataTable dtr-inline">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Perfil</th>
                                        <th>Data cadastro</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($perfis)) { ?>
                                        <?php foreach ($perfis as $perfil) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $perfil['nome']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $perfil['nome_perfil']; ?>
                                                </td>
                                                <td>
                                                    <?php echo HelperM::dataMysqlParaBr($perfil['created_at']); ?>
                                                </td>
                                                <td width="130" usuario_perfil_id="<?php echo $perfil['usuario_perfil_id']; ?>">
                                                    <button type="button" class="btn btn-sm btn-default btn-aprovar-perfil" title="Aprovar Perfil"><i class="text-success fas fa-check"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default btn-recusar-perfil" title="Recusar Perfil"><i class="text-danger fas fa-trash"></i></button>
                                                    <a href="ver-perfil/<?php echo $perfil['usuario_perfil_id'] ?>" target="blank" class="btn btn-sm btn-default editar" type="button" title="Ver perfil"> 
                                                        <span style="color: black;" class="fas fa-eye"></span> 
                                                    </a>
                                                    <form id="aprovar_<?php echo $perfil['usuario_perfil_id']; ?>" action="aprovar" method="POST">
                                                        <input type="hidden" name="usuario_perfil_id" value="<?php echo $perfil['usuario_perfil_id']; ?>">
                                                    </form>
                                                    <form id="recusar_<?php echo $perfil['usuario_perfil_id']; ?>" action="recusar" method="POST">
                                                        <input type="hidden" name="usuario_perfil_id" value="<?php echo $perfil['usuario_perfil_id']; ?>">
                                                    </form>
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