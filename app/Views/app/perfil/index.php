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
                            <span></span>Meus Perfis
                        </h2>
                        <div class="text-right">
                            <button type="button" class="btn btn-danger float-right" id="btn-meus-perfis">Meus Perfis</button>
                            <button type="button" class="btn btn-danger float-right" id="btn-dados-cadastrais">Dados Cadastrais</button>
                            <button type="button" class="btn btn-danger float-right" id="btn-novo-perfil">+ Perfil</button>
                        </div>
                    </div>

                    <!-- Inicio meus perfis -->
                    <div id="div-meus-perfis">
                        <div class="inner-divider"></div>
                        <?php echo view('app/perfil/meusPerfis'); ?>
                    </div>
                    <!-- Fim meus perfis -->

                    <!-- Inicio dados cadastrais -->
                    <form action="" method="POST" id="form-cadastrese" hidden>
                        <div class="inner-divider"></div>
                        <?php echo view('template/usuario/dadosCadastrais'); ?>

                        <div class="form-group row text-right">
                            <div class="col-sm-10">
                                <button type="button" id="salvar" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                    <!-- Fim dados cadastrais -->

                    <!-- Inicio novo perfil  -->
                    <form action="" method="POST" id="form-novo-perfil" hidden>
                        <div class="inner-divider"></div>
                        <?php echo view('app/perfil/novoPerfil'); ?>

                        <div class="form-group row text-right">
                            <div class="col-sm-10">
                                <button type="button" id="salvar-novo-perfil" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                    <!-- Fim novo perfil -->
                </div>
            </div>
        </div>
    </div>

<script>
    function dadosCadastrais() {
        $('#btn-dados-cadastrais').on('click', function () {
            $("#form-cadastrese").attr('hidden', false);
            $("#form-novo-perfil").attr('hidden', true);
            $("#div-meus-perfis").attr('hidden', true);
        });
    }

    function meusPerfis() {
        $('#btn-meus-perfis').on('click', function () {
            $("#div-meus-perfis").attr('hidden', false);
            $("#form-cadastrese").attr('hidden', true);
            $("#form-novo-perfil").attr('hidden', true);
        });
    }

    function novoPerfil() {
        $('#btn-novo-perfil').on('click', function () {
            $("#form-novo-perfil").attr('hidden', false);
            $("#div-meus-perfis").attr('hidden', true);
            $("#form-cadastrese").attr('hidden', true);
        });
    }

    $(document).ready(function() {
        dadosCadastrais();
        meusPerfis();
        novoPerfil();
    });
</script>