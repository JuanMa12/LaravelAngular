<!doctype html>
<html lang="en" ng-app="userLogin">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script>
        var API_URL="{{url('')}}"
    </script>
</head>
<body>
<div class="container">
    <br><br>
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color: #cccccc; border-radius: 5px 5px 5px 5px">
        <br><br>
        <h4>Inicio de Sesion</h4>
        <div class="text-center" ng-controller="loginController">
            <form ng-submit="doLogin(loginForm)">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email" ng-model="login.email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="password" ng-model="login.password" required>
                </div>
                <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                <p></p>
            </form>
        </div>
    </div>
</div>
</body>
<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('js/angular.js') ?>"></script>
<script src="<?= asset('js/jquery-1.11.0.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('Angular/app.js') ?>"></script>
<script src="<?= asset('Angular/controllers/login.js') ?>"></script>

</html>