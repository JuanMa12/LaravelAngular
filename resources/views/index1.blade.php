<!doctype html>
<html lang="en" ng-app="userRecords">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <h4>users</h4>
    <div  ng-controller="usersController">
            <table class="table" style="background-color: #e6e6e6; border-radius: 5px 5px 5px 5px">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="user in users">
                    <td>@{{ user.id }}</td>
                    <td>@{{ user.name }}</td>
                    <td>@{{ user.email }}</td>
                    <td>@{{ user.password }}</td>
                </tr>
                </tbody>
            </table>
    </div>
</div>
</body>
<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('js/angular.js') ?>"></script>
<script src="<?= asset('js/jquery-1.11.0.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('Angular/app.js') ?>"></script>
<script src="<?= asset('Angular/controllers/users.js') ?>"></script>
</html>