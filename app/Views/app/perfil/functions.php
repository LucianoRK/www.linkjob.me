<script>
    const perfil = {
        init: () => {
            perfil.camposModeloPromotorInfluencer(),
                perfil.mostrarCampos(),
                perfil.multiSelect(),
                perfil.previewImagemModelo(),
                perfil.validaQuantidadeFotoModelo()
        },

        camposModeloPromotorInfluencer: () => {
            $('#perfil_1').on('click', function() {
                if ($('#perfil_1').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                }
            });

            $('#perfil_2').on('click', function() {
                if ($('#perfil_2').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                }
            });

            $('#perfil_3').on('click', function() {
                if ($('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
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
            $('#upload').on('change', function() {
                if ($(this)[0].files.length > 1) {
                    $('#images-modelo').html(false);

                    for (i = 0; i < $(this)[0].files.length; i++) {
                        let fileReader = new FileReader();
                        let file = $(this)[0].files[i];
                        let img = 'img-modelo-' + i;
                        let indice = i;

                        fileReader.onloadend = function() {
                            $('#images-modelo').append('<img src="' + fileReader.result + '" width="100" height="100" id="' + img + '" />&emsp;');
                        }

                        fileReader.readAsDataURL(file);
                    }
                } else {
                    let fileReader = new FileReader();
                    let file = $(this)[0].files[0];

                    fileReader.onloadend = function() {
                        $('#images-modelo').html('<img src="' + fileReader.result + '" width="100" height="100" id="img-modelo-0" />&emsp;');
                    }

                    fileReader.readAsDataURL(file);
                }
            });
        },

        validaQuantidadeFotoModelo: () => {
           
        }
    }

    perfil.init()
</script>