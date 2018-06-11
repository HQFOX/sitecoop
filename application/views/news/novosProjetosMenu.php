
    <section id="menuProjetos" style="min-height: 80%">
        <div class="container" style="width: 50%; margin-bottom: 10%">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8" >
                    <h2 style=" margin-top: 30%; margin-bottom:0; font-family:'Aileron Light';font-weight: ;color:black;"><?php echo $titulo ?></h2>
                    <hr class="sublinhado" style="margin-bottom: 40px">
                </div>
            </div>

            <div class="row" style="margin-bottom: 0px">
                <?php foreach ($projetos as $projetos):
                    if($projetos['oculto']!=1 && $projetos['historico']!=$historico){?>
                        <div class="col-sm-6 menu-projetos text-center">
                            <div class="">
                                <a href="/sitecoop/index.php/projectos/getprojeto/<?php echo $projetos['id'];?>">
                                    <img class="img-fluid square" style="max-height: 100%; max-width: 100%; object-fit: cover;" src="<?php echo base_url()?>/uploads/<?php echo $projetos['id'];?>/<?php echo $projetos['fotoperfil'];?>" alt="">
                                </a>
                            </div>
                        </div>
                <?php }endforeach; ?>
            </div>
        </div>


    </section>
