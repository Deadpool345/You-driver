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
    <link rel="shortcut icon" type="image/svg" href="{{ asset('img/logo-ico.svg') }}">

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
            text-align: center;
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
            .chat-input-container {
    display: flex;
    flex-direction: column;
    align-items: center;

  }
        .user-input {
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 20px;
    padding: 10px;
    font-size: 16px;
    outline: none;
    margin-top: 5px; /* Añadir margen superior para separar el texto del input */
  }

        

        .submit-btn {
            font-family: san-serif, 'Poppins';
            background-color: #2E3840;
            color: #F9DBBB;
            font-size: 1.2rem;
            padding: 8px 16px;
            border: none;
            width: 15rem;
            height: 3.5rem;
            cursor: pointer;
            border-radius: 1rem;
            margin-top: 4rem;
            align-items: center;
        }
        .content{
            width:85rem;
        }

        .content-img{
            width:50%;
            background-image: url('img/fondos/login.png');    
            background-size: cover; /* ajusta el tamaño de la imagen para cubrir completamente el fondo */
            background-position: center;
        }

        
        @media (max-width: 992px) {
            .content{
                width:auto;
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
        }
    </style>
</head>

<body class="bg-primary">
    <!--navbar-->
    <!--EL NAVBAR Y EL FOOTER SE MANDAN A LLAMAR, YA QUE SON COMPONENTES-->
    @include('components.navbar')
    <h2 class="text-secondary text-center mt-5 "><center><u>Contactanos</u></center><center><small>ponte en contacto con nosotros 24/7</small></center><br></h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="linea3 "/>
        </div>
    <div class="container-fluid content mt-5 bg-white rounded-0 " style="margin-bottom:8rem;">
        <div class="row">
            <div class="col-lg-6 ">
                
                <form class="contact-form  d-flex flex-column justify-content-center align-items-center mt-5">
                    <ul class="chat-input-container">
                        <span>Nombre Completo:</span>
                        <input type="text" class="user-input" placeholder="">
                    </ul>
                    <ul class="chat-input-container">
                        <span>Correo Electronico:</span>
                        <input type="text" class="user-input" placeholder="">
                    </ul>
                    <ul class="chat-input-container">
                        <span>Asunto:</span>
                        <input type="text" class="user-input" placeholder="">
                    </ul>
                    <ul class="chat-input-container">
                        <span>mensaje:</span>
                        <input type="text" class="user-input" placeholder="">
                    </ul>
                    <div class="form-field">
                        <input class="submit-btn" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    @include('components.footer')
</body>

</html>