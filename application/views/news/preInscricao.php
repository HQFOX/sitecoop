<div>
    <div>
        <h1>Pré-Inscrição</h1>
    </div>

    <div>
        <?php
        echo form_open("index.php/novosprojectos/preinscricao/".$projeto[0]['id']);?>
        <fieldset>
            <legend>Projeto: <?php echo $projeto[0]['nome']?></legend>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="nome" class="control-label">Nome</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" value="<?php echo set_value('nome'); ?>" />
                        <span class="text-danger"><?php echo form_error('nome'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="nome" class="control-label">Email</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Número de Telefone</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="ntelefone" name="ntelefone" placeholder="Número de telefone" type="text" value="<?php echo set_value('ntelefone'); ?>" />
                        <span class="text-danger"><?php echo form_error('ntelefone'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Submeter" />
                </div>
            </div>
</div>