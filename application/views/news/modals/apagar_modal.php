<!-- Modal -->
<div class="modal fade" id="apagar_inscritos_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tem a certeza que quer apagar esta inscrição?<?php echo $value; echo $id ; echo $idp ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="<?php echo base_url() ?>index.php/admin/deleteInscrito/<?php echo $value; ?>/<?php echo $id;?>/<?php echo $idp;?>">
                    <button type="button" class="btn btn-primary">Apagar</button>
                </a>
            </div>
        </div>
    </div>
</div>