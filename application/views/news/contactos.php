<div class=" col-sm-4" style="margin-left: 35%; margin-top:8%;">
    <h2 style="font-family:'Aileron Light';color:white; text-align: center">CONTACTOS</h2>
    <hr class="sublinhado-preinscricao">
    <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center"></h2>

    <h3>numeros de telefone:</h3>
    <?php foreach ($numeros as $telefone){
        if($telefone['ntelefones']!= null){?>
        <h4><?php echo($ntelefone)?></h4>
    <?php } }?>
    <h3>emails:</h3>
    <?php foreach ($emails as $email){
        if($email['emails']!= null){?>
        <h4><?php echo($email['emails'])?></h4>
    <?php } }?>

</div>


