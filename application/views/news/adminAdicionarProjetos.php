<div class="container" style="margin-top: 50px">
    <a href="/sitecoop/index.php/admin/administrarprojetos">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
</div>

<div class="container">
    <?php
    echo form_open_multipart("index.php/admin/projeccao");?>
    <fieldset>
        <legend>       <h2 style="font-family:'Aileron Light';color:white; text-align: center">INSERIR</h2>
            <hr class="sublinhado-preinscricao">
            <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">PROJETOS</h2></legend>
        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="nome_projeto" class="control-label form_label">Nome Projeto</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control " id="nome_projeto" name="nome_projeto" placeholder="Nome Projeto" type="text" value="<?php echo set_value('nome_projeto'); ?>" />
                    <span class="text-danger"><?php echo form_error('nome_projeto'); ?></span>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="localidade" class="control-label form_label">Localidade</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="localidade" name="localidade" placeholder="Localidade" type="text" value="<?php echo set_value('localidade'); ?>" />
                    <span class="text-danger"><?php echo form_error('localidade'); ?></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="bairro" class="control-label form_label">Bairro</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="bairro" name="bairro" placeholder="Bairro" type="text" value="<?php echo set_value('bairro'); ?>" />
                    <span class="text-danger"><?php echo form_error('bairro'); ?></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="rua" class="control-label form_label">Rua</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="rua" name="rua" placeholder="Rua" type="text" value="<?php echo set_value('rua'); ?>" />
                    <span class="text-danger"><?php echo form_error('rua'); ?></span>
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="localizacao" class="control-label form_label">Tipologia</label>
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
                    <label for="localizacao" class="control-label form_label">Valor</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="valor" name="valor" placeholder="Valor" type="text" value="<?php echo set_value('valor'); ?>" />
                    <span class="text-danger"><?php echo form_error('valor'); ?></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="localizacao" class="control-label form_label">Numero de quartos</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="nquartos" name="nquartos" placeholder="" type="text" value="<?php echo set_value('nquartos'); ?>" />
                    <span class="text-danger"><?php echo form_error('nquartos'); ?></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="localizacao" class="control-label form_label">Numero de inscritos</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="ninscritos" name="ninscritos" placeholder="" type="text" value="<?php echo set_value('ninscritos'); ?>" />
                    <span class="text-danger"><?php echo form_error('ninscritos'); ?></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row colbox">
                <div class="col-lg-4 col-sm-4">
                    <label for="localizacao" class="control-label form_label">Limite de inscritos</label>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="limiteinscritos" name="limiteinscritos" placeholder="" type="text" value="<?php echo set_value('limiteinscritos'); ?>" />
                    <span class="text-danger"><?php echo form_error('limiteinscritos'); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label form_label">Adicionar Foto de menu</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input type="file"  name="userfile" size="20" />
                    </div>
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
</div>