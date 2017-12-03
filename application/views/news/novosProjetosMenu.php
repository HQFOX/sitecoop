
    <section id="menuProjetos">
        <div class="container" style="width: 50%; margin-bottom: 10%">
            <h3 class="text-center titulo-menu-projetos">PROJETOS EM ANDAMENTO</h3>
            <h6 class="text-center" style="font-family: Aileron; color:white;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</h6>

            <div class="row" style="margin-bottom: 0px">
                <?php foreach ($projetos as $projetos): ?>
                    <div class="col-sm-6 menu-projetos nopadding">
                        <div class="menu-item">
                            <a href="/sitecoop/index.php/novosprojectos/getprojeto/<?php echo $projetos['id'];?>">
                                <img class="img-fluid" src="<?php echo base_url()?>/assets/images/exemplo1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </section>
