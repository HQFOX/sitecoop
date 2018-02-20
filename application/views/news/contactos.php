<div class="container" align="center">
    <div class=" col-sm-12" style="margin-top:8%;">
        <h2 style="font-family:'Aileron Light';color:white; text-align: center">CONTACTOS</h2>
        <div class=" col-sm-8">
            <hr class="sublinhado-preinscricao">
        </div>
        <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center"></h2>

        <h3>numeros de telefone:</h3>
        <?php foreach ($numeros as $telefone){
            if($telefone['ntelefones']!= null){?>
            <h4><?php echo($telefone['ntelefones'])?></h4>
        <?php } }?>
        <h3>emails:</h3>
        <?php foreach ($emails as $email){
            if($email['emails']!= null){?>
            <h4><?php echo($email['emails'])?></h4>
        <?php } }?>
    </div>
</div>


