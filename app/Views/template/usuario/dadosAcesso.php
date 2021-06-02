<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="email" class="col-md-2 col-form-label"><span class="text-danger">*</span>Email:</label>
    <div class="col-md-6">
        <input name="email" value="<?= $registro['email'] ?? ''; ?>" type="email" id="email" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="senha" class="col-md-2 col-form-label"><span class="text-danger">*</span>Senha:</label>
    <div class="col-md-6">
        <input name="senha" value="" type="password" id="senha" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="repita_senha" class="col-md-2 col-form-label"><span class="text-danger">*</span>Repita Senha:</label>
    <div class="col-md-6">
        <input name="repita_senha" value="" type="password" id="repita_senha" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>