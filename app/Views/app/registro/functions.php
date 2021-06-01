<script>
    const registroFunctions = {
        init: () => {
            registroFunctions.comboCidades(),
            registroFunctions.validacao(),
            registroFunctions.setarDadosCadastrais()
        },
        comboCidades: () => {
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
        },

        validacao: () => {
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

                if (!$('#cnpj_mei').val()) {
                    erro = true;

                    $('#cnpj_mei').parent().addClass('has-error')
                    $('#cnpj_mei').parent().find('.msg').html('Campo obrigatório.');
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

                if (!erro) {
                    $("#form-cadastrese").submit();
                } else {
                    templateFunctions.swalPadrao('warning', 'Atenção!', 'Preencha os campos corretamente.');
                }
            })
        },

        setarDadosCadastrais: () => {
            $(document).ready(function() {
                let genero = '<?php echo $registro['genero'] ?? false; ?>';
                let cnpj_mei = '<?php echo $registro['cnpj'] ?? false; ?>';
                let escolaridade = '<?php echo $registro['escolaridade'] ?? false; ?>';
                let estado = '<?php echo $registro['estado']['estado_id'] ?? false; ?>';
                let cidade = '<?php echo $registro['cidade_id'] ?? false; ?>';
                let tipo_conta = '<?php echo $registro['tipo_conta'] ?? false; ?>';

                if (genero) {
                    $('#genero').val(genero).trigger('change');
                }
                if (cnpj_mei) {
                    $('#cnpj_mei').val(cnpj_mei).trigger('change');
                }
                if (escolaridade) {
                    $('#escolaridade').val(escolaridade).trigger('change');
                }
                if (estado) {
                    $('#estado').val(estado).trigger('change');
                }
                if (cidade) {
                    setTimeout(function(){
                        $('#cidade').val(cidade).trigger('change');
                    },2000);
                }
                if (tipo_conta) {
                    if (tipo_conta == 'conta_corrente') {
                        $('#conta_corrente').attr('checked', true);
                    } else {
                        $('#conta_poupanca').attr('checked', true);
                    }
                }
            });
        },
    }

    $(document).ready(function() {
        registroFunctions.init()
    });
</script>