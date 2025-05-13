<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class="flex justify-between bg-sky-500 p-4  top-0 left-0">
    <p class="font-bold text-white">Genuine School Management</p>
   </div>
    <div class="">
        @yield('content')
    </div>
</body>
</html>