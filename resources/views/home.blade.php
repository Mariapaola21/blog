{{-- lleva extension php y html --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    {{-- uso de tailwind --}}
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
   
   <div >
     <h1>Bienvenido a mi home</h1>
     {{-- para llamar ami componente --}}
      <x-alert>
         <x-slot name="tittle">
            Pase un titulo con slot name
        </x-slot>
        contenido de la alerta en variable
     </x-alert>

   </div>
   
</body>
</html>