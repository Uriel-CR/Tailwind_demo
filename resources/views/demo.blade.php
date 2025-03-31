<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Demo</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-gradient-to-r from-blue-800 to-cyan-600 text-white">
    <div class="container mx-auto px-6 py-4">
      <!-- Contenido del header -->
    </div>
  </header>

  <!-- Sección Hero -->
  <section class="py-20">
    <div class="container mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-6xl font-bold mb-6">Bienvenido</h1>
      <p class="text-xl md:text-2xl mb-8">Transformando ideas en realidad digital</p>
      <button class="bg-cyan-500 hover:bg-cyan-600 text-white px-8 py-3 rounded-lg text-lg">Ver más</button>
    </div>
  </section>
</body>
</html>
