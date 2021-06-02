<h2 class="section-heading-all titulo-perfil-maquiador-cabeleireiro" style="text-align: center!important;"></h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-maquiador-cabeleireiro" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select class="multiple-select input-maquiador-cabeleireiro categoria-maquiador-cabeleireiro" name="maquiadorCabeleireiro[]" multiple="multiple" id="categoria-fotos-maquiador">
            <?php if ($cabeleireiro_maquiador) { ?>
                <?php foreach ($cabeleireiro_maquiador as $maquiador) { ?>
                    <?php if ($maquiador['grupo_foto_id'] != 5) { ?>
                        <option value="<?php echo $maquiador['grupo_foto_id']; ?>"> <?php echo $maquiador['nome']; ?> </option>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12">
        <div class='col-md-4'></div>
        <div class='col-md-7' id="images-maquiador"></div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="upload_maquiador_cabeleireiro[]" id="upload-maquiador-cabeleireiro" class="btn btn-primary" accept="image/png, image/jpg, image/jpeg" multiple />
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb. <br> É possível anexar até 10 fotos.</p>
    </div>
</div>