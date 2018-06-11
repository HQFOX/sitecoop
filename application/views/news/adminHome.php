<div class="container">
    <div class="row" style="margin-top: 5%">
         <div>
            <a href="<?php echo base_url()?>index.php/admin">
                <button type="button" class="btn buttao-admin-white">Voltar</button>
            </a>
        </div>
    </div>
    <div style="margin-top: 40px">
        <legend>
            <h2 style="font-family:'Aileron Regular';color:white; text-align: right">Administrar Página inicial</h2>
            <hr class="sublinhado-white">
            <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: left">Carrossel</h2>
        </legend>
        <div class="form-control">
        <?php foreach($descricao as $descricao){
            $tmp = $descricao['filename'];
            echo form_open_multipart("index.php/admin/adddescricaocarrossel/$tmp");?>

            <div class="media">
                <img class="mr-3" src='<?php echo base_url()?>/uploads/carrossel/<?php echo $descricao['filename']?>' style="width: 400px">
                <div class="media-body">
                    <?php echo $descricao['descricao']?>
                    <a href="<?php echo base_url()?>index.php/admin/descricaocarrossel/<?php echo $descricao['id']?>"><span class="pre-inscricao-button">Editar</span></a>
                </div>
            </div>

            <?php echo form_close(); ?>
        <?php } ?>

    </div>
    <div style="margin-top: 40px">
        <?php
        echo form_open_multipart("index.php/admin/sobre");?>
        <fieldset>
            <legend>
                <hr class="sublinhado-white">
                <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: left">Sobre Nós</h2>
            </legend>

            <div class="form-group">
                <div class="row colbox">

                    <div class="col-sm">
                        <div class="form-control" style="background-color: white">
                            <textarea id="sobre" name="sobre" value="<?php echo set_value('sobre'); ?>" ><?php echo $sobre[0]['sobre'] ?></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#sobre' ) )
                                    .catch( error => {
                                    console.error( error );
                                } );
                            </script>
                            <span class="text-danger"><?php echo form_error('sobre'); ?></span>
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
</div>
