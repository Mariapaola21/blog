{{-- coloca tu codigo para ser reutilizado con la funcion x-alert --}}
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
</div>



{{-- si quieres que un contenido sea variable ponle la etiueta {{$slot}}  --}}
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <span class="font-medium">Info alert!</span> {{$slot}}
</div>
{{-- dentro de la etiqueta x-alert escribe lo que quieras --}}



{{-- para que tu titulo sea variable y el contenido tambien utiliza {{}} --}}
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <span class="font-medium">{{ $tittle }}</span> {{$slot}}
</div>
{{-- se pasa con slot con nombre --}}



{{-- si quieres que el titulo sea opcional le pones ?? --}}
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
  <span class="font-medium">{{ $tittle ?? 'Info alert' }}</span> {{$slot}}
</div>

