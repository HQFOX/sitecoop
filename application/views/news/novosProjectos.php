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
                            LOCALIDADE:
                        </td>
                        <td>
                            BAIRRO:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $projeto[0]['localidade'] ?>
                        </td>
                        <td>
                            <?php echo $projeto[0]['bairro'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            RUA:
                        </td>
                        <td>
                            TIPOLOGIA:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $projeto[0]['rua'] ?>
                        </td>
                        <td>
                            <?php if($projeto[0]['tipologia']==1)echo "vivenda";if($projeto[0]['tipologia']==2)echo "apartamento";else echo "outro"; ?>
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
        <div style="margin-top:90px">
            <iframe
                    width="550"
                    height="350"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAKGONeQgb9ZNUA0am5RnH6NClU3KHExZA
        &q=<?php echo $projeto[0]['bairro'] ?>+<?php echo $projeto[0]['rua'] ?>,<?php echo $projeto[0]['localidade'] ?>" allowfullscreen>
            </iframe>
        </div>
    </div>
</section>