<section id="projeto">
    <div class="container" style="margin-top: 10%; margin-bottom: 10%; margin-left: 12%; margin-right: 12% height: 100%">
        <div class="row">
            <div class="col-sm-5" style="margin-bottom:10%;">
                <h5 class="icone">PROJETOS<span><img style="height: 10%;width:10%;" src='<?php echo base_url()?>/assets/images/ferramenta.png'/></span></h5>
                <hr class="sublinhado" style="margin-bottom: 40px">
                <h5 style="font-family: Aileron;"><?php echo $projeto[0]['nome'] ?></h5>
                <img class="img-fluid" src="<?php echo base_url()?>/assets/images/exemplo1.jpg" alt="">

            </div>
            <div class="col-sm-5 projeto">
                <div class="descricao-projeto" style="margin-top: 20%;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam-
                    corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                    autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                </div>
                <table>
                    <tr>
                        <td>
                            NOME: <?php echo $projeto[0]['nome'] ?>
                        </td>
                        <td>
                            Nº DE QUARTOS: <?php echo $projeto[0]['nquartos'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            LOCALIZAÇÃO: <?php echo $projeto[0]['localizacao'] ?>
                        </td>
                        <td>
                            TIPOLOGIA: <?php echo $projeto[0]['tipologia'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            VALOR: <?php echo $projeto[0]['valor'] ?>
                        </td>
                        <td>
                            »nº de inscritos« <?php echo $projeto[0]['ninscritos'] ?>
                        </td>
                    </tr>
                </table>
                <?php if($projeto[0]['ninscritos'] < $projeto[0]['limiteinscritos']){ ?>
                        <div class="botao" style="align-items: center">
                            <a href="/sitecoop/index.php/novosprojectos/preinscricao/<?php echo $projeto[0]['id'];?>">
                                Pre-inscrição
                            </a>
                        </div>

                <?php } else {?>
                <?php ;} ?>
            </div>
        </div>
    </div>
</section>