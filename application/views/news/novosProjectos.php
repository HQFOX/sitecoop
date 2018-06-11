<div class="container">
    <div class="row" style="margin-top: 5%;">
        <div class="col-sm-6" style="margin-bottom:10%;">
        </div>
        <div class="col-sm-6" style="margin-bottom:10%;">
            <h5 class="icone">Projeto<span><img style="height: 10%;width:10%;" src='<?php echo base_url()?>/assets/images/ferramenta.png'/></span></h5>
            <hr class="sublinhado" style="margin-bottom: 40px; margin-right: 15px;">
        </div>
    </div>
    <div class="col-sm-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/<?php echo $projeto[0]['fotoperfil']?>">
                </div>
                <?php foreach($construcao as $construcao){?>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/construcao/<?php echo $construcao['filename'] ?>">
                    </div>
                <?php } ?>
                <?php foreach($planta as $planta){?>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/planta/<?php echo $planta['filename']?>">
                    </div>
                <?php } ?>
                <?php foreach($projeccao as $projeccao){?>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/projeccao/<?php echo $projeccao['filename']?>">
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div style="margin-top: 10%; margin-bottom: 7%;">
            <span>
                <?php echo $projeto[0]['descricao'] ?>
            </span>
        </div>

        <iframe
                width="100%"
                height="320px"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAKGONeQgb9ZNUA0am5RnH6NClU3KHExZA
        &q=<?php echo $projeto[0]['localizacao'] ?>" allowfullscreen>
        </iframe>
        <div class="row " style="margin-top:4%;">
            <div class="col-sm-12 descricao-projeto" style="margin-bottom:0%;"  >
                <h6 style="margin-top: 15px;">Nome: <?php echo $projeto[0]['nome'] ?></h6>

            </div>
            <hr class="sublinhado-descricao" style="">
        </div>
        <div class="row " style="margin-bottom:0%;">
            <div class="col-sm-12 descricao-projeto" style="margin-bottom:0%;"  >
                <h6 style="margin-top: 15px;">Localização: <?php echo $projeto[0]['localizacao'] ?></h6>
            </div>
            <hr class="sublinhado-descricao">
        </div>
        <div class="row" style="margin-bottom:0%;">
            <div class="col-sm-12 descricao-projeto"  >
                <h6 style="margin-top: 15px;">Tipologia: <?php echo $projeto[0]['tipologia'] ?></h6>
            </div>
            <hr class="sublinhado-descricao" style="">
        </div>
        <div class="row " style="margin-bottom:0%;">
            <div class="col-sm-12 descricao-projeto" style="margin-bottom:0%;" >
                <h6 style="margin-top: 15px;">Área Habitacional: <?php echo $projeto[0]['areahabitacional'] ?></h6>
            </div>
            <hr class="sublinhado-descricao" style="">
        </div>
        <div class="row "style="margin-bottom:0%;">
            <div class="col-sm-12 descricao-projeto" style="margin-bottom:0%;" >
                <h6 style="margin-top: 15px;">Área Quintal: <?php echo $projeto[0]['areaquintal'] ?></h6>
            </div>
            <hr class="sublinhado-descricao" style="">
        </div>
        <div class="row " style="margin-bottom:1%;">
            <div class="col-sm-12 descricao-projeto" style="margin-bottom:0%;" >
                <h6 style="margin-top: 15px;">Valor: <?php echo $projeto[0]['valor'] ?></h6>
            </div>
            <hr class="sublinhado-descricao" style="">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10" style="margin-bottom:0%;">
        </div>
        <div class="col-sm-2" style="margin-bottom:0%; text-align: center" align="center">
            <h5 class="" style=" font-family: 'Aileron Light'">»inscritos«</h5>
        </div>
    </div>
    <div class="row" >
        <div class="col-sm-10" style="margin-bottom:0%;">
        </div>
        <div class="col-sm-2" style="margin-bottom:0%; text-align: center; padding-left: 1.5%; padding-right: 1.5%;" align="right">
            <h5 class="pre-inscricao-numero"><span ><?php echo $projeto[0]['ninscritos'] ?> </span></h5>
        </div>
    </div>
    <div class="row" style="margin-top: 5%;margin-bottom: 0%" >

        <div class="col-sm-12 " style="margin-bottom:10%;"  align="right" >
            <h5 class="icone"><span><img style="height: 10%;width:10%;" src='<?php echo base_url()?>/assets/images/ferramenta2.png'/></span><a href="/sitecoop/index.php/projectos/preinscricao/<?php echo $projeto[0]['id'];?>"><span class="pre-inscricao-button">Fazer pré-inscrição</span></a></h5>
        </div>
    </div>
</div>

