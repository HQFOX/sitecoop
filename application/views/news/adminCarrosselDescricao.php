<div class="container" style="margin-top: 50px">
    <a href="<?php echo base_url()?>index.php/admin/home">
        <button type="button" class="btn buttao-admin-white">Voltar</button>
    </a>
</div>
<div class="container">
        <div style="margin-top: 40px">
                <legend>
                    <h2 style="font-family:'Aileron Light';color:white; text-align: right">Administração de Projetos</h2>
                    <hr class="sublinhado-white">
                </legend>
                <legend>
                    <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: left">Alterar Foto</h2>
                </legend>
                <div>
                    <?php $x = $descricao[0]['filename'];
                    echo form_open_multipart("index.php/admin/alterarcarrossel/$x");?>
                    <img class="mr-3" src='<?php echo base_url()?>/uploads/carrossel/<?php echo $descricao[0]['filename'];?>' style="width: 400px">
                    <fieldset>
                        <div>
                            <div class="form-group">
                                <div class="row colbox">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="localizacao" class="control-label">Substituir Foto</label>
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

                <legend>
                    <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: left">Descrição Carrossel</h2>
                </legend>
                    <?php $y = $descricao[0]['id'];
                    echo form_open_multipart("index.php/admin/descricaocarrossel/$y");?>
                    <fieldset>
                        <div class="form-group">
                            <div class="row colbox">

                                <div class="col-sm">
                                    <div class="form-control" style="background-color: white">
                                        <textarea id="descricao" name="descricao" value="<?php echo set_value('descricao'); ?>" ><?php if(isset($descricao[0]['descricao'])){echo $descricao[0]['descricao'];} ?></textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#descricao' ) )
                                                .catch( error => {
                                                console.error( error );
                                            } );
                                        </script>
                                        <span class="text-danger"><?php echo form_error('descricao'); ?></span>
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
