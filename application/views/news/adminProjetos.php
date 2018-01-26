<div class="container">
    <a href="/sitecoop/index.php/admin">
        <button type="button" class="btn btn-default"  style="margin-top: 50px; margin-bottom: 50px">Voltar</button>
    </a>
    <h2 style="font-family:'Aileron Light';color:white; text-align: center">ADMINISTRAR</h2>
    <hr class="sublinhado-preinscricao">
    <h2 style="font-family:'Moon';font-weight: bold;color:white; text-align: center">PROJETOS</h2></h3>
</div>


<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Foto menu</th>
            <th>Nome do projeto</th>
            <th>Localizacão</th>
            <th>tipologia</th>
            <th>valor</th>
            <th>numero de quartos</th>
            <th>numero de inscritos</th>
            <th>limite de inscrições</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($projetos as $projetos): ?>
            <tr>
                <td><img  src="<?php echo base_url()?>/uploads/<?php echo $projetos['id'];?>/fotoperfil.jpg" height="42" width="42"> </td>
                <td><?php echo $projetos['nome']; ?></td>
                <td><?php echo $projetos['localizacao']; ?></td>
                <td><?php echo $projetos['tipologia']; ?></td>
                <td><?php echo $projetos['valor']; ?></td>
                <td><?php echo $projetos['nquartos']; ?></td>
                <td><?php echo $projetos['ninscritos']; ?></td>
                <td><?php echo $projetos['limiteinscritos']; ?></td>
                <td><a href="<?php echo base_url(); ?>/index.php/admin/editarprojeto/<?php echo $projetos['id']; ?>"> EDITAR</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div style="margin-top: 50px">
        <a href="/sitecoop/index.php/admin/adicionarprojetos">
            <button type="button" class="btn btn-default">Adicionar Projeto</button>
        </a>
    </div>
</div>

