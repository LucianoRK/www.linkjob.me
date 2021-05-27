<div class="container" style="padding-top: 14%;">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
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
                    <a href="recuperarSenha" target="blank"> <span style="font-size: 13px">EsquecI minha senha</span></a>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-danger" style="background-color: #A94442">Logar</button>
            </div>
        </form>
    </div>
</div>