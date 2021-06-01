<script>
    const trabalheConoscoFunctions = {
        init: () => {
                trabalheConoscoFunctions.camposModeloPromotorInfluencer(),
                trabalheConoscoFunctions.mostrarCampos(),
                trabalheConoscoFunctions.multiSelect()
        },

        camposModeloPromotorInfluencer: () => {
            $('#perfil_1').on('click', function () {
                if ($('#perfil_1').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                }
            });

            $('#perfil_2').on('click', function () {
                if ($('#perfil_2').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                }
            });

            $('#perfil_3').on('click', function () {
                if ($('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', false);
                } else if (!$('#perfil_1').prop('checked') && !$('#perfil_2').prop('checked') && !$('#perfil_3').prop('checked')) {
                    $('#div-modelo-promotor-influencer').attr('hidden', true);
                    $('.input-modelo-promotor-influencer').val('');
                }
            });
        },

        mostrarCampos: () => {
            $('#cor_cabelo').on('click', function () {
                let cor_cabelo = $(this).val();

                if (cor_cabelo == 'outro') {
                    $('#div-cor-cabelo-outro').attr('hidden', false);
                } else {
                    $('#div-cor-cabelo-outro').attr('hidden', true);
                }
            });

            $('#cor_olhos').on('click', function () {
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
        }
    }

    trabalheConoscoFunctions.init()
</script>