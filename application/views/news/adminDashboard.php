<div class="container">
    <h3>Pagina de administração do site</h3>

    <div>
        <a href="<?php echo base_url()?>/index.php/admin/administrarprojetos/" <button type="button" class="btn btn-primary">Projetos</button></a>
        <a href="<?php echo base_url()?>/index.php/admin/administrarcontactos" <button type="button" class="btn btn-primary">Contactos</button></a>

        <div>
            <h3>debug base de dados: <?php print_r( $inscritos); ?></h3>
        </div>
        <?php if(count($inscritos) == 0)
        {
            echo '<a href="/sitecoop/index.php/admin/administrarinscricoes/" <button type="button" class="btn btn-primary">Não existem novos inscritos</button></a>';
        }
        else{ echo '<a href="/sitecoop/index.php/admin/administrarinscricoes/" <button type="button" class="btn btn-primary">Existem novos inscritos</button></a> '; }?>

    </div>
</div>