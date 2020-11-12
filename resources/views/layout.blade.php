<!DOCTYPE html>
<html lang="en">

<head>
    <title>LA CUARENTENA RP - RGamez.net</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main3.css?v=1512361247">
    <!--===============================================================================================-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171119956-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-171119956-1');

    </script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LcUwqwZAAAAAKWqnzmikMTMJa3SloUbXfxEhDIR'> </script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcUwqwZAAAAAKWqnzmikMTMJa3SloUbXfxEhDIR', {
                action: 'validate_captcha'
            }).then(function(token) {


            });
        });

    </script>

</head>

<body>

    <div class="limiter">

        <div class="container-login100" style="background-image: url('https://i.imgur.com/N7WNC9A.png');">
            <div class="bounce-in-top">
                <div class="wrap-login100">

                    <form class="login100-form validate-form">
                        <button class="btn btn-primary btn-inicio" type="button">Inicio</button>
                        <button class="btn btn-primary btn-noticias" type="button">Noticias</button>

                        <div class="heartbeat">
                            <span class="login100-form-logo">
                                <img src="https://i.imgur.com/L1ftbEW.png" width="210px">
                            </span>
                        </div>
                        <!-- <span class="login100-text p-b-5 p-t-32">
      Servidor:
                    </span> -->
                        <div class="content-container">
                            <hr
                                style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(179, 179, 179, 0.75), rgba(0, 0, 0, 0));">
                            <span class="login100-form-title p-b-5 p-t-5">
                                LA CUARENTENA RP
                            </span>
                            <div class="text-center label-status">
                            </div>
                            <hr
                                style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(179, 179, 179, 0.75), rgba(0, 0, 0, 0));">
                            <span class="login100-text p-b-5 p-t-15">
                                Estas autorizado con esta IP: {{ $ip }}
                            </span>

                            <span class="login100-form-ip">VERIFICANDO...</span>



                            <div class="container-login100-form-btn">
                                <a class="login100-form-btn" style="display: none;" href="#">
                                    Entrar
                                </a>
                            </div>
                            <p class="whitetext">* Solo debes autorizar ip cuando tienes problemas.</p>
                            <p class="whitetext">* Puede demorar varios minutos al igresar.</p>

                        </div>
                        <div class="news-container" style="display:none;">
                            <hr
                                style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(179, 179, 179, 0.75), rgba(0, 0, 0, 0));">
                            <span class="login100-text p-b-5 p-t-15">
                                Noticias
                            </span>
                            
                            <ul>
                                <li>Lorem dolor amet sit </li>
                                <li>Lorem ipsum dolor sit amet consecutor adipiscingLorem ipsum dolor sit amet </li>
                                <li>Lorem ipsum dolor sit amet consecutor</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small><a href="#"> &nbsp;&nbsp; <a href="#"><i class="fab fa-discord"></i> Robert#9999</a> &nbsp;&nbsp; <a
                        href="https://rgamez.net"><i class="fas fa-server"></i> Necesito esta mitigación DDOS</a>
                    &nbsp;&nbsp;
                    <!-- - Tu IP: --> <?= ''
//getUserIP();
?></small>
    </div>
  </footer>
 
<!--===============================================================================================-->
 <script src="/assets/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
 <script src="/assets/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
 <script src="/assets/bootstrap/js/popper.js"></script>
 <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
 <script src="/assets/select2/select2.min.js"></script>
<!--===============================================================================================-->
 <script src="/assets/daterangepicker/moment.min.js"></script>
 <script src="/assets/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
 <script src="/assets/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
 <script src="/assets/js/main.js?v=2"></script>

</body>
</html>
