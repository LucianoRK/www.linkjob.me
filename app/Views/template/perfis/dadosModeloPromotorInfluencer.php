<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="altura" class="col-md-2 col-form-label"><span class="text-danger">*</span>Altura:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="altura" value="" type="text" id="altura" class="form-control input-modelo-influencer-promotor floatMask">
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
            <input name="peso" value="" type="text" id="peso" class="form-control input-modelo-influencer-promotor inputInteger">
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
            <input name="busto_torax" value="" type="text" id="busto_torax" class="form-control input-modelo-influencer-promotor inputInteger">
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
            <input name="cintura" value="" type="text" id="cintura" class="form-control input-modelo-influencer-promotor inputInteger">
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
            <input name="quadril" value="" type="text" id="quadril" class="form-control input-modelo-influencer-promotor inputInteger">
            <span class="input-group-addon">cm</span>
        </div>
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="manequim" class="col-md-2 col-form-label"><span class="text-danger">*</span>Manequim:</label>
    <div class="col-md-6">
        <input name="manequim" value="" type="text" id="manequim" class="form-control input-modelo-influencer-promotor inputInteger">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="calcado" class="col-md-2 col-form-label"><span class="text-danger">*</span>Calçado:</label>
    <div class="col-md-6">
        <input name="calcado" value="" type="text" id="calcado" class="form-control input-modelo-influencer-promotor inputInteger">
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
            <input name="locais_tatuagem" value="" type="text" id="locais_tatuagem" class="form-control input-modelo-influencer-promotor" placeholder="Em quais locais?">
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cor_pele" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cor da Pele/Etnia:</label>
    <div class="col-md-6">
        <select name="cor_pele" id="cor_pele" value="" class="form-control input-modelo-influencer-promotor">
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
        <select name="cor_cabelo" id="cor_cabelo" value="" class="form-control input-modelo-influencer-promotor">
            <option selected value=""> Selecione uma opção </option>
            <option value="loiro"> Loiro </option>
            <option value="castanho"> Castanho </option>
            <option value="ruivo"> Ruivo </option>
            <option value="preto"> Preto </option>
            <option value="outro"> Outro </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <div style="padding-top: 14px;" id="div-cor-cabelo-outro" hidden>
            <input name="cor_cabelo_outro" value="" type="text" id="cor_cabelo_outro" class="form-control input-modelo-influencer-promotor" placeholder="Informe com apenas uma palavra a cor do seu cabelo">
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cor_olhos" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cor dos Olhos:</label>
    <div class="col-md-6">
        <select name="cor_olhos" id="cor_olhos" value="" class="form-control input-modelo-influencer-promotor">
            <option selected value=""> Selecione uma opção </option>
            <option value="azul"> Azul </option>
            <option value="castanho"> Castanho </option>
            <option value="verde"> Verde </option>
            <option value="outro"> Outro </option>
        </select>
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <div style="padding-top: 14px;" id="div-cor-olhos-outro" hidden>
            <input name="cor_olhos_outro" value="" type="text" id="cor_olhos_outro" class="form-control input-modelo-influencer-promotor" placeholder="Informe com apenas uma palavra a cor do seus olhos">
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
            <input name="numero_drt" value="" type="text" id="numero_drt" class="form-control input-modelo-influencer-promotor" placeholder="Qual o número?">
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
                <input type="checkbox" name="apresentador" class="input-modelo-influencer-promotor" value="1">
                Apresentador(a)
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="ativacao" class="input-modelo-influencer-promotor" value="1">
                Ativação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="atriz_ator" class="input-modelo-influencer-promotor"  value="1">
                Atriz/ator
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="coordenacao" class="input-modelo-influencer-promotor"  value="1">
                Coordenação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="credenciamento_feiras_congressos" class="input-modelo-influencer-promotor"  value="1">
                Credenciamento feiras e congressos
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="dancarino" class="input-modelo-influencer-promotor"  value="1">
                Dançarino(a)
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="degustacao" class="input-modelo-influencer-promotor"  value="1">
                Degustação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="desfile" class="input-modelo-influencer-promotor"  value="1">
                Desfile
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="editorial" class="input-modelo-influencer-promotor"  value="1">
                Editorial
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="figuracao" class="input-modelo-influencer-promotor"  value="1">
                Figuração
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="lookbook" class="input-modelo-influencer-promotor"  value="1">
                Lookbook
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="modelo_mao" class="input-modelo-influencer-promotor"  value="1">
                Modelo de mão
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="modelo_pé" class="input-modelo-influencer-promotor"  value="1">
                Modelo de pé
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="panfletagem" class="input-modelo-influencer-promotor"  value="1">
                Panfletagem
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="pesquisa" class="input-modelo-influencer-promotor"  value="1">
                Pesquisa
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="recepção" class="input-modelo-influencer-promotor"  value="1">
                Recepção
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="showroom" class="input-modelo-influencer-promotor"  value="1">
                Showroom
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="visita_tenica" class="input-modelo-influencer-promotor"  value="1">
                Visita ténica
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="video_apresentacao" class="col-md-2 col-form-label"><span class="text-danger">*</span>Video de Apresentação:</label>
    <div class="col-md-6">
        <input name="video_apresentacao" value="" type="text" id="video_apresentacao" class="form-control input-modelo-influencer-promotor" placeholder="Informe o link do seu video de apresentação">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<hr>
<h2 class="section-heading-all titulo-perfil-modelo-influencer-promotor" style="text-align: center!important;"></h2>
<br><br>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="categoria-fotos-modelo-influencer-promotor" class="col-md-2 col-form-label"><span class="text-danger">*</span>Categoria:</label>
    <div class="col-md-6">
        <select class="multiple-select input-modelo-influencer-promotor" name="modeloInfluencerPromotor[]" multiple="multiple" id="categoria-fotos-modelo-influencer-promotor">
            <?php if ($modelo_promotor_influencer) { ?>
                <?php foreach ($modelo_promotor_influencer as $modelo) { ?>
                    <?php if ($modelo['nome'] != 'Video') { ?>
                        <option value="<?php echo $modelo['grupo_foto_id']; ?>"> <?php echo $modelo['nome']; ?> </option>
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
        <div class='col-md-7' id="images-modelo-influencer-promotor"></div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-6">
        <input type="file" name="upload_modelo_influencer_promotor[]" id="upload-modelo-influencer-promotor" class="btn btn-primary" accept="image/png, image/jpg, image/jpeg" multiple/>
        <span class="text-danger msg" style="font-size: 13px;"></span>
        <p style="font-size: 11px;">Os formatos aceitos são: png, jpg e jpeg. <br> O limite por foto é de até 10mb. <br> É possível anexar até 10 fotos.</p>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label class="col-md-2 col-form-label">Video:</label>
    <div class="col-md-6">
        <div class="input-group">
            <input name="video_modelo_influencer_promotor[]" value="" type="text" class="form-control input-modelo-influencer-promotor" placeholder="Caso possua video basta informar o link">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="adicionar-input-video-modelo-influencer-promotor"><i class="text-success fas fa-plus"></i></button>
            </span>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div id="div-videos-modelo-influencer-promotor">
            
        </div>
    </div>
</div>
