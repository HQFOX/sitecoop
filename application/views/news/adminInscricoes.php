<div class="container" style="margin-bottom: 140px;">
    <div class="col-sm-12" style="margin-bottom:10%;">

        <a href="/sitecoop/index.php/admin">
            <button type="button" class="btn btn-default buttao-admin"  style="margin-top: 50px; margin-bottom: 50px">Voltar</button>
        </a>
        <h2 style="font-family:'Aileron Light';color:#686868; text-align: right"">Administrar Inscrições</h2>
        <hr class="sublinhado-preinscricao">
    </div>
    <?php for($i=0;$i<count($projetos);$i++) {?>
        <h3 style="font-family:'Aileron Light';font-weight:bold; color:#686868;"> <?php echo $projetos[$i]['nome'];?></h3>
        <table class="table table-hover" style="background-color: #e1e1e1;">
            <thead>
            <tr>
                <th>Nome:</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data</th>

            </tr>
            </thead>
            <tbody>
            <?php for($j=0;$j<count($inscritos);$j++) {
                if ($inscritos[$j]['projetoId'] == $projetos[$i]['id']) {
                    $data['idp'] = $projetos[$i]['id'];
                    $data['inscrito'] = $inscritos[$j]['inscrito'];
                    $data['id'] = $inscritos[$j]['id'];
                    $this->load->view('news/modals/apagar_modal', $data);?>

                 <tr>
                        <td><?php echo $inscritos[$j]['nomeI']; ?></td>
                        <td><?php echo $inscritos[$j]['email']; ?></td>
                        <td><?php echo $inscritos[$j]['telefone']; ?></td>
                        <td><?php echo $inscritos[$j]['data']; ?></td>
                        <td>
                            <?php if($inscritos[$j]['inscrito']==0){ ?>
                            <a href="<?php echo base_url() ?>index.php/admin/setInscrito/<?php echo $inscritos[$j]['inscrito']; ?>/<?php echo $projetos[$i]['id']?>/<?php echo $inscritos[$j]['id'];?>">
                                <button type="button" class="btn buttao-admin" data-toggle="modal" data-target="#ModalInscrever">Inscrever</button></td>
                            </a>
                            <?php } else {?>
                            <a href="<?php echo base_url() ?>index.php/admin/setInscrito/<?php echo $inscritos[$j]['inscrito']; ?>/<?php echo $projetos[$i]['id']?>/<?php echo $inscritos[$j]['id'];?>">
                                <button type="button" class="btn buttao-admin" data-toggle="modal" data-target="#ModalInscrever">Anular Inscrição</button></td>
                            </a>
                            <?php } ?>
                        <td>
                            <a href="<?php echo base_url() ?>index.php/admin/deleteinscrito/<?php echo $inscritos[$j]['inscrito'] ?>/<?php echo $inscritos[$j]['id'] ?>/<?php echo $inscritos[$j]['projetoId']; ?> ">
                                <button type="button" class="btn buttao-admin" data-toggle="modal" data-target="#exampleModal" >Apagar</button>
                            </a>
                        </td>
                 </tr>
                <?php }
            } ?>
            </tbody>
        </table>
     <?php }?>
    <table class="table table-hover" style="background-color: #e1e1e1;">
        <thead>
        <tr>
            <th>Nome:</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>idProjeto</th>
            <th>Data</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach($inscritos as $inscritos):
            $data['id'] = $inscritos['id'];
            $data['idp'] = $inscritos['projetoId'];
            $this->load->view('news/modals/apagar_modal', $data);?>
            <tr>
                <td><?php echo $inscritos['nomeI']; ?></td>
                <td><?php echo $inscritos['email']; ?></td>
                <td><?php echo $inscritos['telefone']; ?></td>
                <td><?php echo $inscritos['projetoId']; ?></td>
                <td><?php echo $inscritos['data']; ?></td>
                <td>
                        <button onclick="myFunction" type="button" class="btn buttao-admin">Editar</button></td>
                    <p id="demo"></p>
                <td>
                    <a href="<?php echo base_url() ?>index.php/admin/deleteinscrito/<?php echo $inscritos['inscrito'] ?>/<?php echo $inscritos['id'] ?>/<?php echo $inscritos['projetoId']; ?>">
                        <button type="button" class="btn buttao-admin" data-toggle="modal" data-target="#apagar_inscritos_Modal" >Apagar</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript">
        function myFunction() {
            document.getElementById("demo").innerHTML = "Hello World";
        }
    </script>

</div>
