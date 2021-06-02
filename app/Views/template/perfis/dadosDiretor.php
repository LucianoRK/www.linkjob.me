<h2 class="section-heading-all" style="text-align: center!important;">Diretor(a)</h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-diretor" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select class="multiple-select input-diretor" name="diretor[]" multiple="multiple" id="categoria-fotos-diretor">
            <?php if ($categoria_diretor) { ?>
                <?php foreach ($categoria_diretor as $diretor) { ?>
                    <?php if ($diretor['nome'] != 'Video') { ?>
                        <option value="<?php echo $diretor['grupo_foto_id']; ?>"> <?php echo $diretor['nome']; ?> </option>
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
        <div class='col-md-7' id="images-diretor"></div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="upload_diretor[]" id="upload-diretor" class="btn btn-primary" accept="image/png, image/jpg, image/jpeg" multiple />
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb. <br> É possível anexar até 10 fotos.</p>
    </div>
</div>