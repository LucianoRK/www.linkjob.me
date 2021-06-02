<h2 class="section-heading-all titulo-perfil-fotografo-filmaker" style="text-align: center!important;"></h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-fotografo-filmaker" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select class="multiple-select input-fotografo-filmaker" name="fotografoFilmaker[]" multiple="multiple" id="categoria-fotos-fotografo-filmaker">
            <?php if ($fotografo_filmaker) { ?>
                <?php foreach ($fotografo_filmaker as $fotografo) { ?>
                    <?php if ($fotografo['nome'] != 'Video') { ?>
                        <option value="<?php echo $fotografo['grupo_foto_id']; ?>"> <?php echo $fotografo['nome']; ?> </option>
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
        <div class='col-md-7' id="images-fotografo-filmaker"></div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="upload_fotografo_filmaker[]" id="upload-fotografo-filmaker" class="btn btn-primary" accept="image/png, image/jpg, image/jpeg" multiple />
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb. <br> É possível anexar até 10 fotos.</p>
    </div>
</div>
<div class="form-group row" id="div-video-filmaker" hidden>
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label">Video:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="video_filmaker[]" value="" type="text" class="form-control input-fotografo-filmaker" placeholder="Caso possua video basta informar o link">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="adicionar-input-video-filmaker"><i class="text-success fas fa-plus"></i></button>
            </span>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div id="div-videos-filmaker">
            
        </div>
    </div>
</div>
