<script>
    const templateFunctions = {
        init: () => {
            templateFunctions.funcaoMensagem()
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
        }
    }

    templateFunctions.init()
</script>