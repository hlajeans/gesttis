<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial--scale=1.0">
        <title>@yield('title') - Pagos App</title>
        <link rel="stylesheet"
href="https://cdnje.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script crs="https://kit.fontawesome.com/a23a6feb03.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class="bg-gray-100 text-gray-800">
   <nav class="h-16 flex justify-end py-4 px-16">
    <a href="{{ route('pagos.index')}}"  class="border border-blue-500
   rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">
   Pagos</a>
   <a href="{{route('pagos.create')}}" class="text-black rounded px-4 pt-1 h-10 bg-blue-500
   font-semibold mx-2 hover:bg-blue">Create</a>
   </nav>
   
    <main class="p-16 flex justify-center">
        @yield ('content')
    </main>
</body>
</html>