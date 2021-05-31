<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="nome" class="col-md-2 col-form-label"><span class="text-danger">*</span>Nome:</label>
    <div class="col-md-6">
        <input name="nome" value="<?php echo $registro['nome'] ?? ''; ?>" type="text" id="nome" class="form-control" placeholder="Nome completo">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="nome_artistico" class="col-md-2 col-form-label">Nome Artístico:</label>
    <div class="col-md-6">
        <input name="nome_artistico" value="<?php echo $registro['nome_artistico'] ?? ''; ?>" type="text" id="nome_artistico" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="genero" class="col-md-2 col-form-label"><span class="text-danger">*</span>Gênero:</label>
    <div class="col-md-6">
        <select name="genero" id="genero" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="masculino"> Masculino </option>
            <option value="femenino"> Femenino </option>
            <option value="sem_genero"> Sem gênero </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="data_nascimento" class="col-md-2 col-form-label"><span class="text-danger">*</span>Data de Nascimento:</label>
    <div class="col-md-6">
        <input name="data_nascimento" value="<?php echo $registro['data_nascimento'] ?? ''; ?>" type="date" id="data_nascimento" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cpf" class="col-md-2 col-form-label"><span class="text-danger">*</span>CPF:</label>
    <div class="col-md-6">
        <input name="cpf" value="<?php echo $registro['cpf'] ?? ''; ?>" type="text" id="cpf" class="form-control cpfMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="rg" class="col-md-2 col-form-label"><span class="text-danger">*</span>RG:</label>
    <div class="col-md-6">
        <input name="rg" value="<?php echo $registro['rg'] ?? ''; ?>" type="text" id="rg" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cnpj_mei" class="col-md-2 col-form-label"><span class="text-danger">*</span>CNPJ/MEI:</label>
    <div class="col-md-6">
        <select name="cnpj_mei" id="cnpj_mei" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="nao_tenho"> Não tenho </option>
            <option value="tenho_mei"> Tenho CNPJ como MEI </option>
            <option value="tenho_cnpj_simples"> Tenho CNPJ pelo simples </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="escolaridade" class="col-md-2 col-form-label"><span class="text-danger">*</span>Escolaridade:</label>
    <div class="col-md-6">
        <select name="escolaridade" id="escolaridade" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="fundamental"> Fundamental </option>
            <option value="medio"> Ensino Médio </option>
            <option value="graduacao"> Graduação </option>
            <option value="pos_graduacao"> Pós Graduação </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="area" class="col-md-2 col-form-label">Área:</label>
    <div class="col-md-6">
        <input name="area" value="<?php echo $registro['area'] ?? ''; ?>" type="text" id="area" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="instituicao" class="col-md-2 col-form-label">Instituição:</label>
    <div class="col-md-6">
        <input name="instituicao" value="<?php echo $registro['instituicao'] ?? ''; ?>" type="text" id="instituicao" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="idiomas" class="col-md-2 col-form-label">Idiomas:</label>
    <div class="col-md-6">
        <input name="idiomas" value="<?php echo $registro['idiomas'] ?? ''; ?>" type="text" id="idiomas" class="form-control">
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="endereco" class="col-md-2 col-form-label"><span class="text-danger">*</span>Endereço:</label>
    <div class="col-md-6">
        <input name="endereco" value="<?php echo $registro['endereco'] ?? ''; ?>" type="text" id="endereco" class="form-control" placeholder="Endereço completo">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="complemento" class="col-md-2 col-form-label">Complemento:</label>
    <div class="col-md-6">
        <input name="complemento" value="<?php echo $registro['complemento'] ?? ''; ?>" type="text" id="complemento" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="estado" class="col-md-2 col-form-label"><span class="text-danger">*</span>Estado:</label>
    <div class="col-md-6">
        <select name="estado" id="estado" value="" class="form-control selectSearching">
            <option selected value=""> Selecione uma opção </option>
            <?php if ($estados) { ?>
                <?php foreach ($estados as $estado) { ?>
                    <option value="<?php echo $estado['estado_id']; ?>"> <?php echo $estado['nome']; ?> </option>
                <?php } ?>
            <?php } ?>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cidade" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cidade:</label>
    <div class="col-md-6">
        <select name="cidade" id="cidade" value="" class="form-control selectSearching">
            <option selected value=""> Selecione uma opção </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cep" class="col-md-2 col-form-label"><span class="text-danger">*</span>CEP:</label>
    <div class="col-md-6">
        <input name="cep" value="<?php echo $registro['cep'] ?? ''; ?>" type="text" id="cep" class="form-control cepMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="celular" class="col-md-2 col-form-label"><span class="text-danger">*</span>Celular:</label>
    <div class="col-md-6">
        <input name="celular" value="<?php echo $registro['celular'] ?? ''; ?>" type="text" id="celular" class="form-control celularMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="instagram" class="col-md-2 col-form-label"><span class="text-danger">*</span>Instagram:</label>
    <div class="col-md-6">
        <input name="instagram" value="<?php echo $registro['instagram'] ?? ''; ?>" type="text" id="instagram" class="form-control" placeholder="Link do seu Instagram">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="banco" class="col-md-2 col-form-label"><span class="text-danger">*</span>Banco:</label>
    <div class="col-md-6">
        <input name="banco" value="<?php echo $registro['banco'] ?? ''; ?>" type="text" id="banco" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="agencia" class="col-md-2 col-form-label"><span class="text-danger">*</span>Agência:</label>
    <div class="col-md-6">
        <input name="agencia" value="<?php echo $registro['agencia'] ?? ''; ?>" type="text" id="agencia" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="conta" class="col-md-2 col-form-label"><span class="text-danger">*</span>Conta:</label>
    <div class="col-md-6">
        <input name="conta" value="<?php echo $registro['conta'] ?? ''; ?>" type="text" id="conta" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Tipo de Conta:</label>
    <div class="col-md-6">
        <div class="radio">
            <label>
                <input type="radio" name="tipo_conta" id="conta_corrente" value="conta_corrente">
                Conta Corrente
            </label>
            &emsp;
            <label>
                <input type="radio" name="tipo_conta" id="conta_poupanca" value="conta_poupanca">
                Conta Poupança
            </label>
            <br>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="pix" class="col-md-2 col-form-label">Pix:</label>
    <div class="col-md-6">
        <input name="pix" value="<?php echo $registro['pix'] ?? ''; ?>" type="text" id="pix" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="pic_pay" class="col-md-2 col-form-label">PicPay:</label>
    <div class="col-md-6">
        <input name="pic_pay" value="<?php echo $registro['pic_pay'] ?? ''; ?>" type="text" id="pic_pay" class="form-control">
    </div>
</div>