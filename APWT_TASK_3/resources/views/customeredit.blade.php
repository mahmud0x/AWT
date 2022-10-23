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

<div class="bg-zinc-200">

<div class="flex items-center justify-center min-h-screen">
    <div class="rounded-md px-8 py-4 mx-4 mt-4 text-left bg-white opacity-90 shadow-lg shadow-indigo-500/50 md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Edit</h3>
        <form action="{{route('edit',$customer->name)}}" method="post">

        {{csrf_field()}}
            <div class="mt-4">
                <div class="mt-4">
                    <label class="block" for="name">Name<label>
                            <input type="text" name="name" value="{{$customer->name}}"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600" disabled>
                @error('name')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror   
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" name="email" value="{{$customer->email}}"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600">
                @error('email')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror                
                </div>
                <label class="block" for="phone">Phone<label>
                            <input type="text" name="phone" value="{{$customer->phone}}"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600">
                @error('phone')
                <span class="text-xs text-red-400">{{$message}}</span>
                @enderror                
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>