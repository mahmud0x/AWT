<!doctype html>
<html>
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

   </head>

   @include('inc.topbar')
   <body class="overflow-y">
   <div class="flex justify-center pt-10">
  <h1 class="text-sm font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
      Welcome @if(Session::get('user'))
   {{Session::get('user')}}
   <a href="{{route('ordermenu')}}" class="py-2 px-2 font-medium text-gray-500 rounded-full bg-sky-500 text-white">Place Order</a>
   <a href="{{route('logout')}}" class="py-2 px-2 font-medium text-gray-500 rounded-full bg-sky-500 text-white">Log Out</a><br><br>
    @endif
  </h1>
</div>

   <div class="container mx-auto px-4">
   <h1 class="text-sm text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Update your password<h1><br>
                <form action="{{route('passupdate')}}" method="post">
                {{csrf_field()}}

              <div class="relative flex justify-center item-center inline-block w-auto text-gray-700 overflow-hidden">
                
              <input type="password" placeholder="Update Pass" name="pass" class="w-auto h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline">
                </div>
                <div class="flex justify-center">
                    <button class="w-auto px-2 py-2 mt-4 text-white bg-sky-500 rounded-lg hover:bg-sky-600">Update</button>
                </div>
                </form><br>
              </div>
</div>
</body>
</html>


