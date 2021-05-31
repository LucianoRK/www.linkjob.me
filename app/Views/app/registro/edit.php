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
                            <span></span>Meus Dados
                        </h2>
                        <br>
                        <form action="" method="POST" id="form-cadastrese">
                            <?php echo view('template/usuario/dadosCadastrais'); ?>

                            <div class="form-group row text-right">
                                <div class="col-sm-10">
                                    <button type="button" id="salvar" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="inner-divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-heading-all">
                            <span></span>Minha Conta
                        </h2>
                        <br>
                        <form action="" method="POST">
                            <?php echo view('template/usuario/dadosAcesso'); ?>

                            <div class="form-group row text-right">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="inner-divider"></div>
            </div>
        </div>
    </div>
</div>