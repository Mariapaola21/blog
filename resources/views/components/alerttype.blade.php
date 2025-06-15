{{-- llama a los props para recibir los atributos y que los almacene en una variable --}}
{{-- si no se loe especifica el type ponle un valor por defecto --}}
@props(['type'=> 'info'])

@php

    switch ($type) {        
        case 'info':

            $class= ' text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            
            break;

        case 'danger':
           
            $class= 'text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-blue-400' ;
           
            break;

        case'success':
        
            $class='text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-blue-400';
           
             break;

        case'warning':
            $class= 'text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-blue-400' ;
            break;

         case'dark':
             $class= ' text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-blue-400' ;
            break;

        default:
           $class= ' text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';

            break;
    }
@endphp

<div class="p-4 mb-4 text-sm  rounded-lg {{$class}}" role="alert">
  <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
</div>


{{-- para fucionar las clases que se encuentran en los atributos y los class--}}
{{-- <div {{$attributes->merge(['class'=>'p-4 mb-4 text-sm  rounded-lg'. $class])}} role="alert">
  <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
</div> --}}



{{-- ESTE ES UN COMPONENTE ANONIMO NO DEPENDE DE OTRO --}}