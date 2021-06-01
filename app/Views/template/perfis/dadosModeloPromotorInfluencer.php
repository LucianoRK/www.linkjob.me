<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="altura" class="col-md-2 col-form-label"><span class="text-danger">*</span>Altura:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="altura" value="" type="text" id="altura" class="form-control input-modelo-promotor-influencer floatMask">
            <span class="input-group-addon">m</span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="peso" class="col-md-2 col-form-label"><span class="text-danger">*</span>Peso:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="peso" value="" type="text" id="peso" class="form-control input-modelo-promotor-influencer inputInteger">
            <span class="input-group-addon">kg</span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="busto_torax" class="col-md-2 col-form-label"><span class="text-danger">*</span>Busto/Tórax:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="busto_torax" value="" type="text" id="busto_torax" class="form-control input-modelo-promotor-influencer inputInteger">
            <span class="input-group-addon">cm</span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cintura" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cintura:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="cintura" value="" type="text" id="cintura" class="form-control input-modelo-promotor-influencer inputInteger">
            <span class="input-group-addon">cm</span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="quadril" class="col-md-2 col-form-label"><span class="text-danger">*</span>Quadril:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="quadril" value="" type="text" id="quadril" class="form-control input-modelo-promotor-influencer inputInteger">
            <span class="input-group-addon">cm</span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="manequim" class="col-md-2 col-form-label"><span class="text-danger">*</span>Manequim:</label>
    <div class="col-md-6">
        <input name="manequim" value="" type="text" id="manequim" class="form-control input-modelo-promotor-influencer inputInteger">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="calcado" class="col-md-2 col-form-label"><span class="text-danger">*</span>Calçado:</label>
    <div class="col-md-6">
        <input name="calcado" value="" type="text" id="calcado" class="form-control input-modelo-promotor-influencer inputInteger">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Possui Tatuagem?</label>
    <div class="col-md-6">
        <div class="radio">
            <label>
                <input type="radio" name="possui_tatuagem" class="possui_tatuagem" id="tatuagem_sim" value="sim">
                Sim
            </label>
            &emsp;
            <label>
                <input type="radio" name="possui_tatuagem" class="possui_tatuagem" id="tatuagem_nao" value="nao">
                Não
            </label>
            <br>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div id="div-possui-tatuagem" hidden>
            <input name="locais_tatuagem" value="" type="text" id="locais_tatuagem" class="form-control input-modelo-promotor-influencer" placeholder="Em quais locais?">
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cor_pele" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cor da Pele/Etnia:</label>
    <div class="col-md-6">
        <select name="cor_pele" id="cor_pele" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="branca"> Branca </option>
            <option value="negra"> Negra </option>
            <option value="morena"> Morena </option>
            <option value="amarela"> Amarela </option>
            <option value="parda"> Parda </option>
            <option value="oriental"> Oriental </option>
            <option value="indigina"> Indígina </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cor_cabelo" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cor de Cabelo:</label>
    <div class="col-md-6">
        <select name="cor_cabelo" id="cor_cabelo" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="loiro"> Loiro </option>
            <option value="castanho"> Castanho </option>
            <option value="ruivo"> Ruivo </option>
            <option value="preto"> Preto </option>
            <option value="outro"> Outro </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <div style="padding-top: 14px;" id="div-cor-cabelo-outro" hidden>
            <input name="cor_cabelo_outro" value="" type="text" id="cor_cabelo_outro" class="form-control input-modelo-promotor-influencer" placeholder="Informe com apenas uma palavra a cor do seu cabelo">
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cor_olhos" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cor dos Olhos:</label>
    <div class="col-md-6">
        <select name="cor_olhos" id="cor_olhos" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="azul"> Azul </option>
            <option value="castanho"> Castanho </option>
            <option value="verde"> Verde </option>
            <option value="outro"> Outro </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <div style="padding-top: 14px;" id="div-cor-olhos-outro" hidden>
            <input name="cor_olhos_outro" value="" type="text" id="cor_olhos_outro" class="form-control input-modelo-promotor-influencer" placeholder="Informe com apenas uma palavra a cor do seus olhos">
            <span class="text-danger msg" style="font-size: 13px;"></span>
            <span style="font-size: 12px;"> Em caso de heterocromia informe como o exemplo a seguir: castanho e azul </span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Possui DRT?</label>
    <div class="col-md-6">
        <div class="radio">
            <label>
                <input type="radio" name="possui_drt" class="possui_drt" id="drt_sim" value="sim">
                Sim
            </label>
            &emsp;
            <label>
                <input type="radio" name="possui_drt" class="possui_drt" id="drt_nao" value="nao">
                Não
            </label>
            <br>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div id="div-drt" hidden>
            <input name="numero_drt" value="" type="text" id="numero_drt" class="form-control input-modelo-promotor-influencer" placeholder="Qual o número?">
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label">Experiência:</label>
    <div class="col-md-6">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="apresentador" value="1">
                Apresentador(a)
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="ativacao" value="1">
                Ativação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="atriz_ator" value="1">
                Atriz/ator
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="coordenacao" value="1">
                Coordenação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="credenciamento_feiras_congressos" value="1">
                Credenciamento feiras e congressos
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="dancarino" value="1">
                Dançarino(a)
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="degustacao" value="1">
                Degustação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="desfile" value="1">
                Desfile
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="editorial" value="1">
                Editorial
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="figuracao" value="1">
                Figuração
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="lookbook" value="1">
                Lookbook
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="modelo_mao" value="1">
                Modelo de mão
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="modelo_pé" value="1">
                Modelo de pé
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="panfletagem" value="1">
                Panfletagem
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="pesquisa" value="1">
                Pesquisa
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="recepção" value="1">
                Recepção
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="showroom" value="1">
                Showroom
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="visita_tenica" value="1">
                Visita ténica
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="alert alert-warning" role="alert">
            <strong>Recomendações:</strong><br>
            Na categoria de fotos polaroides e diversos anexe fotos sem óculos de sol e esteja sozinho(a).
        </div>
    </div>
</div>
<h2 class="section-heading-all titulo-perfil-modelo-influencer-promotor" style="text-align: center!important;"></h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-fotos-modelo" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select class="multiple-select" name="modeloInfluencerPromotor[]" multiple="multiple" id="categoria-fotos-modelo">
            <?php if ($modelo_promotor_influencer) { ?>
                <?php foreach ($modelo_promotor_influencer as $modelo) { ?>
                    <option value="<?php echo $modelo['grupo_foto_id']; ?>"> <?php echo $modelo['nome']; ?> </option>
                <?php } ?>
            <?php } ?>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12">
        <div class='col-md-4'></div>
        <div class='col-md-7' id="images-modelo"></div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="calcado" class="col-md-2 col-form-label"><span class="text-danger">*</span>Foto:</label>
    <div class="col-md-6">
        <input type="file" name="upload_modelo[]" id="upload-modelo" class="btn btn-primary" accept="image/png, image/jpg, image/jpeg" multiple/>
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb. <br> É possível anexar até 10 fotos.</p>
    </div>
</div>