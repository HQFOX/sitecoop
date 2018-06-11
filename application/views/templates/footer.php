
        <footer class="footer">
            <div class="container" style="width: 100%">
                <div class="row" style="margin-top: 1%;text-align: left"">
                    <div class="col-sm-5" style="">
                        <img style="max-width: 15px; margin-top:2%" src="<?php echo base_url()?>/assets/images/facebook.png">
                    </div>
                    <div class="col-sm-2" style="text-align: center">
                        <img style="max-width: 200px; margin-top:15%" src="<?php echo base_url()?>/assets/images/logowhite.png">
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-4 " style="margin-top:5px;text-align: right">
                        <h5 class="texto-aileron" style="color: white"><b>Contactos</b></h5>
                        <h6 class="texto-aileron" style="color: white">morada: Bairro da Malagueira </h6>
                        <h6 class="texto-aileron" style="color: white">telefones:<?php foreach ($ntelefones as $ntelefones): if($ntelefones['ntelefones']!=null){ echo $ntelefones['ntelefones'];?><br><?php } endforeach; ?> </h6>
                        <h6 class="texto-aileron" style="color: white">emails: <?php foreach ($emails as $emails): if($emails['emails']!=null){ echo $emails['emails'];?><br><?php } endforeach; ?></h6>
                    </div>
                </div>

            </div>

        </footer>
    </body>

</html>
