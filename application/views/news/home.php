<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/carrossel/exemplo2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/carrossel/exemplo2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" style="width: 100%; max-height: 550px" src="<?php echo base_url()?>/uploads/carrossel/ferramenta.png" alt="Third slide">
        </div>
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

<div class="container">
    <div class="row">
        <div class="col-sm-5" style="margin:auto;">
            <h2 style=" margin-top: 30%; margin-bottom:0; font-family:'Moon';font-weight: bold;color:black; text-align: center">SOBRE A NOSSA EMPRESA</h2>
            <hr class="sublinhado" style=" height: 2px; margin-left: 6%;margin-right: 6%;">
        </div>
    </div>
    <div class="row">
        <?php if(count($sobre)>0) echo $sobre[0]['sobre']; ?>
    </div>
    <div class="row">
        <div class="col-sm-5" style="margin:auto;">
            <img style="max-height: 30%; max-width: 40%;margin-top: 30%; margin-bottom: 30%; margin-left: 35%;" src="<?php echo base_url()?>/assets/images/logonobackground.png">
        </div>
    </div>
</div>