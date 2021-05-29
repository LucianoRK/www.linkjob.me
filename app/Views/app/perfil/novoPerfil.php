<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Perfil:</label>
    <div class="col-md-6">
        <div class="checkbox">
            <?php if ($perfis) { ?>
                <?php foreach ($perfis as $perfil) { ?>
                    <label>
                        <input type="checkbox" name="perfil" value="<?php echo $perfil['perfil_id']; ?>">
                        <?php echo $perfil['nome']; ?>
                    </label>
                    <br>
                <?php } ?>
            <?php } ?>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>

<!-- Campos ao selecionar Modelo/Promoto/Influencer -->
<div id="campos-modelos">

</div>