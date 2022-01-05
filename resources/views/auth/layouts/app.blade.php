<!DOCTYPE html>
<html lang="en">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial--scale=1.0">
    <title>@yield('title') - Laravel App</title>
    <link rel="stylesheet" href="https://cdnje.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <style>
        .login-box {
            width: 60%;
            margin: auto;
            padding: auto;
            justify-content: center;
            justify-items: center;
        }

        .register-box {
            width: 70%;
            margin: auto;
            padding: auto;
            justify-content: center;
            justify-items: center;
        }
    </style>
</head>


@include('header')
<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">

    </nav>
    @yield('content')
</body>

</html>
