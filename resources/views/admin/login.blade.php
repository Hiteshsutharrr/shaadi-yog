<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <style type="text/css">
        body {
            background: #222D32;
            font-family: 'Roboto', sans-serif;
        }

        .login-box {
            margin-top: 75px;
            height: auto;
            background: #1A2226;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .login-form {
            margin-top: 25px;
            text-align: left;
        }

        .login-title {
            margin-top: 15px;
            text-align: center;
            font-size: 30px;
            letter-spacing: 2px;
            margin-top: 15px;
            font-weight: bold;
            color: #ECF0F5;
        }

        .form-control-label {
            font-size: 10px;
            color: #6C6C6C;
            font-weight: bold;
            letter-spacing: 1px;
        }

    </style>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-2"></div>
                <div class="col-lg-4 col-md-8 login-box">
                    <div class="col-lg-12 pt-2 login-title">
                        ADMIN PANEL
                    </div>
                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form action="{{route('admin.login')}}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="text" name="email" class="form-control" required>
                                    <!-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 loginbttm">
                                    <button type="submit" class="form-control btn btn-outline-primary">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2"></div>
                </div>
            </div>
        </div>
    </body>
</html>

