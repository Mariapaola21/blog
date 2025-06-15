{{-- CREA PLANTILLAS --}}
{{-- primera forma de crear una plantilla --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- si quieres que tu titulo sea variable --}}
    <title>@yield('title','Codigo de plantilla')</title>
    {{-- tambien puede ir un valor por defecto se le pone despues del title --}}
     
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>


{{-- se usa para generar varios contenidos 
lo que le vas poniendo va sumando  --}}
@stack('css')


<body>
   <header></header>
   
   {{-- Aqui se coloca el yield enves del slot --}}
  @yield('content')
  {{-- ve al posts index --}}
   <footer></footer>
</body>
</html>