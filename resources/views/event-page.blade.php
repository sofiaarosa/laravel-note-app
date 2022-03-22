@extends('materialize.imports')
<style>
    .flex-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .full-height {
        height: 100%;
    }

</style>

<body>
    @include('materialize.layout.navbar')
    <div class="flex-center full-height">
        <div class="container">
            <form class="col s12" action="{{ route('journal.update', $data['id']) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">create</i>
                        <input id="icon_prefix" type="text" name="title" value="{{ $data['title'] }}">
                        <label for="icon_prefix">Title</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" class="autocomplete" name="notes"
                            value="{{ $data['notes'] }}">
                        <label for="autocomplete-input">Note</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="body">
                            {{ $data['body'] }}
                        </textarea>
                        <label for="textarea1">Body</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Update
                        <i class="material-icons right">create</i>
                    </button>
                    <a class="btn waves-effect waves-light red"
                        onclick="window.location='{{ route('journal.delete', $data['id']) }}'">
                        Delete
                        <i class="material-icons right">delete</i>
                    </a>
                </div>

            </form>

        </div>
    </div>
</body>
