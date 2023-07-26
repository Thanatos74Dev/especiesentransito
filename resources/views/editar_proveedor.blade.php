<?php
    
?>
  <!-- MODAL EDICIÓN DE PROVEEDORES -->
    <form action="editar_proveedor" method="post">
    @csrf

    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="editarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editarLabel">Edición de proveedor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">
            <span class="fas fa-recycle"></span>
                {{ 'Actualizar' }}
            </button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>

    </form>
