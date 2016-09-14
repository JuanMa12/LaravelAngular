<!DOCTYPE html>
<html lang="en-US" ng-app="productRecords">
<head>
    <title>Laravel 5 AngularJS CRUD Example</title>

    <!-- Load Bootstrap CSS -->
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div  ng-controller="productsController">
 <div class="container">
     <h2>Productos</h2>
    <!-- Table-to-load-the-data Part -->
    <table class="table" style="background-color: #e6e6e6; border-radius: 5px 5px 5px 5px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Agregar Nuevo Producto</button></th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="product in products">
            <td>@{{ product.id }}</td>
            <td>@{{ product.name }}</td>
            <td>@{{ product.details }}</td>
            <td>@{{ product.price }}</td>
            <td>@{{ product.quantity }}</td>
            <td>
                <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', product.id , $index)">Editar</button>
                <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(product.id , $index)">Eliminar</button>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- End of Table-to-load-the-data Part -->
    <!-- Modal (Pop up when detail button clicked) -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                    <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>
                </div>
                <div class="modal-body">
                    <form name="frmProducts" class="form-horizontal" novalidate="">

                        <div class="form-group error">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="name" name="name" placeholder="Nombre"
                                       ng-model="product.name" ng-required="true">
                                        <span class="help-inline"
                                              ng-show="frmProducts.name.$invalid && frmProducts.name.$touched">Nombre es requerido</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Detalles</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="details" placeholder="Detalles" value="@{{details}}"
                                       ng-model="product.details" ng-required="true">
                                        <span class="help-inline"
                                              ng-show="frmProducts.details.$invalid && frmProducts.details.$touched">Campo detalles requirido</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Precio</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Precio" value="@{{price}}"
                                       ng-model="product.price" ng-required="true">
                                    <span class="help-inline"
                                          ng-show="frmProducts.price.$invalid && frmProducts.price.$touched">Campo precio es requirido</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Cantidad</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="position" name="quantity" placeholder="Cantidad" value="@{{quantity}}"
                                       ng-model="product.quantity" ng-required="true">
                                    <span class="help-inline"
                                          ng-show="frmProducts.quantity.$invalid && frmProducts.quantity.$touched">Cantidad es requirida</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)"
                            ng-disabled="frmProducts.$invalid">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>

<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('js/angular.js') ?>"></script>
<script src="<?= asset('js/jquery-1.11.0.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('Angular/app.js') ?>"></script>
<script src="<?= asset('Angular/controllers/products.js') ?>"></script>
</body>
</html>
