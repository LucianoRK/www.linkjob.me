<h2 class="section-heading-all" style="text-align: center!important;">Diretor(a)</h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-diretor" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <div class="input-group">
            <select class="multiple-select input-diretor categoria-fotos-diretor" name="diretor[0][categoria][]" multiple="multiple">
                <?php if ($categoria_diretor) { ?>
                    <?php foreach ($categoria_diretor as $diretor) { ?>
                        <?php if ($diretor['nome'] != 'Video') { ?>
                            <option value="<?php echo $diretor['grupo_foto_id']; ?>"> <?php echo $diretor['nome']; ?> </option>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </select>
            <span class="input-group-btn">
                <button style="height: 38px;" class="btn btn-default" type="button" id="adicionar-input-foto-diretor"><i class="text-success fas fa-plus"></i></button>
            </span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="diretor[0][upload][]" class="btn btn-primary upload-diretor" accept="image/png, image/jpg, image/jpeg" multiple />
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg.<br> O limite por foto é de até 10mb.</p>
    </div>
</div>
<div id="div-mais-foto-diretor"></div>