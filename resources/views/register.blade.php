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
        *{
            font-family: 'Poppins', sans-serif;
        }
        
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .side-image{
            background-image: url("'../../img/fondos/login.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 10px 0 0 10px;
            position: relative;
        }
        .contenedor{
        width:  900px;
        height:auto;
        border-radius: 10px;
        background: #fff;
        padding: 0px;
        box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
        }
        .text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .text p{
            color: #fff;
            font-size: 20px; 
        }
        
        .right{
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        }
        .input-box{
        width: 330px;
        box-sizing: border-box;
        }
        
        .input-box header{
            font-weight: 700;
            text-align: center;
            margin-bottom: 45px;
        }
        .input-field{
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 0 10px 0 10px;
        }
        .input{
            height: 45px;
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            outline: none;
            margin-bottom: 20px;
            color: #40414a;
        }
        .input-box .input-field label{
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
        }
        .input-field input:focus ~ label
        {
            top: -10px;
            font-size: 13px;
        }
        .input-field input:valid ~ label
        {
        top: -10px;
        font-size: 13px;
        color: #5d5076;
        }
        
        .submit{
            border: none;
            outline: none;
            height: 45px;
            background: #ececec;
            border-radius: 5px;
            transition: .4s;
        }

        .submit-btn {
            background-color: #2E3840;
            color: #F9DBBB;
            font-size: 1rem;
            
            border: none;
            width: 8rem;
            height: 3.5rem;
            cursor: pointer;
            border-radius: 1rem;
            
        }

        .form-field {
            position: relative;
            margin: 32px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        span a{
            text-decoration: none;
            font-weight: 700;
            color: #000;
            transition: .5s;
        }
        span a:hover{
            text-decoration: underline;
            color: #000;
        }
        @media only screen and (max-width: 768px){
            .side-image{
                border-radius: 10px 10px 0 0;
            }
            img{
                width: 35px;
                position: absolute;
                top: 20px;
                left: 47%;
            }
            .text{
                position: absolute;
                top: 70%;
                text-align: center;
            }
            .text p, i{
                font-size: 16px;
            }
            .row{
                max-width:420px;
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-primary">
    
    @include('components.navbar')
    <h2 class="text-secondary text-center mt-5 ">Formulario de Registro</h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="linea3 "/>
        </div>
            <div class="container main">
                <div class="contenedor row">
                    <div class="col-md-6 side-image"></div>
                    <div class="col-md-6 right pt-5">
                        <div class="input-box">
                        <div class="input-field mb-3">
                                <input type="text" class="input" id="email" required="" autocomplete="off">
                                <label for="email">Nombre de usuario:</label> 
                            </div> 
                            <div class="input-field mb-3">
                                <input type="text" class="input" id="email" required="" autocomplete="off">
                                <label for="email">Email:</label> 
                            </div> 
                            <div class="input-field">
                                <input type="password" class="input" id="pass" required="">
                                <label for="pass">Contraseña:</label>
                                <div class="container w-75 d-flex justify-content-start row ">
                                    <p class="row mb-0 text-left">*Debe tener 8 caracteres</p>
                                    <p class="row mb-0 text-left">*Una letra minúscula</p>
                                    <p class="row mb-0 text-left">*Una letra mayúscula</p>
                                    <p class="row mb-0 text-left">*Un número</p>
                                </div>
                            </div> 
                            <div class="input-field mb-3">
                                <input type="text" class="input" id="email" required="" autocomplete="off">
                                <label for="email">Confirmar contraseña:</label> 
                            </div> 
                            <div class="form-field">
                                
                                <input type="submit" class="submit-btn" value="Registrarse">
                            </div> 
                            <div class="form-field">
                            <span>¿Ya tienes cuenta?  <a href="{{ url('/login') }}">Inicia sesión aqui</a></span>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

    @include('components.footer')
</body>

</html>
