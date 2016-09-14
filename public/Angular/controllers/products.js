app.controller('productsController', function($scope, $http, API_URL) {
    //retrieve employees listing from API
    $http.get(API_URL + "products")
        .success(function(response) {
            $scope.products = response;
        });

    //show modal form
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Agregar Nuevo Producto";
                $scope.product = {};
                break;
            case 'edit':
                $scope.form_title = "Detalle del Producto";
                $scope.id = id;
                $http.get(API_URL + 'products/' + id)
                    .success(function(response) {
                        $scope.product = response;
                    });
                break;
            default:
                break;
        }
        console.log(id);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, id ) {
        var url = API_URL + "products";

        //append employee id to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + id;
        }

        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.product),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            if (modalstate === 'edit'){
                $scope.products = response;
            }else{
                $scope.products.push(response);
            }
            $('#myModal').modal('hide');
        }).error(function(response) {
            console.log(response);
            alert('Error, compruebe');
        });
    }

    //delete record
    $scope.confirmDelete = function(id , $index) {
        var isConfirmDelete = confirm('Seguro que deseas elimininar este producto?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'products/' + id
            }).
                success(function(data) {
                    console.log($index);
                   $scope.products.splice($index, 1);
                }).
                error(function(data) {
                    console.log(data);
                    alert('No se pudo eliminar');
                });
        } else {
            return false;
        }
    }
});
