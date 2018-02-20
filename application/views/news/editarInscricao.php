
<div class="container" style="margin-top: 50px">
    <a href="/sitecoop/index.php/admin">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
    <div align="center">
        <?php
        $x = strval($inscrito[0]['id']);
        echo form_open("index.php/admin/editarinscricao/$x");?>
        <fieldset>
            <legend>       <h2 style="font-family:'Aileron Light';color:white; text-align: center">EDITAR</h2>
                <div class="col-lg-6 col-sm-6">
                <hr class="sublinhado-preinscricao">
                </div>
                <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">INSCRICAO</h2>
            </legend>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group" style="margin-top: 50px">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="nome_projeto" class="control-label">Nome</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <input class="form-control" id="nomeI" name="nomeI" placeholder="" type="text" value="<?php echo $inscrito[0]['nomeI'];echo set_value('nomeI'); ?>" />
                                <span class="text-danger"><?php echo form_error('nomeI'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="localidade" class="control-label">email</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <input class="form-control" id="email" name="email"  type="text" value="<?php echo $inscrito[0]['email'];echo set_value('email'); ?>" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="telefone" class="control-label">telefone</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <input class="form-control" id="telefone" name="telefone"  type="text" value="<?php echo $inscrito[0]['telefone'];echo set_value('telefone'); ?>" />
                                <span class="text-danger"><?php echo form_error('telefone'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-lg-4 col-sm-4">
                                <label for="rua" class="control-label">projeto</label>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <input class="form-control" id="projeto" name="projeto"  type="text" value="<?php echo $inscrito[0]['projetoId'];echo set_value('projetoId'); ?>" />
                                <span class="text-danger"><?php echo form_error('projetoId'); ?></span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Submeter" />
                            <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                        </div>
                    </div>
                </div>
                </fieldset>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
    </div>
</div>


