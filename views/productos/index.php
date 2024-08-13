<div class="container">
    <h1 class="text-center">Formulario de Productos</h1>
    <div class="row justify-content-center mb-3">
        <form id="formProductos" action="/mvc-002/guardar" class="col-lg-5 border bg-light p-3">
            <input type="hidden" name="user_id" id="user_id">
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_nombre">Producto</label>
                    <input type="text" name="pro_nombre" id="pro_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_precio">Precio del producto</label>
                    <input type="number" name="pro_precio" id="pro_precio" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <button type="submit" class="btn btn-success w-100">Guardar</button>
                </div>
            </div>
    </div>
    </form>
</div>
