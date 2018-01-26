
<div class="container" style="margin-top: 50px">
    <a href="/sitecoop/index.php/admin/administrarprojetos">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
    <?php
    $x =strval($projeto[0]['id']);
    echo form_open("index.php/admin/editarprojeto/$x ");?>
        <fieldset>
            <legend>       <h2 style="font-family:'Aileron Light';color:white; text-align: center">EDITAR</h2>
                <hr class="sublinhado-preinscricao">
                <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">PROJETOS</h2></legend>
            <div class="form-group" style="margin-top: 50px">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="nome_projeto" class="control-label">Nome Projeto</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="nome_projeto" name="nome_projeto" placeholder="" type="text" value="<?php echo $projeto[0]['nome'];echo set_value('nome_projeto'); ?>" />
                        <span class="text-danger"><?php echo form_error('nome_projeto'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Localizacão</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="localizacao" name="localizacao"  type="text" value="<?php echo $projeto[0]['localizacao'];echo set_value('localizacao'); ?>" />
                        <span class="text-danger"><?php echo form_error('localizacao'); ?></span>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Tipologia</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">


                            <label class="radio-inline"><input type="radio" name="tipologia" checked="">Vivenda <?php echo  set_radio('tipologia', '1'); ?></label>
                            <label class="radio-inline"><input type="radio" name="tipologia">Apartamento <?php echo  set_radio('tipologia', '2'); ?> </label>
                            <label class="radio-inline"><input type="radio" name="tipologia">Outro <?php echo  set_radio('tipologia', '3'); ?></label>

                        <span class="text-danger"><?php echo form_error('tipologia'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Valor</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="valor" name="valor"  type="text" value="<?php echo $projeto[0]['valor'];echo set_value('valor'); ?>" />
                        <span class="text-danger"><?php echo form_error('valor'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Numero de quartos</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="nquartos" name="nquartos"  type="text" value="<?php echo $projeto[0]['nquartos'];echo set_value('nquartos'); ?>" />
                        <span class="text-danger"><?php echo form_error('nquartos'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Numero de inscritos</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="ninscritos" name="ninscritos"  type="text" value="<?php echo $projeto[0]['ninscritos'];echo set_value('ninscritos'); ?>" />
                        <span class="text-danger"><?php echo form_error('ninscritos'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Limite de inscritos</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="limiteinscritos" name="limiteinscritos"  type="text" value="<?php echo $projeto[0]['limiteinscritos']; echo set_value('limiteinscritos'); ?>" />
                        <span class="text-danger"><?php echo form_error('limiteinscritos'); ?></span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Submeter" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                </div>
            </div>
        </fieldset>
    <?php echo form_close(); ?>
    <?php echo $this->session->flashdata('msg'); ?>
    <div>Editar fotos projecção</div>
    <div>Editar fotos planta</div>
    <div>Editar foto menu</div>
</div>

