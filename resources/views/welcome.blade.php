@extends('materialize.imports')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Journal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .icon-block {
            padding: 0 15px;
        }

        .icon-block .material-icons {
            font-size: inherit;
        }

    </style>
</head>

<body>
    @section('body')
        @include('materialize.layout.navbar')
        <main>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <br><br>
                    <h1 class="header center orange-text">Journal Project</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">A project to put <b>Laravel</b>, <b>Laravel Livewire</b> and
                            <b>MaterializeJS</b> together
                        </h5>
                        <p class="col s12">Journal Project is a simple CRUD made with Laravel Framework and a
                            responsive
                            frontend made with Materialize, applied in the Blade Views. Also, the journal has the Calendar
                            View,
                            made with LivewireCalendar, component created by <b>Andrés Santibáñes</b></p>
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="container">
                <div class="section">

                    <!--   Icon Section   -->
                    <div class="row">
                        <div class="col s12 m4 push-m4">
                            <div class="icon-block">
                                <h2 class="center light-blue-text"><i class="material-icons">book</i></h2>
                                <h5 class="center">Dear Diary,</h5>

                                <p class="light">This is a journal for small toughths. You can see all the data in
                                    cards, organized in a grid layout or in a Calendar View, since it is organized by date.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br>
            </div>
        </main>

        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Developer</h5>
                        <p class="grey-text text-lighten-4">Sofia Azevedo Rosa</p>
                    </div>
                    <div class="col l6 s12">
                        <h5 class="white-text">GitHub</h5>
                        <ul>
                            <li><a class="white-text" href="https://github.com/sofiaarosa">Dev's GitHub</a></li>
                            <li><a class="white-text" href="https://github.com/sofiaarosa/journal-project">Project's
                                    GitHub<a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>
    @endsection
</body>

</html>
