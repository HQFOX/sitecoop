<h3>Admin Dashboard</h3>


        <?php
        echo form_open("index.php/admin/index");?>
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="nome_projeto" class="control-label">Nome Projeto</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="nome_projeto" name="nome_projeto" placeholder="Nome Projeto" type="text" value="<?php echo set_value('nome_projeto'); ?>" />
                        <span class="text-danger"><?php echo form_error('nome_projeto'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Localizacão</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="localizacao" name="localizacao" placeholder="Localização" type="text" value="<?php echo set_value('localizacao'); ?>" />
                        <span class="text-danger"><?php echo form_error('localizacao'); ?></span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
