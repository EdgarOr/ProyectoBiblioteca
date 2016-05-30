<div class="modal fade" id="modalCategoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="WebServicesCategoria.php" method="post">
                <fieldset>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <label for="email">Categoría:</label>
                        <input type="hidden" name="accion" value=1>
                        <input name="nombre" class="form-control" id="text" placeholder="Introduzca la nueva categoría" type="text">

                    </div>
                    <div class="modal-body">
                        <div class="form-group">

                            <ul class="list-group">
                                <li class="list-group-item">Item 1</li>
                                <li class="list-group-item">Item 2</li>
                                <li class="list-group-item">Item 3</li>
                            </ul>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <a data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                        <a class="btn btn-success">Aceptar</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div> 