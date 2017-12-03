<div>
    <div class=" col-sm-4" style="margin-left: 35%; margin-top:8%;">
        <h2 style="font-family:'Aileron Light';color:white; text-align: center">PRÉ-INSCRIÇÃO</h2>
        <hr class="sublinhado-preinscricao">
        <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">CONTACTE-NOS</h2>
        <?php
        echo form_open("index.php/novosprojectos/preinscricao/" .$projeto[0]['id']);?>
        <fieldset style="padding-left:5% ; padding-right:5%;">
            <legend style="font-family: Aileron;color:white;">Projeto: <?php echo $projeto[0]['nome']?></legend>
            <div class="form-group">
                <div class="row colbox">
                    <div style="width: 100%">
                        <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" value="<?php echo set_value('nome'); ?>" />
                        <span class="text-danger"><?php echo form_error('nome'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div style="width: 100%">
                        <input class="form-control " id="email" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div style="width: 100%">
                        <input class="form-control" id="ntelefone" name="ntelefone" placeholder="Número de telefone" type="text" value="<?php echo set_value('ntelefone'); ?>" />
                        <span class="text-danger"><?php echo form_error('ntelefone'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default pre-inscricao-submit" value="Submeter" />
                </div>
            </div>
</div>