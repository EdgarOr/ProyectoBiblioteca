<div class="modal fade" id="modalCategoria">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <label for="email">Categoría:</label>
                <form action="WebServicesCategorias.php" method="post" id="formCat">
                    <input name="nombre" class="form-control" id="text" placeholder="Introduzca la nueva categoría" type="text">
                </form>
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
                <button class="btn btn-success" type="submit" form="formCat">Aceptar</button>
            </div>
        </div>
    </div>
</div> 