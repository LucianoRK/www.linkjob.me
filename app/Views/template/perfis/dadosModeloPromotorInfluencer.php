<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="altura" class="col-md-2 col-form-label"><span class="text-danger">*</span>Altura:</label>
    <div class="col-md-6">
        <input name="altura" value="" type="text" id="altura" class="form-control input-modelo-promotor-influencer alturaMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="peso" class="col-md-2 col-form-label"><span class="text-danger">*</span>Peso:</label>
    <div class="col-md-6">
        <input name="peso" value="" type="text" id="peso" class="form-control input-modelo-promotor-influencer pesoMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<?php if ($registro['genero'] == 'femenino') { ?>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <label for="busto" class="col-md-2 col-form-label"><span class="text-danger">*</span>Busto:</label>
        <div class="col-md-6">
            <input name="busto" value="" type="text" id="busto" class="form-control input-modelo-promotor-influencer bustoMask">
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
<?php } ?>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="cintura" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cintura:</label>
    <div class="col-md-6">
        <input name="cintura" value="" type="text" id="cintura" class="form-control input-modelo-promotor-influencer bustoMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="quadril" class="col-md-2 col-form-label"><span class="text-danger">*</span>Quadril:</label>
    <div class="col-md-6">
        <input name="quadril" value="" type="text" id="quadril" class="form-control input-modelo-promotor-influencer bustoMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="manequim" class="col-md-2 col-form-label"><span class="text-danger">*</span>Manequim:</label>
    <div class="col-md-6">
        <input name="manequim" value="" type="text" id="manequim" class="form-control input-modelo-promotor-influencer bustoMask">
        <span class="text-danger msg" style="font-size: 13px;"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <label for="calcado" class="col-md-2 col-form-label"><span class="text-danger">*</span>Calçado:</label>
    <div class="col-md-6">
        <input name="calcado" value="" type="text" id="calcado" class="form-control input-modelo-promotor-influencer calcadoMask">
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
    <label for="cor_pele" class="col-md-2 col-form-label"><span class="text-danger">*</span>Cor da Pele:</label>
    <div class="col-md-6">
        <select name="cor_pele" id="cor_pele" value="" class="form-control">
            <option selected value=""> Selecione uma opção </option>
            <option value="amarela"> Amarela </option>
            <option value="branca"> Branca </option>
            <option value="indigina"> Indígina </option>
            <option value="parda"> Parda </option>
            <option value="preata"> Preta </option>
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
            <span style="font-size: 12px;"> Em caso de heterocromia informe da seguinte maneira: azul e verde </span>
            <span class="text-danger msg" style="font-size: 13px;"></span>
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
    <label class="col-md-2 col-form-label"><span class="text-danger">*</span>Experiência:</label>
    <div class="col-md-6">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Apresentador (a)
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Ativação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Atriz/ator
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Coordenação
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Credenciamento feiras e congressos
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Dançarino (a)
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Degustação 
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Desfile
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Editorial
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Figuração
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Lookbook
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Modelo de mão
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Modelo de pé
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Panfletagem
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Pesquisa
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Recepção
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Showroom
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="experiencia" id="perfil" value="1">
                Visita ténica
            </label>
            <span class="text-danger msg" style="font-size: 13px;"></span>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="alert alert-warning" role="alert">
            <strong>Recomendações:</strong><br>
            Na categoria de fotos polaroides e diversos anexe fotos sem óculos de sol e esteja sozinho(a).
        </div>
    </div>
</div>