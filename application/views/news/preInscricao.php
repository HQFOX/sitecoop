<h1>Pré-inscrição</h1>

<?php
$attributes = array("class" => "form-horizontal", "nome" => "loginform", "email" => "loginform", );
//MUDAR
echo form_open("index.php/login/index", $attributes);?>
<form>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="telefone">Numero de telefone:</label>
        <input type="text" class="form-control" id="telefone">
    </div>

    <button type="submit" class="btn btn-default">Submeter</button>
</form>
<?php echo form_close(); ?>