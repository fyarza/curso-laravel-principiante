<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/gh/dpwilhelmsen/sb-admin-2-bootstrap-4/dist/css/sb-admin-2.min.css"
          rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-md-auto">
            <div class="login-panel card">
                <div class="card-header">
                    <h3 class="card-title">Reset Password</h3>
                </div>
                <div class="card-body">
                    <form class="mb-2" method="post" action="{{ url('/password/reset') }}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="token" value="{{ $token }}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       placeholder="E-mail" name="email" type="email"
                                       value="{{ old('email') }}" autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control{{ $errors->has('password') ? ' has-error' : '' }}"
                                       placeholder="Password" name="password" type="password"
                                       value="">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"
                                       placeholder="Confirm Password" name="password_confirmation" type="password"
                                       value="">
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                     </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-lg btn-outline-info float-right">
                                <i class="fa fa-btn fa-refresh"></i>Reset Password
                            </button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
