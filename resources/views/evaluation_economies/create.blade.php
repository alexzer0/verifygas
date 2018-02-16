@extends('layouts.application') 
@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>

<h3>IMAGE UPLOAD</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif


{!! Form::open(array('route' => 'evaluation_economies.store','method'=>'POST', 'files'=>true)) !!}
{!! Form::file('images[]', array('multiple' => true)) !!}
{{!! Form::submit('Click Me!') !!}}
    {!! Form::close() !!}

<script>
    // "myAwesomeDropzone" es el ID de nuestro formulario usando la notación camelCase
    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        dictDefaultMessage: "Arrastre Aquí sus archivos",
        success: function (file, response) {
            console.log(response);
        }
    };
</script>
@endsection