<p>esta é a view novos projectos</p>
<?php print_r( $projeto);

?>
<h3>Id do projecto: <?php echo $projeto[0]['id'] ?></h3>
<h3>Nome do projecto: <?php echo $projeto[0]['nome'] ?></h3>
<h3>Localização : <?php echo $projeto[0]['localizacao'] ?></h3>
<h3>tipologia : <?php echo $projeto[0]['tipologia'] ?></h3>
<h3>valor : <?php echo $projeto[0]['valor'] ?></h3>
<h3>Nº de quartos : <?php echo $projeto[0]['nquartos'] ?></h3>
<h3>caminho fotos da planta : <?php echo $projeto[0]['fotosplanta'] ?></h3>
<h3>caminho fotos da projeção da casa : <?php echo $projeto[0]['fotosprojeccaocasa'] ?></h3>
<h3>nº de inscritos : <?php echo $projeto[0]['ninscritos'] ?></h3>
<h3>limite de inscritos : <?php echo $projeto[0]['limiteinscritos'] ?></h3>
<?php
    $limite =$projeto[0]['limiteinscritos'];
    $inscritos = $projeto[0]['ninscritos'];
?>
<?php
        if ($inscritos < $limite)
        {?><h3><a href="/teste/index.php/preinscricao"> Pré-inscrição disponivel </a></h3> <?php } ?>