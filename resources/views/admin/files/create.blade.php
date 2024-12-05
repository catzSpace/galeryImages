@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content') 
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>upload your images!</h1>
                <form action="{{route('admin.files.store')}}" 
                    method="POST" enctype="multipart/form-data" 
                    class="dropzone" id="my-awesome-dropzone"
                    style=" background-color: #000; border: 1px solid white; border-radius: 2vh;"
                >
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        Dropzone.options.myAwesomeDropzone = {
            headers:{
                "X-CSRF-TOKEN" : "{{csrf_token()}}"
            },

            dictDefaultMessage: "drag an image to upload (MAX FIVE IMAGES)",
            acceptedFiles: "image/*",
            maxFilesize: 5, // mb
            maxFiles: 5, // maximo 5 imagenes
        };
    </script>
@endsection