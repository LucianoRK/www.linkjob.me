<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="nome" class="col-md-2 col-form-label"><span class="text-danger">*</span>Nome:</label>
    <div class="col-md-6">
        <input name="nome" value="" type="text" id="nome" class="form-control" placeholder="Nome completo">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="nome_artistico" class="col-md-2 col-form-label">Nome Artístico:</label>
    <div class="col-md-6">
        <input name="nome_artistico" value="" type="text" id="nome_artistico" class="form-control">
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
            <option value="sem_genero"> Sem Gênero </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="data_nascimento" class="col-md-2 col-form-label"><span class="text-danger">*</span>Data de Nascimento:</label>
    <div class="col-md-6">
        <input name="data_nascimento" value="" type="date" id="data_nascimento" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cpf" class="col-md-2 col-form-label"><span class="text-danger">*</span>CPF:</label>
    <div class="col-md-6">
        <input name="cpf" value="" type="text" id="cpf" class="form-control cpfMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="rg" class="col-md-2 col-form-label"><span class="text-danger">*</span>RG:</label>
    <div class="col-md-6">
        <input name="rg" value="" type="text" id="rg" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cnpj_mei" class="col-md-2 col-form-label">CNPJ/MEI:</label>
    <div class="col-md-6">
        <input name="cnpj_mei" value="" type="text" id="cnpj_mei" class="form-control">
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
        <input name="area" value="" type="text" id="area" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="instituicao" class="col-md-2 col-form-label">Instituição:</label>
    <div class="col-md-6">
        <input name="instituicao" value="" type="text" id="instituicao" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="idiomas" class="col-md-2 col-form-label">Idiomas:</label>
    <div class="col-md-6">
        <input name="idiomas" value="" type="text" id="idiomas" class="form-control">
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="endereco" class="col-md-2 col-form-label"><span class="text-danger">*</span>Endereço:</label>
    <div class="col-md-6">
        <input name="endereco" value="" type="text" id="endereco" class="form-control" placeholder="Endereço completo">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="complemento" class="col-md-2 col-form-label">Complemento:</label>
    <div class="col-md-6">
        <input name="complemento" value="" type="text" id="complemento" class="form-control">
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
        <input name="cep" value="" type="text" id="cep" class="form-control cepMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="celular" class="col-md-2 col-form-label"><span class="text-danger">*</span>Celular:</label>
    <div class="col-md-6">
        <input name="celular" value="" type="text" id="celular" class="form-control celularMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="instagram" class="col-md-2 col-form-label"><span class="text-danger">*</span>Instagram:</label>
    <div class="col-md-6">
        <input name="instagram" value="" type="text" id="instagram" class="form-control" placeholder="Link do seu Instagram">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="banco" class="col-md-2 col-form-label"><span class="text-danger">*</span>Banco:</label>
    <div class="col-md-6">
        <input name="banco" value="" type="text" id="banco" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="agencia" class="col-md-2 col-form-label"><span class="text-danger">*</span>Agência:</label>
    <div class="col-md-6">
        <input name="agencia" value="" type="text" id="agencia" class="form-control">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="conta" class="col-md-2 col-form-label"><span class="text-danger">*</span>Conta:</label>
    <div class="col-md-6">
        <input name="conta" value="" type="text" id="conta" class="form-control">
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
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="pix" class="col-md-2 col-form-label">Pix:</label>
    <div class="col-md-6">
        <input name="pix" value="" type="text" id="pix" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="picpay" class="col-md-2 col-form-label">PicPay:</label>
    <div class="col-md-6">
        <input name="picpay" value="" type="text" id="picpay" class="form-control">
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="email" class="col-md-2 col-form-label"><span class="text-danger">*</span>Email:</label>
    <div class="col-md-6">
        <input name="email" value="" type="email" id="email" class="form-control">
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
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select name="categoria" id="categoria" value="" class="form-control selectSearching">
            <option selected value=""> Selecione uma opção </option>
            <?php if ($categorias) { ?>
                <?php foreach ($categorias as $categoria) { ?>
                    <option value="<?php echo $categoria['tipo_id']; ?>"> <?php echo $categoria['nome']; ?> </option>
                <?php } ?>
            <?php } ?>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>

<script>
    function comboCidades() {
        $("#estado").on('change', function() {
            let estado_id = $(this).val();

            $.ajax({
                url: "combo-cidades",
                type: 'post',
                dataType: "JSON",
                data: {
                    estado_id
                },
                success: function(data) {
                    console.log(data);

                    if (data) {
                        $('#cidade').html('');
                        $('#cidade').append('<option selected value="0">Selecione uma opção</option>');

                        $.each(data, function(index, value) {
                            $('#cidade').append('<option value=' + value['cidade_id'] + '>' + value['nome'] + '</option>');
                        });
                    }
                },
            });
        });
    }

    function validacao() {
        $('#salvar').on('click', function () {
            let erro = false;

            if (!$('#nome').val()) {
                erro = true;

                $('#nome').parent().addClass('has-error')
                $('#nome').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#genero').val()) {
                erro = true;

                $('#genero').parent().addClass('has-error')
                $('#genero').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#data_nascimento').val()) {
                erro = true;

                $('#data_nascimento').parent().addClass('has-error')
                $('#data_nascimento').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#cpf').val()) {
                erro = true;

                $('#cpf').parent().addClass('has-error')
                $('#cpf').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#rg').val()) {
                erro = true;

                $('#rg').parent().addClass('has-error')
                $('#rg').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#escolaridade').val()) {
                erro = true;

                $('#escolaridade').parent().addClass('has-error')
                $('#escolaridade').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#endereco').val()) {
                erro = true;

                $('#endereco').parent().addClass('has-error')
                $('#endereco').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#estado').val()) {
                erro = true;

                $('#estado').parent().addClass('has-error')
                $('#estado').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!$('#cidade').val()) {
                erro = true;

                $('#cidade').parent().addClass('has-error')
                $('#cidade').parent().find('.msg').html('Campo obrigatório.');
            }

            if (!erro) {
                $("#form-trabalhe-conosco").submit();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Atenção!',
                    text: 'Preencha os campos corretamente.',
                })
            }
        })
    }

    $(document).ready(function() {
        comboCidades();
        validacao();
    });
</script>