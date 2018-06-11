<div class="container" style="margin-bottom:20%;height: 100%; width: 100%;">
  <div class="row" >
      <div class="col-sm-12"align="center" style="min-height: 100%;">
          <div class=" col-sm-4" style="background-color: #e1e1e1; padding-top: 5%;padding-bottom: 5%; margin-top: 10%; margin-bottom: 10%">
              <h1 style="font-family:'Aileron Light';color:#686868; text-align: center">PRÉ-INSCRIÇÃO</h1>
              <div class=" col-sm-7">
                  <hr class="sublinhado-preinscricao">
              </div>
              <h1 style="font-family:'Aileron Light';font-weight: bold;color:#686868; text-align: center">Contacte-nos</h1>
              <?php
              echo form_open("index.php/projectos/preinscricao/" .$projeto[0]['id']);?>
              <div class=" col-sm-8" style="text-align: left">
                  <fieldset style="margin-top:10%;padding-left:5% ; padding-right:5%;">
                      <legend style="font-family: 'Aileron';color:#686868;">Projeto:</legend>
                      <legend style="font-family: 'Aileron' ;color:#686868;"><?php echo $projeto[0]['nome']?></legend>
                      <div class="form-group">
                          <div class="row colbox">
                              <div style="width: 100%">
                                  <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" value="<?php echo set_value('nome'); ?>" />
                                  <span class="text-danger"><?php echo form_error('nome'); ?></span>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="row colbox">
                              <div style="width: 100%">
                                  <input class="form-control " id="email" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                                  <span class="text-danger"><?php echo form_error('email'); ?></span>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="row colbox">
                              <div style="width: 100%">
                                  <input class="form-control" id="ntelefone" name="ntelefone" placeholder="Número de telefone" type="text" value="<?php echo set_value('ntelefone'); ?>" />
                                  <span class="text-danger"><?php echo form_error('ntelefone'); ?></span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="row colbox">
                              <div class="col-lg-12 col-sm-12 text-center">
                                  <input id="btn_login" name="btn_login" type="submit" class="btn btn-default pre-inscricao-submit" value="Submeter" />
                              </div>
                          </div>
                      </div>
                  </fieldset>
              </div>
          </div>
      </div>
  </div>
</div>