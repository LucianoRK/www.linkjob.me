<script>
    const perfil = {
        init: () => {
            perfil.camposModeloPromotorInfluencer(),
                perfil.mostrarCampos(),
                perfil.multiSelect(),
                perfil.previewImagemModelo(),
                perfil.validacaoPerfis()
        },

        camposModeloPromotorInfluencer: () => {
            $('#perfil_1').on('click', function() {
                if ($('#perfil_1').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').attr('checked', false);
                    document.getElementById('upload-modelo').value = "";
                    $('#images-modelo').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });

            $('#perfil_2').on('click', function() {
                if ($('#perfil_2').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').attr('checked', false);
                    document.getElementById('upload-modelo').value = "";
                    $('#images-modelo').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });

            $('#perfil_3').on('click', function() {
                if ($('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').attr('checked', false);
                    document.getElementById('upload-modelo').value = "";
                    $('#images-modelo').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });

            $('.classe_perfil').on('click', function() {
                if ($('#perfil_1').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo');
                }

                if ($('#perfil_2').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Influencer');
                }

                if ($('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Promotor(a)');
                }

                if ($('#perfil_1').prop('checked') && $('#perfil_2').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo e Influencer');
                }

                if ($('#perfil_1').prop('checked') && $('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo e Promotor(a)');
                }

                if ($('#perfil_2').prop('checked') && $('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Influencer e Promotor(a)');
                }

                if ($('#perfil_1').prop('checked') && $('#perfil_2').prop('checked') && $('#perfil_3').prop('checked')) {
                    $('.titulo-perfil-modelo-influencer-promotor').html('Modelo, Influencer e Promotor(a)');
                }
            });
        },

        mostrarCampos: () => {
            $('#cor_cabelo').on('click', function() {
                let cor_cabelo = $(this).val();

                if (cor_cabelo == 'outro') {
                    $('#div-cor-cabelo-outro').attr('hidden', false);
                } else {
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                }
            });

            $('#cor_olhos').on('click', function() {
                let cor_cabelo = $(this).val();

                if (cor_cabelo == 'outro') {
                    $('#div-cor-olhos-outro').attr('hidden', false);
                } else {
                    $('#div-cor-olhos-outro').attr('hidden', true);
                }
            });

            $('.possui_tatuagem').on('click', function() {
                if ($('#tatuagem_sim').prop('checked')) {
                    $('#div-possui-tatuagem').attr('hidden', false);
                } else {
                    $('#div-possui-tatuagem').attr('hidden', true);
                }
            });

            $('.possui_drt').on('click', function() {
                if ($('#drt_sim').prop('checked')) {
                    $('#div-drt').attr('hidden', false);
                } else {
                    $('#div-drt').attr('hidden', true);
                }
            });
        },

        multiSelect: () => {
            $('.multiple-select').select2();
        },

        previewImagemModelo: () => {
            $('#upload-modelo').on('change', function() {
                // Não pode anexar mais que 10 fotos
                if ($(this)[0].files.length > 10) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 10');
                    document.getElementById('upload-modelo').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-modelo').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-modelo').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-modelo').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-modelo').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        },

        validacaoPerfis: () => {
            $('#salvar-novo-perfil').on('click', function() {
                let erro = true;

                $('.classe_perfil').each(function(index, value) {
                    let id_nome = $(value).attr('id');

                    if ($('#' + id_nome).prop('checked')) {
                        erro = false;
                    }
                });

                if (erro) {
                    $('.classe_perfil').first().parent().parent().find('.msg').html('Selecione ao menos uma opção.');
                } else {
                    perfil.validacaoCamposModeloPromotorInfluencer();
                }
            })
        },

        validacaoCamposModeloPromotorInfluencer: () => {
            if ($('#perfil_1').prop('checked') || $('#perfil_2').prop('checked') || $('#perfil_3').prop('checked')) {
                let erro = false;

                $('*').removeClass('has-error');
                $('.msg').html('');

                if (!$('#altura').val()) {
                    erro = true;

                    $('#altura').parent().addClass('has-error')
                    $('#altura').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#peso').val()) {
                    erro = true;

                    $('#peso').parent().addClass('has-error')
                    $('#peso').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#busto_torax').val()) {
                    erro = true;

                    $('#busto_torax').parent().addClass('has-error')
                    $('#busto_torax').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#cintura').val()) {
                    erro = true;

                    $('#cintura').parent().addClass('has-error')
                    $('#cintura').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#quadril').val()) {
                    erro = true;

                    $('#quadril').parent().addClass('has-error')
                    $('#quadril').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#manequim').val()) {
                    erro = true;

                    $('#manequim').parent().addClass('has-error')
                    $('#manequim').parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#calcado').val()) {
                    erro = true;

                    $('#calcado').parent().addClass('has-error')
                    $('#calcado').parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#tatuagem_sim').prop('checked') && !$('#tatuagem_nao').prop('checked')) {
                    erro = true;

                    $('#tatuagem_sim').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#cor_pele').val()) {
                    erro = true;

                    $('#cor_pele').parent().addClass('has-error')
                    $('#cor_pele').parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#cor_cabelo').val()) {
                    erro = true;

                    $('#cor_cabelo').parent().addClass('has-error')
                    $('#cor_cabelo').parent().find('.msg').html('Campo obrigatório.');

                } else if ($('#cor_cabelo').val() == 'outro' && !$('#cor_cabelo_outro').val()) {
                    erro = true;

                    $('#cor_cabelo_outro').parent().addClass('has-error')
                    $('#cor_cabelo_outro').parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#cor_olhos').val()) {
                    erro = true;

                    $('#cor_olhos').parent().addClass('has-error')
                    $('#cor_olhos').parent().find('.msg').html('Campo obrigatório.');

                } else if ($('#cor_olhos').val() == 'outro' && !$('#cor_olhos_outro').val()) {
                    erro = true;

                    $('#cor_olhos_outro').parent().addClass('has-error')
                    $('#cor_olhos_outro').parent().find('.msg').html('Campo obrigatório.<br>');
                }

                if (!$('#drt_sim').prop('checked') && !$('#drt_nao').prop('checked')) {
                    erro = true;

                    $('#drt_sim').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!$('#categoria-fotos-modelo').val()) {
                    erro = true;

                    $('#categoria-fotos-modelo').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if ($("#upload-modelo")[0].files.length <= 0) {
                    erro = true;

                    $('#upload-modelo').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                }

                if (!$('#video_apresentacao').val()) {
                    erro = true;

                    $('#video_apresentacao').parent().addClass('has-error')
                    $('#video_apresentacao').parent().parent().find('.msg').html('Campo obrigatório.');
                }

                if (!erro) {
                    $("#form-novo-perfil").submit();
                } else {
                    templateFunctions.swalPadrao('warning', 'Atenção!', 'Preencha os campos corretamente.');
                }
            }
        }
    }

    perfil.init()
</script>