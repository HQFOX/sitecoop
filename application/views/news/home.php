<div class="container" style="min-width: 100%; padding-left:0%; padding-right: 0%;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" style="max-height: 600px;" src="<?php echo base_url()?>/uploads/carrossel/<?php echo $carrossel[0]['filename'];?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35); text-align: left;">
                    <div style="margin-left: 20%;">
                        <?php echo $carrossel[0]['descricao'];?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="max-height: 600px;" src="<?php echo base_url()?>/uploads/carrossel/<?php echo $carrossel[1]['filename'];?>" alt="Second slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35); text-align: left;">
                    <div style="margin-left: 20%;">
                        <?php echo $carrossel[1]['descricao'];?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="max-height: 600px;" src="<?php echo base_url()?>/uploads/carrossel/<?php echo $carrossel[2]['filename'];?>" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35); text-align: left;">
                    <div style="margin-left: 20%;">
                        <?php echo $carrossel[2]['descricao'];?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="max-height: 600px;" src="<?php echo base_url()?>/uploads/carrossel/<?php echo $carrossel[3]['filename'];?>" alt="Third slide">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.35); text-align: left;">
                    <div style="margin-left: 20%;">
                        <?php echo $carrossel[3]['descricao'];?>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container" style="margin-bottom: 10%">



    <div id="sobre" class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8" >
            <h2 class="texto-aileron-light-bold" style=" margin-top: 30%; margin-bottom:0;color:black;">Sobre a cooperativa</h2>
            <hr class="sublinhado" style="margin-bottom: 40px">
        </div>
    </div>
    <div class="row">
        <?php if(count($sobre)>0) echo $sobre[0]['sobre']; ?>
    </div>

    <iframe
            width="100%"
            height="320px"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAKGONeQgb9ZNUA0am5RnH6NClU3KHExZA
        &q=<?php echo "Évora Bairro da Malagueira Rua do Sarrabulho 4 " ?>" allowfullscreen>
    </iframe>
    <div class="row">
        <div class="col-sm-5" style="margin:auto; text-align: center">
            <img style="max-height: 30%; max-width: 40%;margin-top: 30%; margin-bottom: 10%;" src="<?php echo base_url()?>/assets/images/logonobackground.png">
        </div>
    </div>
    <?php
    foreach ($post as $post):
        if($post['oculto']!=1){?>
    <div id="post" class="row">
        <div class="col-sm-8" style="margin:auto; text-align: left;">
            <h3 class="texto-aileron-bold" style=" margin-top: 30%; margin-bottom:0;color:black; text-align: left; resize: horizontal"><?php echo $post['titulo'];?></h3>
            <hr class="sublinhado" style=" height: 2px;">
            <h5 class="texto-aileron" style="color:black; text-align: right;"><?php echo $post['data'];?></h5>

            <?php if($post['imagem']!='noimage'){?>
                <img style="width: 100%;" src="<?php echo base_url()?>/uploads/post/<?php echo $post['imagem'];?>">

            <?php }
            
                echo $post['texto'];
                if($post['video']!='')
                    if($post['video']!="erro no link"){?>

                        <iframe width="100%" height="420" src="<?php echo $post['video'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <?php }?>
        </div>
    </div>
        <?php }
    endforeach; ?>



</div>