<div class="container">
    <div class="row" style="margin-top: 5%">
        <a href="/sitecoop/index.php/admin">
            <button type="button" class="btn btn-default buttao-admin-white">Voltar</button>
        </a>
    </div>
    <div style="margin-top: 40px;margin-bottom: 40px;">
        <?php
        $x =strval($post[0]['id']);
        echo form_open_multipart("index.php/admin/editarnoticia/$x");?>
        <fieldset>
            <legend>
                <h2 style="font-family:'Aileron Light';color:white; text-align: right">Administrar Notícias</h2>
                <hr class="sublinhado-white">
                <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align:left">Editar Notícia</h2>
            </legend>
            <div class="form-group" style="margin-top: 40px;">
                <div class="row colbox">
                    <div class="col-lg-8 col-sm-8" style="margin:auto;">
                        <input class="form-control" id="titulo" name="titulo" placeholder="Título" type="text" value="<?php  echo $post[0]['titulo'];echo set_value('titulo'); ?>" />
                        <span class="text-danger"><?php echo form_error('titulo'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-8 col-sm-8" style="margin:auto;">
                        <div class="form-control" style="background-color: white">
                            <textarea id="texto" name="texto" value="<?php echo set_value('texto'); ?>" ><?php  echo $post[0]['texto'];?></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#texto' ) )
                                    .catch( error => {
                                    console.error( error );
                                } );
                            </script>
                            <span class="text-danger"><?php echo form_error('texto'); ?></span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-8 col-sm-8" style="margin:auto;">
                        <input class="form-control" id="video" name="video" placeholder="Video (link do youtube)" type="text" value="<?php echo $post[0]['video'];echo set_value('video'); ?>" />
                        <span class="text-danger"><?php echo form_error('valor'); ?></span>
                    </div>
                </div>
            </div>


            <div>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4" style="text-align: right;">
                            <label for="localizacao"   class="form_label control-label"><h5 style="font-family:'Aileron Light';font-weight: bold;color:white; ">Adicionar Foto</h5></label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input type="file"  name="userfile" size="20" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn buttao-admin-white" value="Submeter" />
                </div>
            </div>
        </fieldset>

        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>