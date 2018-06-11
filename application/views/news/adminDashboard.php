<div class="container">
    <div  algin="center" style="margin-top: 50px;">
        <legend algin="center">
            <h2 style="font-family:'Aileron Light';color:white; text-align: center">PÁGINA DE</h2>

                <hr class="sublinhado-white">

            <h2 style="font-family:'Aileron Light';font-weight: bold;color:white; text-align: center">Administração</h2>
        </legend>
    </div>
    <div class="row" align="center" style="margin-top: 6%">
        <div class="col-sm-2">
            <a href="<?php echo base_url()?>/index.php/admin/administrarprojetos/"> <button type="button" class="btn btn-default buttao-admin-white">Projetos</button></a>
        </div>
        <div class="col-sm-2">
            <a href="<?php echo base_url()?>/index.php/admin/administrarcontactos"><button type="button" class="btn buttao-admin-white">Contactos</button></a>
        </div>
        <div  class="col-sm-2">
            <a href="<?php echo base_url()?>/index.php/admin/home"><button type="button" class="btn buttao-admin-white">Home</button></a>
        </div>
        <div  class="col-sm-2">
            <a href="<?php echo base_url()?>/index.php/admin/noticias"><button type="button" class="btn buttao-admin-white">Notícias</button></a>
        </div>
        <div  class="col-sm-4">

            <a href="<?php echo base_url()?>/index.php/admin/administrarinscricoes"><button type="button" class="btn buttao-admin-white"><?php if(count($inscritos) == 0){ echo "Não existem novos inscritos";} else {echo "Existem novos inscritos";} ?></button></a>

        </div>
    </div>
</div>