<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory System</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="flex md:block">
        
        @include('layouts.sidebar')

        <main class="sm:ml-64 px-5">
            @include('layouts.header')
            <div class="mt-16">
                @yield('content')
            </div>
        </main>
    </div>
  
   
   
</body>
</html>