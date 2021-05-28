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
                        toastr.error('<?php echo session()->getFlashdata('responseFlash')['mensagem']; ?>')
                    <?php } else if ('success' === session()->getFlashdata('responseFlash')['tipo']) { ?>
                        toastr.success('<?php echo session()->getFlashdata('responseFlash')['mensagem']; ?>')
                    <?php } ?>
                <?php } ?>
            });
        }
    }

    templateFunctions.init()
</script>