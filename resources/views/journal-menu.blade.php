@extends('materialize.imports')

<head>
    <style>
        .card.horizontal {
            height: 200px;
        }
        .card.horizontal .card-content{
            overflow: hidden;
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
                        <div class="card horizontal {{$page['color']}}">
                            {{-- <div class="card-image">
                          <img src="https://lorempixel.com/100/190/nature/6">
                        </div> --}}
                            <div class="card-stacked">
                                <span class="card-title">{{ $page->title }}</span>
                                <div class="card-content">
                                    <p>{{ $page->body }}</p>
                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        {{ $page->cathegory }}
                                    </div>
                                    <span>{{ App\Http\Controllers\Controller::createDate($page->created_at) }}</span>
                                    <a class="btn-floating right waves-effect waves-light" href="{{route('notes.find', $page['id'])}}">
                                        <i class="material-icons right">create</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="fixed-action-btn">
                <a class="btn-floating waves-effect waves-light right btn-large orange" href="{{ route('notes.add') }}"><i
                    class="material-icons">add</i></a>
            </div>
        </div>
    @endsection
</body>
