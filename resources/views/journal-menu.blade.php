@extends('materialize.imports')
<head>
    <style>
        .card.horizontal{
            height: 200px;
        }
    </style>
</head>
<body>
    @section('body')
        @include('materialize.layout.navbar')

        <script src="{{ asset('js/init.js') }}"></script>
        <div class="container">
            <div class="row">
                @foreach ($data as $page)
                <div class="col s12 m6">
                    <div class="card horizontal">
                        {{-- <div class="card-image">
                          <img src="https://lorempixel.com/100/190/nature/6">
                        </div> --}}
                        <div class="card-stacked">
                            <span class="card-title">{{$page->title}}</span>
                          <div class="card-content">
                            <p>{{$page->body}}</p>
                          </div>
                          <div class="card-action">
                            <div class="chip">
                                {{$page->notes}}
                              </div>
                            <span>{{App\Http\Controllers\Controller::createDate($page->created_at)}}</span>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
            <a class="btn-floating waves-effect waves-light right btn-large red" href="{{route('journal.add')}}"><i class="material-icons">add</i></a>
        </div>
    @endsection
</body>
