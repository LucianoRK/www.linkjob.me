<script>
    const trabalheConoscoFunctions = {
        init: () => {
                trabalheConoscoFunctions.camposModeloPromotorInfluencer()
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
    }

    trabalheConoscoFunctions.init()
</script>