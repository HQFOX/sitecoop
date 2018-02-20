<div class="container">

    <a href="/sitecoop/index.php/admin">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
    <div style="margin-top: 40px">
        <?php
        echo form_open_multipart("index.php/admin/***");?>
            <fieldset>
                <legend>
                    <h2 style="font-family:'Aileron Light';color:white; text-align: center">FOTOS</h2>
                    <hr class="sublinhado-preinscricao">
                    <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">CARROSSEL</h2>
                </legend>
                <?php for($i=0;$i<$filecount;$i++){ ?>
                    <a  title="hoverin' words" href="<?php echo base_url()?>/index.php/admin/delcarrossel/<?php echo $ficheiros[$i] ?>">
                    <img  style="margin-left: 10px; margin-right: 10px; margin-top: 10px;margin-bottom: 10px;" height="200" width="200" src="<?php echo base_url()?>/uploads/carrossel/<?php echo $ficheiros[$i] ?>" >
                    </a>
                <?php } ?>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4" style="text-align: right;">
                            <label for="localizacao"   class="control-label">Adicionar Foto</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input type="file"  name="userfile" size="20" />
                        </div>
                    </div>
                </div>
            </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>
    <div style="margin-top: 40px">
        <?php
        echo form_open_multipart("index.php/admin/novo_post");?>
        <fieldset>
            <legend>
                <h2 style="font-family:'Aileron Light';color:white; text-align: center">INSERIR</h2>
                <hr class="sublinhado-preinscricao">
                <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">NOVO POST</h2>
            </legend>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-2 col-sm-2" style="text-align: right;">
                        <label for="titulo"   class="control-label form_label">Título</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="titulo" name="titulo" placeholder="Título" type="text" value="<?php echo set_value('titulo'); ?>" />
                        <span class="text-danger"><?php echo form_error('titulo'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-2 col-sm-2" style="text-align: right;">
                        <label  for="texto"  class="control-label form_label">Texto</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <textarea class="form-control" id="texto" style="height: 150px" name="texto" type="text" value="<?php echo set_value('texto'); ?>" ></textarea>
                        <span class="text-danger"><?php echo form_error('texto'); ?></span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-2 col-sm-2" style="text-align: right;">
                        <label for="video"   class="control-label form_label">Video</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="video" name="video" placeholder="link do youtube" type="text" value="<?php echo set_value('video'); ?>" />
                        <span class="text-danger"><?php echo form_error('valor'); ?></span>
                    </div>
                </div>
            </div>


            <div>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4" style="text-align: right;">
                            <label for="localizacao"   class="control-label">Adicionar Foto</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input type="file"  name="userfile" size="20" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="SubmeterPost" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                </div>
            </div>
        </fieldset>

        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>
    <div style="margin-top: 40px">
        <?php
        echo form_open_multipart("index.php/admin/sobre");?>
        <fieldset>
            <legend>
                <h2 style="font-family:'Aileron Light';color:white; text-align: center">EDITAR</h2>
                <hr class="sublinhado-preinscricao">
                <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">SOBRE NÓS</h2>
            </legend>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-2 col-sm-2" style="text-align: right;">
                        <label  for="texto"  class="control-label form_label">Texto</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <textarea class="form-control" id="sobre" style="height: 150px" name="sobre" type="text" value="<?php echo set_value('sobre'); ?>" ><?php if(count($sobre)>0) echo $sobre[0]['sobre']; ?></textarea>
                        <span class="text-danger"><?php echo form_error('sobre'); ?></span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="SubmeterSobre" />
                </div>
            </div>
        </fieldset>

        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>
</div>
