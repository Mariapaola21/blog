{{-- es como importarlo --}}
 @extends('layouts.app')

 @section('title')
     LARAVEL CON PLANTILLAS
 @endsection

 {{-- si es de una sola linea el texto como el titulo anterior tambien se puede llamar --}}
{{-- @section('title','LARAVEL CON PLANTILLAS 1') --}}

<p>HOLAAAAAAAAAAAA</p>


{{-- se utiliza push para llamar a  stack --}}
@push('css')
    <style>
        body{
            color: red;
        }
    </style>   
@endpush
{{-- se utiliza push para llamar a  stack --}}
@push('css')
    <style>
        body{
            background-color: burlywood;
        }
    </style>   
@endpush



 @section('content')

  <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <span class="font-medium">PLANTILLAS</span> mi primera plantilla

  