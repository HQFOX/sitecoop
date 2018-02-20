<div class="container">
    <h2>administrar inscricoes</h2>


    <?php for($i=0;$i<count($projetos);$i++) {?>
        <h3> <?php echo $projetos[$i]['nome'];?></h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nome:</th>
                <th>Email</th>
                <th>Telefone</th>

            </tr>
            </thead>
            <tbody>
            <?php for($j=0;$j<count($inscritos);$j++) {
                if ($inscritos[$j]['projetoId'] == $projetos[$i]['id']) {?>
                 <tr>
                        <td><?php echo $inscritos[$j]['nomeI']; ?></td>
                        <td><?php echo $inscritos[$j]['email']; ?></td>
                        <td><?php echo $inscritos[$j]['telefone']; ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>/index.php/admin/setInscrito/<?php echo $inscritos[$j]['id'];?>/<?php echo $inscritos[$j]['inscrito']; ?>">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalInscrever"><?php if($inscritos[$j]['inscrito']==0) echo "Inscrever"; else echo "Desinscrever"; ?></button></td>
                            </a>
                        <td>
                            <a href="<?php echo base_url() ?>/index.php/admin/deleteInscrito/<?php echo $inscritos[$j]['id']; ?>">
                                 <button type="button" class="btn btn-primary" >Apagar</button>
                            </a>
                        </td>
                 </tr>
                <?php }
            } ?>
            </tbody>
        </table>
     <?php }?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nome:</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>idProjeto</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach($inscritos as $inscritos): ?>
            <tr>
                <td><?php echo $inscritos['nomeI']; ?></td>
                <td><?php echo $inscritos['email']; ?></td>
                <td><?php echo $inscritos['telefone']; ?></td>
                <td><?php echo $inscritos['projetoId']; ?></td>
                <td>
                    <a href="<?php echo base_url() ?>/index.php/admin/editarinscricao ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button></td>
                    </a>
                <td>
                    <a href="<?php echo base_url() ?>/index.php/admin/deleteInscrito/<?php echo $inscritos['id']; ?>">
                        <button type="button" class="btn btn-primary" >Apagar</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>