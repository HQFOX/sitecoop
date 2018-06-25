<div class="container" style="margin-top: 50px">
    <a href="/sitecoop/index.php/admin/editarprojeto/<?php echo $id ?>">
        <button type="button" class="btn buttao-admin-white">Voltar</button>
    </a>
</div>
<div class="container">
    <fieldset>
        <legend>       <h2 style="font-family:'Aileron Light';color:white; text-align: right">Administração de Projetos</h2>
            <hr class="sublinhado-white">
            <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: left"><?php if($tipo == "menu"){echo "Foto";}else{echo "Fotos";}?> <?php echo $subtitulo ?></h2>
        </legend>
        <div class="row" style="">
            <?php foreach($fotos as $fotos){
           ?>
            <div class="col-sm-3" style="margin:5px" >
                <div class="hover-image"style="display: inline-block; position relative; ">
                    <img class=" img-fluid hover-image" src="<?php if($tipo == "menu"){echo  base_url()?>uploads/<?php echo $id ?>/<?php echo $fotos['filename'];}else{ echo base_url()?>/uploads/<?php echo $id ?>/<?php echo $tipo ?>/<?php echo $fotos['filename'] ;}?>" >
                    <?php if($tipo == "menu"){}else{ ?>
                        <a href="<?php echo base_url()?>index.php/admin/delfoto/<?php echo $id ?>/<?php  echo $tipo ?>/<?php echo $fotos['filename']?>">
                            <button class=" button-simples"  style="position: absolute; right: 16px; top:0px;"><h6 style="color:whitesmoke;font-weight:bold;font-family: 'Aileron Light'">x</h6></button>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
        echo form_open_multipart("index.php/admin/$tipo/$id");?>

        <div>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Adicionar Foto</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input type="file" name="userfile" size="20" />
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