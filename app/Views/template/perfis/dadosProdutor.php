<h2 class="section-heading-all" style="text-align: center!important;">Produtor(a)</h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-produtor" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select class="multiple-select input-produtor" name="produtor[]" multiple="multiple" id="categoria-fotos-produtor">
            <?php if ($categoria_produtor) { ?>
                <?php foreach ($categoria_produtor as $produtor) { ?>
                    <?php if ($produtor['nome'] != 'Video') { ?>
                        <option value="<?php echo $produtor['grupo_foto_id']; ?>"> <?php echo $produtor['nome']; ?> </option>
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
        <div class='col-md-7' id="images-produtor"></div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="upload_produtor[]" id="upload-produtor" class="btn btn-primary" accept="image/png, image/jpg, image/jpeg" multiple />
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb. <br> É possível anexar até 10 fotos.</p>
    </div>
</div>