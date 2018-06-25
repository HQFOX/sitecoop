<div class="container">
    <div class="row" style="margin-top: 5%">
        <a href="/sitecoop/index.php/admin">
            <button type="button" class="btn btn-default buttao-admin-white">Voltar</button>
        </a>
    </div>
    <div style="margin-top: 40px;margin-bottom: 40px;">
        <?php
        echo form_open_multipart("index.php/admin/novo_post");?>
        <fieldset>
            <legend>
                <h2 style="font-family:'Aileron Light';color:white; text-align: right">Administrar Notícias</h2>
                <hr class="sublinhado-white">
                <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align:left">Adicionar Notícia</h2>
            </legend>
            <div class="form-group" style="margin-top: 40px;">
                <div class="row colbox">
                    <div class="col-lg-8 col-sm-8" style="margin:auto;">
                        <input class="form-control" id="titulo" name="titulo" placeholder="Título" type="text" value="<?php echo set_value('titulo'); ?>" />
                        <span class="text-danger"><?php echo form_error('titulo'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-8 col-sm-8" style="margin:auto;">
                        <div class="form-control" style="background-color: white">
                            <textarea id="texto" name="texto" value="<?php echo set_value('texto'); ?>" >escreva aqui a ultima notícia...</textarea>
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
                        <input class="form-control" id="video" name="video" placeholder="Video (link do youtube)" type="text" value="<?php echo set_value('video'); ?>" />
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
    <div style="background-color: white; padding: 20px; margin-bottom: 140px;">
        <legend>
            <h2 style="font-family:'Aileron Light';color:#686868; text-align: center">ANTIGAS</h2>
            <hr class="sublinhado">
            <h2 style="font-family:'Aileron Light';font-weight: bold;color:#686868; text-align: center">Notícias</h2>
        </legend>
        <?php
        foreach ($post as $post):
        if($post['oculto']!=1){
            $data['id'] = $post['id'];
            $this->load->view('news/modals/apagarPost_modal', $data);?>
        <div style="color:grey">
            <div id="post" class="row" style="background-color: white">
                <div class="col-sm-8" style="margin:auto; text-align: left;">
                    <h3 style=" margin-top: 30%; margin-bottom:0; font-family:'Aileron Light';font-weight: bold;color:#686868; text-align: left; resize: horizontal"><?php echo $post['titulo'];?></h3>
                    <hr class="sublinhado" style=" height: 2px;">
                    <h5 style="font-family:'Moon';font-weight: bold;color:#686868; text-align: right;"><?php echo $post['data'];?></h5>

                    <?php if($post['imagem']!='noimage'){?>
                            <img style="width: 100%;" src="<?php echo base_url()?>/uploads/post/<?php echo $post['imagem'];?>">

                   <?php }

                    echo $post['texto'];
                    if($post['video']!='')
                        if($post['video']!="erro no link"){?>

                            <iframe width="100%" height="420" src="<?php echo $post['video'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <?php }?>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="col-sm">
                    <a href="<?php echo base_url()?>index.php/admin/editarnoticia/<?php echo $post['id'] ?>" <button type="button" class="btn buttao-admin">Editar</button></a>
                    <button type="button"  data-toggle="modal" data-target="#apagar_post_Modal" class="btn buttao-admin">Apagar</button>
                </div>
            </div>
            <?php }
        endforeach; ?>
        </div>


    </div>