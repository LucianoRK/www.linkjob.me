<script>
    const templateFunctions = {
        init: () => {
            templateFunctions.funcaoMensagem(),
            templateFunctions.funcaoMask(),
            templateFunctions.selectSearching()
        },
        funcaoMensagem: () => {
            $(document).ready(function() {
                toastr.options = {
                    "positionClass": "toast-bottom-right",
                }

                <?php if ( session()->getFlashdata('responseFlash') ) { ?>
                    <?php if ('error' === session()->getFlashdata('responseFlash')['tipo']) { ?>
                        let mensagem = '<?php echo session()->getFlashdata('responseFlash')['mensagem'] ?? null; ?>';

                        if (mensagem) {
                            try {
                                let objeto = JSON.parse(mensagem);

                                Object.keys(objeto).forEach(function(item) {
                                    toastr.error(objeto[item]);
                                });
                            } catch (e) {
                                toastr.error(mensagem);
                            }
                        }
                       
                    <?php } else if ('success' === session()->getFlashdata('responseFlash')['tipo']) { ?>
                        let mensagem = '<?php echo session()->getFlashdata('responseFlash')['mensagem'] ?? null; ?>';

                        if (mensagem) {
                            toastr.success(mensagem)
                        }
                    <?php } ?>
                <?php } ?>
            });
        },

        funcaoMask: () => {
            $('.cepMask').mask('00000-000');
            $('.cpfMask').mask('000.000.000-00');
            $('.cnpjMask').mask('00.000.000/0000-00');
            $('.celularMask').mask('(00) 0 0000-0000');
            $('.telefoneMask').mask('(00) 0000-0000');
            $('.dataMask').mask('00/00/0000');
            $('.alturaMask').mask('0,00');
            $('.pesoMask').mask('000');
            $('.bustoMask').mask('000-000');
            $('.calcadoMask').mask('00-00');
            $('.inputMoneyBr').maskMoney({
                decimal: ',',
                thousands: '.'
            });
            $('.inputInteger').mask('000');
        },

        selectSearching: () => {
            $(document).ready(function() {
                $('.selectSearching').css('width', '100%');
                $('.selectSearching').select2({
                    theme: 'bootstrap4'
                });
            });
        }
    }

    templateFunctions.init()
</script>