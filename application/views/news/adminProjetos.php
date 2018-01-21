<div class="container">
<h3>Admin Dashboard Projetos</h3>
    <a href="/sitecoop/index.php/admin">
        <button type="button" class="btn btn-default">Voltar</button>
    </a>
</div>


<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
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
</div>

<div>
    <a href="/sitecoop/index.php/admin/adicionarprojetos">
        <button type="button" class="btn btn-default">Adicionar Projeto</button>
    </a>
</div>