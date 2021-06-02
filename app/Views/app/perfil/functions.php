<script>
    const perfil = {
        init: () => {
            perfil.camposModeloPromotorInfluencer(),
                perfil.mostrarCamposOutrosModeloInfluencerPromotor(),
                perfil.multiSelect(),
                perfil.previewImagemModeloInfluencerPromotor(),
                perfil.validacaoPerfis(),
                perfil.adicionarInputVideoModeloInfluencerPromotor(),
                perfil.excluirInputVideoModeloInfluencerPromotor(),
                perfil.camposMaquiadorCabeleireiro(),
                perfil.previewImagemMaquiadorCabeleireiro(),
                perfil.camposFotografoFilmaker(),
                perfil.previewImagemFotografoFilmaker(),
                perfil.adicionarInputVideoFilmaker(),
                perfil.excluirInputVideoFilmaker(),
                perfil.camposDiretor(),
                perfil.previewImagemDiretor(),
                perfil.camposProdutor(),
                perfil.previewImagemProdutor(),
                perfil.camposLocacao(),
                perfil.previewImagemLocacao()
        },

        camposModeloPromotorInfluencer: () => {
            $('#perfil_1').on('click', function() {
                if ($('#perfil_1').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').attr('checked', false);
                    document.getElementById('upload-modelo-influencer-promotor').value = "";
                    $('#images-modelo-influencer-promotor').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $(".excluir-input-video-modelo-influencer-promotor").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                }
            });

            $('#perfil_2').on('click', function() {
                if ($('#perfil_2').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').attr('checked', false);
                    document.getElementById('upload-modelo-influencer-promotor').value = "";
                    $('#images-modelo-influencer-promotor').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $(".excluir-input-video-modelo-influencer-promotor").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                }
            });

            $('#perfil_3').on('click', function() {
                if ($('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').val('');
                    $('.possui_tatuagem').attr('checked', false);
                    $('#div-possui-tatuagem').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').trigger('change');
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                    $('#div-cor-olhos-outro').attr('hidden', true);
                    $('.possui_drt').attr('checked', false);
                    $('#div-drt').attr('hidden', true);
                    $('.input-modelo-influencer-promotor').attr('checked', false);
                    document.getElementById('upload-modelo-influencer-promotor').value = "";
                    $('#images-modelo-influencer-promotor').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                    $(".excluir-input-video-modelo-influencer-promotor").each(function(index) {
                        $(this).parent().parent().remove();
                    });
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

                if ($('#perfil_4').prop('checked')) {
                    $('.titulo-perfil-maquiador-cabeleireiro').html('Maquiador(a)');
                }

                if ($('#perfil_5').prop('checked')) {
                    $('.titulo-perfil-maquiador-cabeleireiro').html('Cabeleireiro(a)');
                }

                if ($('#perfil_4').prop('checked') && $('#perfil_5').prop('checked')) {
                    $('.titulo-perfil-maquiador-cabeleireiro').html('Maquiador(a) e Cabeleireiro(a)');
                }

                if ($('#perfil_6').prop('checked')) {
                    $('.titulo-perfil-fotografo-filmaker').html('Fotógrafo(a)');
                }

                if ($('#perfil_7').prop('checked')) {
                    $('.titulo-perfil-fotografo-filmaker').html('Filmmaker');
                    $('#div-video-filmaker').attr('hidden', false);
                } else {
                    $('#div-video-filmaker').attr('hidden', true);
                    $('.input-filmaker').val('');
                    $(".excluir-input-video-filmaker").each(function(index) {
                        $(this).parent().parent().remove();
                    });
                }

                if ($('#perfil_6').prop('checked') && $('#perfil_7').prop('checked')) {
                    $('.titulo-perfil-fotografo-filmaker').html('Fotógrafo(a) e Filmmaker');
                }
            });
        },

        mostrarCamposOutrosModeloInfluencerPromotor: () => {
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

        previewImagemModeloInfluencerPromotor: () => {
            $('#upload-modelo-influencer-promotor').on('change', function() {
                // Não pode anexar mais que 10 fotos
                if ($(this)[0].files.length > 10) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 10');
                    document.getElementById('upload-modelo-influencer-promotor').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-modelo-influencer-promotor').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-modelo-influencer-promotor').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-modelo-influencer-promotor').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-modelo-influencer-promotor').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        },

        validacaoPerfis: () => {
            $(document).on('click', '#salvar-novo-perfil', function() {
                let perfil_selecionado = false;
                let erro = false;

                $('*').removeClass('has-error');
                $('.msg').html('');

                $('.classe_perfil').each(function(index, value) {
                    let id_nome = $(value).attr('id');

                    if ($('#' + id_nome).prop('checked')) {
                        perfil_selecionado = true;
                    }
                });

                if (!perfil_selecionado) {
                    $('.classe_perfil').first().parent().parent().find('.msg').html('Selecione ao menos uma opção.');
                } else {
                    // Primeiro valida Modelo, Promotor e Maquiador
                    if ($('#perfil_1').prop('checked') || $('#perfil_2').prop('checked') || $('#perfil_3').prop('checked')) {
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

                        if (!$('#categoria-fotos-modelo-influencer-promotor').val()) {
                            erro = true;

                            $('#categoria-fotos-modelo-influencer-promotor').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if ($("#upload-modelo-influencer-promotor")[0].files.length <= 0) {
                            erro = true;

                            $('#upload-modelo-influencer-promotor').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                        }

                        if (!$('#video_apresentacao').val()) {
                            erro = true;

                            $('#video_apresentacao').parent().addClass('has-error')
                            $('#video_apresentacao').parent().parent().find('.msg').html('Campo obrigatório.');
                        }
                    }

                    if ($('#perfil_4').prop('checked') || $('#perfil_5').prop('checked')) {
                        if (!$('#categoria-fotos-maquiador-cabeleireiro').val()) {
                            erro = true;

                            $('#categoria-fotos-maquiador-cabeleireiro').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if ($("#upload-maquiador-cabeleireiro")[0].files.length <= 0) {
                            erro = true;

                            $('#upload-maquiador-cabeleireiro').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                        }
                    }

                    if ($('#perfil_6').prop('checked') || $('#perfil_7').prop('checked')) {
                        if (!$('#categoria-fotos-fotografo-filmaker').val()) {
                            erro = true;

                            $('#categoria-fotos-fotografo-filmaker').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if ($("#upload-fotografo-filmaker")[0].files.length <= 0) {
                            erro = true;

                            $('#upload-fotografo-filmaker').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                        }
                    }

                    if ($('#perfil_8').prop('checked')) {
                        if (!$('#categoria-fotos-diretor').val()) {
                            erro = true;

                            $('#categoria-fotos-diretor').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if ($("#upload-diretor")[0].files.length <= 0) {
                            erro = true;

                            $('#upload-diretor').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                        }
                    }

                    if ($('#perfil_9').prop('checked')) {
                        if (!$('#categoria-fotos-produtor').val()) {
                            erro = true;

                            $('#categoria-fotos-produtor').parent().parent().find('.msg').html('Campo obrigatório.');
                        }

                        if ($("#upload-produtor")[0].files.length <= 0) {
                            erro = true;

                            $('#upload-produtor').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                        }
                    }

                    if ($('#perfil_10').prop('checked')) {
                        if (!$('#categoria-fotos-locacao').val()) {
                            erro = true;

                            $('#categoria-fotos-locacao').parent().parent().find('.msg').html('Campo obrigatório.');
                        }
                        if ($("#upload-locacao")[0].files.length <= 0) {
                            erro = true;

                            $('#upload-locacao').parent().parent().find('.msg').html('Anexe ao menos uma foto.');
                        }
                    }

                    if (!erro) {
                        $("#form-novo-perfil").submit();
                    } else {
                        templateFunctions.swalPadrao('warning', 'Atenção!', 'Preencha os campos corretamente.');
                    }
                }
            })
        },

        adicionarInputVideoModeloInfluencerPromotor: () => {
            $('#adicionar-input-video-modelo-influencer-promotor').on('click', function() {
                $('#div-videos-modelo-influencer-promotor').append('<div class="input-group"><input name="video_modelo_influencer_promotor[]" value="" type="text" class="form-control input-modelo-influencer-promotor" placeholder="Caso possua video basta informar o link"><span class="input-group-btn"><button class="btn btn-default excluir-input-video-modelo-influencer-promotor" type="button"><i class="text-danger fas fa-trash"></i></button></span><span class="text-danger msg" style="font-size: 13px;"></span></div>');
            });
        },

        excluirInputVideoModeloInfluencerPromotor: () => {
            $(document).on('click', '.excluir-input-video-modelo-influencer-promotor', function() {
                $(this).parent().parent().remove();
            });
        },

        camposFotografoFilmaker: () => {
            $('#perfil_4').on('click', function() {
                if ($('#perfil_4').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', false);
                } else if (!$('#perfil_4').prop('checked') && !$('#perfil_5').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', true);
                    $('.input-maquiador-cabeleireiro').val('');
                    $('.input-maquiador-cabeleireiro').trigger('change');
                    document.getElementById('upload-maquiador-cabeleireiro').value = "";
                    $('#images-maquiador-cabeleireiro').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });

            $('#perfil_5').on('click', function() {
                if ($('#perfil_5').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', false);
                } else if (!$('#perfil_4').prop('checked') && !$('#perfil_5').prop('checked')) {
                    $('#div-maquiador-cabeleireiro').attr('hidden', true);
                    $('.input-maquiador-cabeleireiro').val('');
                    $('.input-maquiador-cabeleireiro').trigger('change');
                    document.getElementById('upload-maquiador-cabeleireiro').value = "";
                    $('#images-maquiador-cabeleireiro').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });
        },

        previewImagemMaquiadorCabeleireiro: () => {
            $('#upload-maquiador-cabeleireiro').on('change', function() {
                // Não pode anexar mais que 10 fotos
                if ($(this)[0].files.length > 10) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 10');
                    document.getElementById('upload-maquiador-cabeleireiro').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-modelo-influencer-promotor').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-maquiador-cabeleireiro').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-maquiador-cabeleireiro').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-maquiador-cabeleireiro').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        },

        camposMaquiadorCabeleireiro: () => {
            $('#perfil_6').on('click', function() {
                if ($('#perfil_6').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', false);
                } else if (!$('#perfil_6').prop('checked') && !$('#perfil_7').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', true);
                    $('.input-fotografo-filmaker').val('');
                    $('.input-fotografo-filmaker').trigger('change');
                    document.getElementById('upload-fotografo-filmaker').value = "";
                    $('#images-fotografo-filmaker').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });

            $('#perfil_7').on('click', function() {
                if ($('#perfil_7').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', false);
                } else if (!$('#perfil_7').prop('checked') && !$('#perfil_6').prop('checked')) {
                    $('#div-fotografo-filmaker').attr('hidden', true);
                    $('.input-fotografo-filmaker').val('');
                    $('.input-fotografo-filmaker').trigger('change');
                    document.getElementById('upload-fotografo-filmaker').value = "";
                    $('#images-fotografo-filmaker').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });
        },

        previewImagemFotografoFilmaker: () => {
            $('#upload-fotografo-filmaker').on('change', function() {
                // Não pode anexar mais que 10 fotos
                if ($(this)[0].files.length > 10) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 10');
                    document.getElementById('upload-fotografo-filmaker').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-fotografo-filmaker').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-fotografo-filmaker').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-fotografo-filmaker').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-fotografo-filmaker').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        },

        adicionarInputVideoFilmaker: () => {
            $('#adicionar-input-video-filmaker').on('click', function() {
                $('#div-videos-filmaker').append('<div class="input-group"><input name="video_filmaker[]" value="" type="text" class="form-control input-filmaker" placeholder="Caso possua video basta informar o link"><span class="input-group-btn"><button class="btn btn-default excluir-input-video-filmaker" type="button"><i class="text-danger fas fa-trash"></i></button></span><span class="text-danger msg" style="font-size: 13px;"></span></div>');
            });
        },

        excluirInputVideoFilmaker: () => {
            $(document).on('click', '.excluir-input-video-filmaker', function() {
                $(this).parent().parent().remove();
            });
        },

        camposDiretor: () => {
            $('#perfil_8').on('click', function() {
                if ($('#perfil_8').prop('checked')) {
                    $('#div-diretor').attr('hidden', false);
                } else if (!$('#perfil_8').prop('checked')) {
                    $('#div-diretor').attr('hidden', true);
                    $('.input-diretor').val('');
                    $('.input-diretor').trigger('change');
                    document.getElementById('upload-diretor').value = "";
                    $('#images-diretor').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });
        },

        previewImagemDiretor: () => {
            $('#upload-diretor').on('change', function() {
                // Não pode anexar mais que 10 fotos
                if ($(this)[0].files.length > 10) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 10');
                    document.getElementById('upload-diretor').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-diretor').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-diretor').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-diretor').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-diretor').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        },

        camposProdutor: () => {
            $('#perfil_9').on('click', function() {
                if ($('#perfil_9').prop('checked')) {
                    $('#div-produtor').attr('hidden', false);
                } else if (!$('#perfil_9').prop('checked')) {
                    $('#div-produtor').attr('hidden', true);
                    $('.input-produtor').val('');
                    $('.input-produtor').trigger('change');
                    document.getElementById('upload-produtor').value = "";
                    $('#images-produtor').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });
        },

        previewImagemProdutor: () => {
            $('#upload-produtor').on('change', function() {
                // Não pode anexar mais que 10 fotos
                if ($(this)[0].files.length > 10) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 10');
                    document.getElementById('upload-produtor').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-produtor').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-produtor').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-produtor').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-produtor').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        },

        camposLocacao: () => {
            $('#perfil_10').on('click', function() {
                if ($('#perfil_10').prop('checked')) {
                    $('#div-locacao').attr('hidden', false);
                } else if (!$('#perfil_10').prop('checked')) {
                    $('#div-locacao').attr('hidden', true);
                    $('.input-locacao').val('');
                    $('.input-locacao').trigger('change');
                    document.getElementById('upload-locacao').value = "";
                    $('#images-locacao').html(false);
                    $('*').removeClass('has-error');
                    $('.msg').html('');
                }
            });
        },

        previewImagemLocacao: () => {
            $('#upload-locacao').on('change', function() {
                // Não pode anexar mais que 25 fotos
                if ($(this)[0].files.length > 25) {
                    templateFunctions.swalPadrao('warning', 'Atenção', 'A quantidade máxima de fotos é de até 25');
                    document.getElementById('upload-locacao').value = null;
                    return;
                }

                if ($(this)[0].files.length >= 1) {
                    $('#images-locacao').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        // Limite de 10mb por foto
                        if (file.size > 10000000) {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'O limite por foto é de até 10mb');
                            document.getElementById('upload-locacao').value = null;
                            return;
                        }

                        // Aceita apenas os formatos image/png, image/jpg, image/jpeg
                        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
                            templateFunctions.swalPadrao('warning', 'Atenção', 'É aceito apenas os formatos png, jpg e jpeg');
                            document.getElementById('upload-locacao').value = null;
                            return;
                        }

                        fileReader.onloadend = function() {
                            $('#images-locacao').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                }
            });
        }
    }

    perfil.init()
</script>