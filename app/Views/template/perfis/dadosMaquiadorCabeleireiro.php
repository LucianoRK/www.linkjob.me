<h2 class="section-heading-all titulo-perfil-maquiador-cabeleireiro" style="text-align: center!important;"></h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <div class="input-group">
            <select class="multiple-select categoria-fotos-maquiador-cabeleireiro input-maquiador-cabeleireiro" name="maquiador_cabeleireiro[0][categoria][]" multiple="multiple">
                <?php if ($cabeleireiro_maquiador) { ?>
                    <?php foreach ($cabeleireiro_maquiador as $maquiador) { ?>
                        <?php if ($maquiador['nome'] != 'Video') { ?>
                            <option value="<?php echo $maquiador['grupo_foto_id']; ?>"> <?php echo $maquiador['nome']; ?> </option>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </select>
            <span class="input-group-btn">
                <button style="height: 38px;" class="btn btn-default" type="button" id="adicionar-input-foto-maquiador-cabeleireiro"><i class="text-success fas fa-plus"></i></button>
            </span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="maquiador_cabeleireiro[0][upload][]" class="btn btn-primary upload-maquiador-cabeleireiro" accept="image/png, image/jpg, image/jpeg" multiple />
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg.<br> O limite por foto é de até 10mb.</p>
    </div>
</div>
<div id="div-mais-foto-maquiador-cabeleireiro"></div>