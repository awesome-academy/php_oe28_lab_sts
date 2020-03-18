<!DOCTYPE html>
<html lang="env">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ __('messages.login') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('/css/adminlte.css') }}">

</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('messages.login_admin') }}</p>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="{{ __('messages.email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="{{ __('messages.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    {{ __('messages.remeber') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('messages.login') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
