<div class="container">
    <div class="row" style="margin-top: 5%">
        <a href="/sitecoop/index.php/admin">
            <button type="button" class="btn btn-default buttao-admin-white">Voltar</button>
        </a>
    </div>
    <div class=" col-sm-12" style="margin-top:8%;">
        <h2 style="font-family:'Aileron Light';color:white; text-align: right">Administrar Contactos</h2>
        <hr class="sublinhado-white">
    </div>


    <div class=" col-sm-4" style="margin:auto; margin-top:8%;">
        <table class="table table-hover" style="margin-top: 40px; background-color: white; border-radius: 10px;">
            <thead>
            <tr>
                <th style="border-top: 0px;">Numeros de telefone</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ntelefones as $telefone){
                if($telefone['ntelefones']!= null){
                $data['value'] = $telefone['id'];
                $data['tipo'] = "numero";
                $this->load->view('news/modals/apagarContacto_modal', $data);?>
            <tr>
                <td><?php print_r($telefone['ntelefones'])?></td>
                <td><button type="button" data-toggle="modal" data-target="#apagar_contactos_Modal"  class="btn contactos-admin-button"> Apagar</button></td>
            </tr>
            <?php }}?>
            </tbody>
        </table>
    </div>
    <div class=" col-sm-4" style="margin:auto; margin-top:8%;">
        <table class="table table-hover" style="background-color: white; border-radius: 10px;">
            <thead>
            <tr>
                <th style="border-top: 0px;">Emails</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($emails as $email){
                if($email['emails']!= null){
                $data['value'] = $email['id'];
                $data['tipo'] = "email";
                $this->load->view('news/modals/apagarContacto_modal', $data);?>
                    <tr>
                        <td><?php print_r($email['emails'])?></td>
                        <td><button type="button" data-toggle="modal" data-target="#apagar_contactos_Modal" class="btn contactos-admin-button"> Apagar</button></td>
                    </tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
    <div class=" col-sm-4" style="margin:auto; margin-top:8%;">
        <h2 style="font-family:'Aileron Light';color:white; text-align: center">Adicionar</h2>
        <hr class="sublinhado-white">
        <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: center">Contacto</h2>
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
                <div class="row" align="right">
                    <div class="col-sm-12">
                        <input id="btn_login" name="btn_login" type="submit" class="btn buttao-admin-white" value="Submeter" />
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
