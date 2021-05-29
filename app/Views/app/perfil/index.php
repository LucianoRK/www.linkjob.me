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
                        <?php echo view('app/cadastrese/dadosCadastrais'); ?>

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
                                <button type="button" id="salvar" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                    <!-- Fim novo perfil -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function comboCidades() {
        $("#estado").on('change', function() {
            let estado_id = $(this).val();

            $.ajax({
                url: "combo-cidades",
                type: 'post',
                dataType: "JSON",
                data: {
                    estado_id
                },
                success: function(data) {
                    console.log(data);

                    if (data) {
                        $('#cidade').html('');
                        $('#cidade').append('<option selected value="0">Selecione uma opção</option>');

                        $.each(data, function(index, value) {
                            $('#cidade').append('<option value=' + value['cidade_id'] + '>' + value['nome'] + '</option>');
                        });
                    }
                },
            });
        });
    }

    function validacao() {
        $('#salvar').on('click', function() {
            let erro = false;

            $('*').removeClass('has-error');
            $('.msg').html('');

            if (!$('#nome').val()) {
                erro = true;

                $('#nome').parent().addClass('has-error')
                $('#nome').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#genero').val()) {
                erro = true;

                $('#genero').parent().addClass('has-error')
                $('#genero').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#data_nascimento').val()) {
                erro = true;

                $('#data_nascimento').parent().addClass('has-error')
                $('#data_nascimento').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#cpf').val()) {
                erro = true;

                $('#cpf').parent().addClass('has-error')
                $('#cpf').parent().find('.msg').html('Campo obrigatório.');
            } else if ($('#cpf').val().length != 14) {
                erro = true;

                $('#cpf').parent().addClass('has-error')
                $('#cpf').parent().find('.msg').html('Preencha o campo corretamente');
            }

            if (!$('#rg').val()) {
                erro = true;

                $('#rg').parent().addClass('has-error')
                $('#rg').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#escolaridade').val()) {
                erro = true;

                $('#escolaridade').parent().addClass('has-error')
                $('#escolaridade').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#endereco').val()) {
                erro = true;

                $('#endereco').parent().addClass('has-error')
                $('#endereco').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#estado').val()) {
                erro = true;

                $('#estado').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#cidade').val()) {
                erro = true;

                $('#cidade').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#cep').val()) {
                erro = true;

                $('#cep').parent().addClass('has-error')
                $('#cep').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#celular').val()) {
                erro = true;

                $('#celular').parent().addClass('has-error')
                $('#celular').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#instagram').val()) {
                erro = true;

                $('#instagram').parent().addClass('has-error')
                $('#instagram').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#banco').val()) {
                erro = true;

                $('#banco').parent().addClass('has-error')
                $('#banco').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#agencia').val()) {
                erro = true;

                $('#agencia').parent().addClass('has-error')
                $('#agencia').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#conta').val()) {
                erro = true;

                $('#conta').parent().addClass('has-error')
                $('#conta').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#conta_corrente').prop('checked') && !$('#conta_poupanca').prop('checked')) {
                erro = true;

                $('#conta_corrente').parent().parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#email').val()) {
                erro = true;

                $('#email').parent().addClass('has-error')
                $('#email').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#senha').val()) {
                erro = true;

                $('#senha').parent().addClass('has-error')
                $('#senha').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#repita_senha').val()) {
                erro = true;

                $('#repita_senha').parent().addClass('has-error')
                $('#repita_senha').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#categoria').val()) {
                erro = true;

                $('#categoria').parent().addClass('has-error')
                $('#categoria').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!erro) {
                $("#form-cadastrese").submit();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Atenção!',
                    text: 'Preencha os campos corretamente.',
                })
            }
        })
    }

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
        comboCidades();
        validacao();
        dadosCadastrais();
        meusPerfis();
        novoPerfil();
    });
</script>