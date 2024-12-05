@extends('layouts.app')

@section('content') 
    <div class="container">
        <div class="row">
            @foreach($files as $file)
                <div class="col-4">
                    <div class="card">
                        <img src="{{asset($file->url)}}" alt="" class="img-fluid">

                        <div class="card-footer">
                            <!--
                                <a href="{{route('admin.files.edit', $file->id)}}" class="btn btn-primary">Edit</a>
                            -->
                            <form action="{{route('admin.files.destroy', $file->id)}}" class="d-inline delete-form" method="POST">

                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-12">
                {{$files->links()}}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('delete') == 'ok')
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
            });
        </script>
    @endif

    <script>

        $('.delete-form').submit(function(e){
            e.preventDefault();
        
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            }); 

        })
    </script>
@endsection