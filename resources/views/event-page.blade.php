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

    .color {
        display: block;
        width: 20px;
        height: 20px;
        background-color: black;
    }

    .color.selected {
        border: 2px solid;
    }

</style>

<body>
    @include('materialize.layout.navbar')
    <div class="flex-center full-height">
        <div class="container">
            <form class="col s12" action="{{ route('notes.update', $data['id']) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="row">
                        <div class="col s1 offset-s4">
                            <i class="material-icons">color_lens</i>
                            <input type="hidden" name="color" id="color-input" value="yellow lighten-1">
                            {{-- <label>Color</label> --}}
                        </div>
                        <div class="col s1">
                            <div class="color circle selected yellow lighten-1" id="yellow"></div>
                        </div>
                        <div class="col s1">
                            <div class="color circle orange lighten-1" id="orange"></div>
                        </div>
                        <div class="col s1">
                            <div class="color circle pink lighten-1" id="pink"></div>
                        </div>
                        <div class="col s1">
                            <div class="color circle blue lighten-1" id="blue"></div>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">create</i>
                        <input id="icon_prefix" type="text" name="title" value="{{ $data['title'] }}">
                        <label for="icon_prefix">Title</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" class="autocomplete" name="cathegory"
                            value="{{ $data['cathegory'] }}">
                        <label for="autocomplete-input">Cathegory</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="body" data-length="255" maxlength="255">
                            {{ $data['body'] }}
                        </textarea>
                        <label for="textarea1">Body</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Update
                        <i class="material-icons right">create</i>
                    </button>
                    <a class="btn waves-effect waves-light red"
                        onclick="window.location='{{ route('notes.delete', $data['id']) }}'">
                        Delete
                        <i class="material-icons right">delete</i>
                    </a>
                </div>

            </form>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('textarea#textarea1').characterCounter();
        });

        //color selector
        let colorButtons = document.querySelectorAll(".color");
        colorButtons.forEach(element => {
            element.addEventListener('click', ()=>{
                selectColor(element.id);
            });
        });

        function selectColor(elementID){
            let selectedColor = document.getElementById(elementID);
            const colorInput = document.getElementById("color-input");
            unselectColors(elementID);
            selectedColor.classList.add("selected");
            colorInput.value = elementID + ' ligthen-1';
            console.log(colorInput.value);
        }

        function unselectColors(){
            let element = document.querySelector(".color.selected");
            element.classList.remove("selected")
        }
    </script>
</body>
