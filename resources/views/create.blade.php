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

    .color{
        display: block;
        width: 20px;
        height: 20px;
        background-color: black;
    }
</style>

<body>
    @include('materialize.layout.navbar')
    <div class="flex-center full-height">
        <div class="container">
            <form class="col s12" action="{{ route('notes.add.save') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">create</i>
                        <input id="icon_prefix" type="text" name="title">
                        <label for="icon_prefix">Title</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" class="autocomplete" name="cathegory">
                        <label for="autocomplete-input">Cathegory</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="body" data-length="255" maxlength="255"></textarea>
                        <label for="textarea1">Body</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('textarea#textarea1').characterCounter();
        });
    </script>
</body>
