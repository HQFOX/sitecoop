<div class="container">
    <div  algin="center" style="margin-top: 50px;">
        <legend algin="center">
            <h2 style="font-family:'Aileron Light';color:white; text-align: center">PÁGINA DE</h2>

                <hr class="sublinhado-preinscricao">

            <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">ADMINISTRACAO</h2>
        </legend>
    </div>

    <div>
        <a href="<?php echo base_url()?>/index.php/admin/administrarprojetos/" <button type="button" class="btn btn-primary">Projetos</button></a>
        <a href="<?php echo base_url()?>/index.php/admin/administrarcontactos" <button type="button" class="btn btn-primary">Contactos</button></a>
        <a href="<?php echo base_url()?>/index.php/admin/home" <button type="button" class="btn btn-primary">Home</button></a>
        
        <?php if(count($inscritos) == 0)
        {
            echo '<a href="/sitecoop/index.php/admin/administrarinscricoes/" <button type="button" class="btn btn-primary">Não existem novos inscritos</button></a>';
        }
        else{ echo '<a href="/sitecoop/index.php/admin/administrarinscricoes/" <button type="button" class="btn btn-primary">Existem novos inscritos</button></a> '; }?>

    </div>
</div>