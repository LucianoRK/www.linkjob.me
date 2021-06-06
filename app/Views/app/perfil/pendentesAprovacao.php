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
                        <div class="row">
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
                                                <tr class="tr-perfil">
                                                    <td>
                                                        <?php echo $perfil['nome']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $perfil['nome_perfil']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo HelperM::dataMysqlParaBr($perfil['created_at']); ?>
                                                    </td>
                                                    <td width="130">
                                                        <button type="button" class="btn btn-sm btn-default btn-aprovar-perfil" title="Aprovar Perfil"><i class="text-success fas fa-check"></i></button>
                                                        <button type="button" class="btn btn-sm btn-default btn-recusar-perfil" title="Recusar Perfil"><i class="text-danger fas fa-trash"></i></button>
                                                        <button type="button" class="btn btn-sm btn-default btn-ver-perfil" title="Ver perfil"><i class="fas fa-eye"></i></a>
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
</div>