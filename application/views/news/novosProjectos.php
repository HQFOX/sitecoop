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
        <div id="accordion">
            <?php if(count($projeccao)>0){ ?>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Fotos de projeção
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">

                        <div id="carouselProjeccao" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/<?php echo $projeto[0]['fotoperfil']?>">
                                </div>
                                <?php foreach($projeccao as $projeccao){?>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/projeccao/<?php echo $projeccao['filename']?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselProjeccao" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselProjeccao" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if(count($construcao)>0){ ?>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Fotos de construção
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div id="carouselConstrucao" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/<?php echo $projeto[0]['fotoperfil']?>">
                                </div>
                                <?php foreach($construcao as $construcao){?>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/construcao/<?php echo $construcao['filename'] ?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselConstrucao" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselConstrucao" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if(count($planta)>0){ ?>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Fotos da planta
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div id="carouselPlanta" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/<?php echo $projeto[0]['fotoperfil']?>">
                                </div>
                                <?php foreach($planta as $planta){?>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/<?php echo $projeto[0]['id']?>/planta/<?php echo $planta['filename']?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselPlanta" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselPlanta" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
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

