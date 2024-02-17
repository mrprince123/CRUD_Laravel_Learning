<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbfa8b511e.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="flex p-4 flex-row justify-between bg-blue-200">
        <a href="{{url('/')}}"><h1 class="text-xl">Blog<span class="text-blue-400 font-bold">Pro</span></h1></a>
        <div>
            <a class="m-2 font-medium" href="{{url('/')}}">Home</a>
            <a class="m-2 font-medium" href="{{url('/about')}}">About</a>
            <a class="m-2 font-medium" href="{{url('/contact')}}">Contact</a>
            <a class="m-2 font-medium" href="{{url('/learning-view')}}">Learning</a>
            <a class="m-2 font-medium" href="{{url('/learning')}}"><button class="bg-blue-400 font-medium p-2">Add</button></a>
        </div>
    </div>