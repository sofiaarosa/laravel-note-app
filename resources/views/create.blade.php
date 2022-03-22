@extends('materialize.imports')

<body>
    @include('materialize.layout.navbar')
    <div class="container">
        <form class="col s12" action="{{route('journal.add.save')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">create</i>
                    <input id="icon_prefix" type="text" name="title">
                    <label for="icon_prefix">Title</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">textsms</i>
                    <input type="text" id="autocomplete-input" class="autocomplete" name="notes">
                    <label for="autocomplete-input">Note</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="body"></textarea>
                    <label for="textarea1">Body</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</body>
