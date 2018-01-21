<section id="projeto">
    <div class="container" style="width: 85%; margin-top: 10%; margin-bottom: 10%; margin-left: 12%; height: 100%;">
        <div class="row">
            <div class="col-sm-5" style="margin-bottom:10%;">
                <h5 class="icone">PROJETOS<span><img style="height: 10%;width:10%;" src='<?php echo base_url()?>/assets/images/ferramenta.png'/></span></h5>
                <hr class="sublinhado" style="margin-bottom: 40px">
                <h5 style="font-family: Aileron;"><?php echo $projeto[0]['nome'] ?></h5>
                <img class="img-fluid" style="width:100%; height:90%;" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id'];?>/fotoperfil.jpg" alt="">

            </div>
            <div class="col-sm-5 projeto">
                <div class="descricao-projeto" style="margin-top: 20%; height: 50%;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam-
                    corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                    autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                </div>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 60%;">
                            NOME:
                        </td>
                        <td style="width: 40%;">
                            Nº DE QUARTOS:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $projeto[0]['nome'] ?>
                        </td>
                        <td>
                            <?php echo $projeto[0]['nquartos'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            LOCALIZAÇÃO:
                        </td>
                        <td>
                            TIPOLOGIA:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $projeto[0]['localizacao'] ?>
                        </td>
                        <td>
                            <?php echo $projeto[0]['tipologia'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            VALOR:
                        </td>
                        <td>
                            »nº de inscritos«
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $projeto[0]['valor'] ?>
                        </td>
                        <td style="padding-left: 5%;">
                            <?php echo $projeto[0]['ninscritos'] ?>
                        </td>
                    </tr>
                </table>
                <?php if($projeto[0]['ninscritos'] < $projeto[0]['limiteinscritos']){ ?>
                    <a href="/sitecoop/index.php/novosprojectos/preinscricao/<?php echo $projeto[0]['id'];?>">
                        <div class="botao" style="align-items: center; margin-left: 40%;">
                                Pre-inscrição
                        </div>
                    </a>
                <?php } else {?>
                <?php ;} ?>
            </div>
        </div>
    </div>
</section>