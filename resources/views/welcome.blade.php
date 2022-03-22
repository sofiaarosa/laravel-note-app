@extends('materialize.imports')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto de Testes - Laravel</title>
</head>

<body>
    @section('body')
        @include('materialize.layout.navbar')
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Laravel + Materialize</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Studying Materialize by applying it to this Laravel project</h5>
                    <p class="col s12">The main goal is to put Laravel Views and Materialize toghether, making the
                        project's frontend easier</p>
                </div>
                <div class="row center">
                    <a href="http://materializecss.com/getting-started.html" id="download-button"
                        class="btn-large waves-effect waves-light orange">Get Started</a>
                </div>
                <br><br>

            </div>
        </div>

    @endsection
</body>

</html>
