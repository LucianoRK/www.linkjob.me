<div class="lower-page element-color-switch" id="page-about">
    <div class="center-container">
        <div class="center-block">
            <div class="container sections">
                <div class="inner-divider"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container" style="padding-top: 14%;">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <form action="<?= base_url('login') ?>" method="POST">
                                    <p class="text-center">
                                        <i style="font-size: 100px;" class="text-danger fas fa-user"></i>
                                    </p>
                                    <div class="form-group">
                                        <input name="email" required type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="senha" required type="password" class="form-control" id="senha" placeholder="Senha">
                                        <div class="text-right">
                                            <a href="login/recuperarSenha" target="blank">
                                                <span style="font-size: 13px; color: grey;">Esqueci minha senha</span>
                                                </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-danger" style="background-color: #A94442">Logar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>