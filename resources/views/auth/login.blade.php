<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CONTROL</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page" style="background-color: white;">
<div class="login-box">
    <div class="login-logo">
        <img src="https://lh3.googleusercontent.com/jmEbwi97A_s94zW_bR8g_DzNfOKayCGCIEeEah_6tSqpBotfDW8viVVSldG5ECDpYdV-o7YZBRQlm7G-gQFB5AUe6M3pjM6TWDe-W9y3cD4aU8AXlrl0_yxULTqBEccFWmRajwgsXEt2IK2DN6vzz7__sovSWevFaDpVbPBw2yd0-df8K12G-A_MpZXKA9O-pHBz9P5uuRtwTdcVIM5cLg2GTihZ9m3TBZOk_SQqnInU0flxfrOZyHDZ_iR9MyTpEfwdHSht3DvGiNKhXID9Z9hME9lwhYpmsnFBTlmrhx1cHW9wHk5-Vev5eVFOpXUGoBFIAzsR0vsHdRZ1BMLl9StwxhdhK5DxSYoZEDvC3l_E_qABEDjdsTTWNLGNh65HHyagQ6R8Fnq_ayHDhVfQzqJpHV5gCgIVREwCb_M3FHUya6fIWpN9GrVafRM05vLXNNi5JDanGGkU_f-oboCg4wonOUt0ZxcZmDm-kj2NUo8-7mfjEQngzoND-2xItoClDysfP-ma3xmCZmDJUxYAT6Sk3s7Lq9JVgUKuQMBxs0HpHBa1jqLdc27g9_jeEIsHCxfFt1RuaS5UgtAUsBZLEvRFk5JIQLKG-pE8mSoeXoIKdNsVWCeR9xFojLZVPQPgZx3RcZu_fz4XMohHBWcjnX2WMF5QAZIDGL7Jzecp3C2yhTL4N9aaAofZt5l_1q5r4ujhC2R5JpjXvRlz6VlN9TKB5ZvdFInaaRssvdZ-K1QquNt4GnUe315Tmvc=s500-no?authuser=0" alt="" srcset="" style="width: 250px;position: relative;top:-55px;">
  
    </div>

    <!-- /.login-logo -->
  <!-- /.login-box-body -->
    <div class="card" style="position: relative;top:-50px">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Seja bem vindo!!!</p>

            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Lembrar</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block"  style="background-color:dodgerblue">LOGIN</button>
                    </div>

                </div>
            </form>
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">novo usuário?</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>

</div>
<!-- /.login-box -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
