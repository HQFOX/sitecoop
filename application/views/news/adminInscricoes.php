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
                    <td><?php echo $inscritos[$j]['nomeI']; ?></td>
                    <td><?php echo $inscritos[$j]['email']; ?></td>
                    <td><?php echo $inscritos[$j]['telefone']; ?></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalInscrever">Inscrever</button></td>

                    <!-- Modal -->
                    <div class="modal fade" id="ModalInscrever" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Alterar Inscrição</h4>
                                </div>
                                <div class="modal-body">
                                    <p>tem a certeza que quer alterar a inscrição</p>
                                    <a href="/teste/index.php/admin/setinscrito/<?php echo $inscritos[$j]['idI']; ?>/<?php echo $inscritos[$j]['inscrito']; ?>">
                                        <button type="button" class="btn btn-default">Sim</button>
                                    </a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                </div>
                                <!--                               <div class="modal-footer">
                                                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>-->
                            </div>

                        </div>
                    </div>






                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalapagar">Apagar</button>
                        <!-- Modal -->
                        <div class="modal fade" id="Modalapagar" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Apagar Inscrito</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>tem a certeza que quer apagar o inscrito?</p>
                                        <a href="/teste/index.php/admin/deleteinscrito/<?php echo $inscritos['idI']; ?>">
                                            <button type="button" class="btn btn-default">Sim</button>
                                        </a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                    </div>
                                    <!--                               <div class="modal-footer">
                                                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                   </div>-->
                                </div>

                            </div>
                        </div>
                    </td>
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
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button></td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Apagar</button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Apagar Inscrito</h4>
                                </div>
                                <div class="modal-body">
                                    <p>tem a certeza que quer apagar o inscrito?</p>
                                    <a href="/teste/index.php/admin/deleteinscrito/<?php echo $inscritos['idI']; ?>">
                                        <button type="button" class="btn btn-default">Sim</button>
                                    </a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                </div>
                                <!--                               <div class="modal-footer">
                                                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                               </div>-->
                            </div>

                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>