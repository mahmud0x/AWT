<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
  
    @include('inc.topbar')

    <div style="background-image: url('https://images.thedailystar.net/sites/default/files/images/2021/12/12/metro-rail.jpg')" class="bg-no-repeat">
<div class="flex items-center justify-center pb-36 md:justify-end md:pr-8 min-h-screen">
    <div class="rounded-md px-8 py-6 mx-4 mt-4 text-left bg-white opacity-90 shadow-lg shadow-indigo-500/50 md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Register</h3>
        <form action="{{route('register')}}" method="post">

        {{csrf_field()}}
            <div class="mt-4">
                <div>
                    <label class="block" for="Name">Name<label>
                            <input type="text" name="name" placeholder="Your Name"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600">
                </div>
                @error('name')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" name="email" placeholder="john@doe.com"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600">
                @error('email')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror                
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600">
                @error('password')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror                
                </div>
                <div class="mt-4">
                    <label class="block" for="phone">Phone<label>
                            <input type="text" name="phone" placeholder="01888888888"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600">
                 @error('phone')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror     
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Register</button>
                </div>
                <div class="mt-6 text-grey-dark">
                   Already have an account?
                    <a class="text-blue-600 hover:underline" href="{{route('login')}}">
                        Log in
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>