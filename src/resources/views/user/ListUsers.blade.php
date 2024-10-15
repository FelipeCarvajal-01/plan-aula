@extends('layout.layout')

@section('title', 'User Management')

@section('content')

<!-- Breadcumb Header -->
<div style="margin-bottom: 20px">
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="fas fa-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Inicio</a>
        </li>

        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Gestionar perfil de usuario</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Informacion perfil de usuario</a>
        </li>
    </ul>
</div>
<!-- End Breadcumb Header -->

<div class="card">
    <div class="card-body">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulario de Usuario</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }

                .container {
                    width: 70%;
                    margin: 0 auto;
                    padding: 20px;
                    border: 1px solid white;
                    background-color: white;
                }

                h2 {
                    text-align: center;
                }

                .form-group {
                    margin-bottom: 15px;
                }

                .form-group label {
                    display: block;
                    font-weight: bold;
                }

                .form-group input,
                .form-group select {
                    width: 100%;
                    padding: 8px;
                    margin-top: 5px;
                    box-sizing: border-box;
                }

                .form-actions {
                    text-align: right;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <h2>Información del Usuario</h2>
                <div class="form-group">
                    <label for="tipo-usuario">Tipo de Usuario:</label>
                    <input type="text" class="form-control" id="tipo-usaurio" value="Docente" disabled>
                </div>
                <div class="form-group">
                    <label for="tipo-usuario-web">Facultad</label>
                    <input type="text" class="form-control" id="facultad" value="Ingenieria" disabled>
                </div>
                <div class="form-group">
                    <label for="docente">Nombre del Docente</label>
                    <input type="text" id="empleado" value="GUTIERREZ GUERRERO GABRIEL" disabled>
                </div>
                <div class="form-group">
                    <label for="programa">Programa:</label>
                    <input type="text" id="licencia" value="GabrielGG" disabled>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" value="GabrielGG" disabled>
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" value="usuario@dominio.com" disabled>
                </div>
            </div>
        </body>
    </div>
</div>
@endsection