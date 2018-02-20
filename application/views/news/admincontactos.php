<div class="container">
    <a href="/sitecoop/index.php/admin">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
    <div class=" col-sm-12" style="margin-top:8%;">
        <h2 style="font-family:'Aileron Light';color:white; text-align: center">CONTACTOS</h2>
        <hr class="sublinhado-preinscricao">
    </div>


    <div class=" col-sm-4" style="margin-left: 35%; margin-top:8%;">
        <table class="table table-hover" style="margin-top: 40px">
            <thead>
            <tr>
                <th>Numeros de telefone</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ntelefones as $telefone){
                if($telefone['ntelefones']!= null){?>
            <tr>
                <td><?php print_r($telefone['ntelefones'])?></td>
                <td><a href="<?php echo base_url(); ?>/index.php/admin/delnumero/<?php echo $telefone['id']; ?>"> APAGAR</a></td>
            </tr>
            <?php }}?>
            </tbody>
        </table>
    </div>
    <div class=" col-sm-4" style="margin-left: 35%; margin-top:8%;">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Emails</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($emails as $email){
                if($email['emails']!= null){?>
                    <tr>
                        <td><?php print_r($email['emails'])?></td>
                        <td><a href="<?php echo base_url(); ?>/index.php/admin/delemail/<?php echo $email['id']; ?>"> APAGAR</a></td>
                    </tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
    <div class=" col-sm-4" style="margin-left: 35%; margin-top:8%;">
        <h2 style="font-family:'Aileron Light';color:white; text-align: center">ADCICIONAR</h2>
        <hr class="sublinhado-preinscricao">
        <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">CONTACTOS</h2>
        <?php
        echo form_open("index.php/admin/administrarcontactos");?>
        <fieldset style="margin-top:10%;padding-left:5% ; padding-right:5%;">

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
                <div class="row colbox">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-default pre-inscricao-submit" value="Submeter" />
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>