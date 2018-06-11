
<div class="container" style="background-color: #e1e1e1; margin-top: 80px; margin-bottom: 100px;">
    <div class="row" style="margin-left: 10px; padding-top: 20px;">
        <a href="/sitecoop/index.php/admin/administrarprojetos">
            <button type="button" class="btn btn-default buttao-admin">Voltar</button>
        </a>
    </div>
    <div class="row" style="width: 100%;">
        <div style="width: 100%;">
        <?php
        echo form_open_multipart("index.php/admin/adicionarProjetos");?>
            <div class="col-sm-12" align="center" style="width: 100%;margin-bottom:2%; background-color: #e1e1e1;">
                <fieldset style="width: 100%;">
                    <legend>
                        <div class=" col-sm-8" style=" padding-top: 5%; margin-top: 1%; margin-bottom: 10%">
                            <h1 style="font-family:'Aileron Light';color:#686868; text-align: center">ADICIONAR</h1>
                            <div class=" col-sm-10">
                                <hr class="sublinhado-preinscricao">
                            </div>
                            <h1 style="font-family:'Aileron Light';font-weight: bold;color:#686868; text-align: center">Projeto</h1>
                            <div class="form-group" style="margin-top: 50px">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="nome_projeto" class="control-label form_label">Nome Projeto</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="nome_projeto" name="nome_projeto" placeholder="Nome..." type="text" value="<?php echo set_value('nome_projeto'); ?>" />
                                        <span class="text-danger"><?php echo form_error('nome_projeto'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label style="text-align: right" for="localizacao" class="control-label form_label">Localizacão</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="localizacao" name="localizacao"  placeholder="Distrito,Bairro,Rua..." type="text" value="<?php echo set_value('localizacao'); ?>" />
                                        <span class="text-danger"><?php echo form_error('localizacao'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="areahabitacional" class="control-label form_label">Área Habitacional</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="areahabitacional" name="areahabitacional"  placeholder="em metros quadrados" type="text" value="<?php echo set_value('areahabitacional'); ?>" />
                                        <span class="text-danger"><?php echo form_error('areahabitacional'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="areaquintal" class="control-label form_label">Área Quintal</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="areaquintal" name="areaquintal"  placeholder="em metros quadrados" type="text" value="<?php echo set_value('areaquintal'); ?>" />
                                        <span class="text-danger"><?php echo form_error('areaquintal'); ?></span>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="localizacao" class="control-label form_label">Valor</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="valor" name="valor"  type="text" placeholder="" value="<?php echo set_value('valor'); ?>" />
                                        <span class="text-danger"><?php echo form_error('valor'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="localizacao" class="control-label form_label">Tipologia</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="tipologia" name="tipologia"  type="text" value="<?php echo set_value('tipologia'); ?>" />
                                        <span class="text-danger"><?php echo form_error('tipologia'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="localizacao" class="control-label form_label">Numero de inscritos</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <input class="form-control" id="ninscritos" name="ninscritos"  type="text" value="<?php echo set_value('ninscritos'); ?>" />
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
                                        <input class="form-control" id="limiteinscritos" name="limiteinscritos"  type="text" value="<?php echo set_value('limiteinscritos'); ?>" />
                                        <span class="text-danger"><?php echo form_error('limiteinscritos'); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="localizacao" class="control-label form_label">Oculto</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <label class="radio-inline" id="oculto" name="oculto"><input type="radio" name="oculto" value="1" ><h6>Sim</h6></label>
                                        <label class="radio-inline" id="oculto" name="oculto"><input type="radio" name="oculto"  value="0"><h6>Não</h6></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="localizacao" class="control-label form_label">Historico</label>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <label class="radio-inline"  id="historico" name="historico"><input type="radio" name="historico"  value="1"><h6>Sim</h6></label>
                                        <label class="radio-inline"  id="historico" name="historico"><input type="radio" name="historico" value="0"><h6>Não</h6></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-2 col-sm-2">
                                        <label for="localizacao" class="control-label form_label">Descrição</label>
                                    </div>
                                    <div class="col-lg-10 col-sm-10">
                                        <div class="form-control" style="background-color: white">
                                            <textarea id="descricao" name="descricao" value="<?php echo set_value('descricao'); ?>" ></textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#descricao' ) )
                                                    .catch( error => {
                                                    console.error( error );
                                                } );
                                            </script>
                                            <span class="text-danger"><?php echo form_error('sobre'); ?></span>
                                        </div>
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
                                            <input style="font-size: 80%" type="file"  name="userfile" size="20" />
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12 text-center">
                                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default buttao-admin" value="Submeter" />
                                </div>
                            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
            </div>
        </div>

    </div>
</div>
