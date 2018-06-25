<!-- Modal -->
<div class="modal fade" id="editar_post_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                echo form_open_multipart("index.php/admin/novo_post");?>
                <fieldset>

                    <div class="form-group" style="">
                        <div class="row colbox">
                            <div class="col-lg-8 col-sm-8" style="margin:auto">
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
                            <div class="col-lg-8 col-sm-8" style="margin:auto">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="<?php echo base_url() ?>index.php/admin/deletepost/<?php echo $id?>">
                    <button type="button" class="btn btn-primary">Submeter</button>
                </a>
            </div>
        </div>
    </div>
</div>