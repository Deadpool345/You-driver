<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>You Driver</title>

    <style>
        .get-in-touch {
            width: 1080px;
            margin: auto;
            position: relative;
        }

        .get-in-touch .title {
            text-align: center;
            font-size: 3.2em;
            line-height: 48px;
            padding-bottom: 48px;
        }

        .contact-form .form-field {
            position: relative;
            margin: 32px 0;
        }

        .contact-form .input-text {
            display: block;
            width: 30rem;
            height: 36px;
            border-width: 0 0 2px 0;
            border-color: #2E3840;
            font-size: 18px;
            line-height: 26px;
            font-weight: 400;
        }

        .contact-form .input-text:focus {
            outline: none;
        }

        .contact-form .input-text:focus+.label,
        .contact-form .input-text.not-empty+.label {
            -webkit-transform: translateY(-24px);
            transform: translateY(-24px);
        }

        .contact-form .label {
            position: absolute;
            left: 5px;
            bottom: 11px;
            font-size: 18px;
            line-height: 26px;
            font-weight: 400;
            color: #2E384;
            cursor: text;
            transition: -webkit-transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
        }

        .submit-btn {
            font-family: san-serif, 'Poppins';
            background-color: #2E3840;
            color: #F9DBBB;
            font-size: 1.2rem;
            padding: 8px 16px;
            border: none;
            width: 10rem;
            height: 3.5rem;
            cursor: pointer;
            border-radius: 1rem;
            margin-top: 4rem;
        }
        .content{
            width:80rem;
        }

        .img-login{
            width:628px;
        }

        @media (max-width: 992px) {
            .content{
                width:auto;
            }

            .img-login{
                width: 100%;
                height: 100%;
            }

            .content-img{
                width: 100%;
            }
            
            .row {
                flex-direction: column;
            }

            .col-lg-6 {
                width: 100%;
            }

            .contact-form {
                width: 100%;
            }

            .contact-form .form-field {
                margin: 16px 0;
            }

            .contact-form .input-text {
                width: 100%;
            }

            .contact-form .label {
                left: 0;
                bottom: 0;
            }

            .contact-form .submit-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-primary">
    <!--navbar-->
    <!--EL NAVBAR Y EL FOOTER SE MANDAN A LLAMAR, YA QUE SON COMPONENTES-->
    @include('components.navbar')

    <div class="container-fluid content mt-5 bg-white rounded-0">
        <div class="row">
            <div class="col-lg-6 ">
                <h1 class="mt-5">¡Bienvenido de vuelta!</h1>
                <form class="contact-form  d-flex flex-column justify-content-center align-items-center mt-5">
                    <div class="form-field  ">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Nombre de usuario</label>
                    </div>
                    <div class="form-field">
                        <input id="email" class="input-text js-input" type="password" required>
                        <label class="label" for="email">Contraseña</label>
                    </div>
                    <div>
                        <small class="form-field"><a href="{{ url('/restablecercontra') }}" class="text-decoration-none">¿Olvidaste tu contraseña?</a></small>
                    </div>
                    <div class="form-field">
                        <input class="submit-btn" type="submit" value="Iniciar Sesion">
                    </div>
                </form>
            </div>
            <div class="col-lg-6 d-flex align-items-center content-img">
                <img class="img-login" src="{{ asset('img/fondos/register.png') }}" alt="Hero Image"  style="height:35rem;">
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
y