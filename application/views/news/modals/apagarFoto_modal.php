<!-- Modal -->
<div class="modal fade" id="apagar_foto_Modal<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $id ?>
                Tem a certeza que quer apagar esta foto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="<?php echo base_url() ?>index.php/admin/delfoto/<?php echo $id?>/<?php echo $tipo?>/<?php echo $file?>">
                    <button type="button" class="btn btn-primary">Apagar</button>
                </a>
            </div>
        </div>
    </div>
</div>