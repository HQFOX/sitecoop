<div class="container">
    <div class="col-sm-12" style="margin-bottom:10%;">

        <a href="/sitecoop/index.php/admin">
            <button type="button" class="btn btn-default buttao-admin"  style="margin-top: 50px; margin-bottom: 50px">Voltar</button>
        </a>
        <h2 style="font-family:'Aileron Light'; font-weight:;color:#686868; text-align: right"">Administrar Projetos</h2>
        <hr class="sublinhado-preinscricao">
    </div>


    <div class="col-sm-12" style="margin-bottom:10%; background-color: #e1e1e1; min-height: 500px;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Foto menu</th>
            <th>Nome do projeto</th>
            <th>Localizacão</th>
            <th>Área Habitacional</th>
            <th>Área Quintal</th>
            <th>tipologia</th>
            <th>valor</th>
            <th>nº de inscritos</th>
            <th>limite de inscrições</th>

        </tr>
        </thead>
        <tbody>
        <?php  $projetos = array_reverse($projetos);
        $x = -1;
        foreach($projetos as $projetos):
            $x = $x +1;?>
            <tr>
                <td><img class="img-fluid" src="<?php echo base_url()?>/uploads/<?php echo $projetos['id'];?>/<?php if($projetos['id']==$fotos[$x]['idProjeto'])echo $fotos[$x]['filename'];?>" > </td>
                <td><?php echo $projetos['nome']; ?></td>
                <td><?php echo $projetos['localizacao']; ?></td>
                <td><?php echo $projetos['areahabitacional']; ?></td>
                <td><?php echo $projetos['areaquintal']; ?></td>
                <td><?php echo $projetos['tipologia']; ?></td>
                <td><?php echo $projetos['valor']; ?></td>
                <td><?php echo $projetos['ninscritos']; ?></td>
                <td><?php echo $projetos['limiteinscritos']; ?></td>
                <td><a href="<?php echo base_url(); ?>/index.php/admin/editarprojeto/<?php echo $projetos['id']; ?>"><button type="button" class="btn btn-default buttao-admin">Editar</button></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div style="margin-top: 30px;margin-bottom: 100px;">
        <a href="/sitecoop/index.php/admin/adicionarprojetos">
            <button type="button" class="btn btn-default buttao-admin">Adicionar Projeto</button>
        </a>
    </div>
    </div>
</div>

