<h3>Admin Dashboard Projetos</h3>

<div>
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
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <a href="delete/<?php echo $projetos['id']; ?>">
                                        <p>Some text in the modal.</p>
                                    </a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div>
    <?php
    echo form_open("index.php/admin/administrarprojetos");?>
        <fieldset>
            <legend>Inserir Projeto</legend>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="nome_projeto" class="control-label">Nome Projeto</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="nome_projeto" name="nome_projeto" placeholder="Nome Projeto" type="text" value="<?php echo set_value('nome_projeto'); ?>" />
                        <span class="text-danger"><?php echo form_error('nome_projeto'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Localizacão</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="localizacao" name="localizacao" placeholder="Localização" type="text" value="<?php echo set_value('localizacao'); ?>" />
                        <span class="text-danger"><?php echo form_error('localizacao'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Tipologia</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="tipologia" name="tipologia" placeholder="tipologia" type="text" value="<?php echo set_value('tipologia'); ?>" />
                        <span class="text-danger"><?php echo form_error('tipologia'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Valor</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="valor" name="valor" placeholder="Valor" type="text" value="<?php echo set_value('valor'); ?>" />
                        <span class="text-danger"><?php echo form_error('valor'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Numero de quartos</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="nquartos" name="nquartos" placeholder="" type="text" value="<?php echo set_value('nquartos'); ?>" />
                        <span class="text-danger"><?php echo form_error('nquartos'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Numero de inscritos</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="ninscritos" name="ninscritos" placeholder="" type="text" value="<?php echo set_value('ninscritos'); ?>" />
                        <span class="text-danger"><?php echo form_error('ninscritos'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="localizacao" class="control-label">Limite de inscritos</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <input class="form-control" id="limiteinscritos" name="limiteinscritos" placeholder="" type="text" value="<?php echo set_value('limiteinscritos'); ?>" />
                        <span class="text-danger"><?php echo form_error('limiteinscritos'); ?></span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
                </div>
            </div>
        </fieldset>
    <?php echo form_close(); ?>
    <?php echo $this->session->flashdata('msg'); ?>
</div>