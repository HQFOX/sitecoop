<div class="container" style="margin-top: 50px">
    <a href="/sitecoop/index.php/admin/administrarprojetos">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
</div>
<div class="container">
    <?php
    echo form_open_multipart("index.php/admin/projeccao/$id");?>
    <fieldset>
        <legend>       <h2 style="font-family:'Aileron Light';color:white; text-align: center"><?php echo $titulo ?></h2>
            <hr class="sublinhado-preinscricao">
            <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center"><?php echo $subtitulo ?></h2>
        </legend>

        <?php for($i=0;$i<$filecount;$i++){ ?>
            <img  height="200" width="200" src="<?php echo base_url()?>/uploads/<?php echo $id ?>/<?php echo $tipo ?>/<?php echo $ficheiros[$i] ?>" >
        <?php } ?>



        <div>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Adicionar Foto de menu</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input type="file" name="userfile" size="20" />
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