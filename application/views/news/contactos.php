<p>contactos </p>


<h3>numero de telefone:</h3>
<?php foreach ($numeros as $telefone){
    if($telefone['ntelefones']!= null){?>
    <h4><?php echo($ntelefone)?></h4>
<?php } }?>
<h3>email:</h3>
<?php foreach ($emails as $email){
    if($email['emails']!= null){?>
    <h4><?php echo($email['emails'])?></h4>
<?php } }?>


