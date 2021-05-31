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
                            <span></span>Novo Perfil
                        </h2>
                    </div>
                    <form action="" method="POST" id="form-novo-perfil">
                        <div class="inner-divider"></div>
                        <div class="form-group row">
                            <div class="col-md-2"></div>
                            <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Perfil:</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <?php if ($perfis) { ?>
                                        <?php foreach ($perfis as $perfil) { ?>
                                            <label>
                                                <input type="checkbox" name="perfil" id="perfil_<?php echo $perfil['perfil_id']; ?>" value="<?php echo $perfil['perfil_id']; ?>">
                                                <?php echo $perfil['nome']; ?>
                                            </label>
                                            <br>
                                        <?php } ?>
                                    <?php } ?>
                                    <span class="text-danger msg" style="font-size: 13px;"></span>
                                </div>
                            </div>
                        </div>
                        <div id="div-modelo-promotor-influencer" hidden>
                            <?php echo view('template/perfis/dadosModeloPromotorInfluencer'); ?>
                        </div>

                        <div class="form-group row text-right">
                            <div class="col-sm-10">
                                <button type="button" id="salvar-novo-perfil" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>