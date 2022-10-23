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
  <h1 class="text-sm text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
      Welcome @if(Session::get('user'))
   {{Session::get('user')}}
   <br><br>
   <a href="{{route('passreset')}}" class="py-2 px-2 font-medium text-gray-500 rounded-full bg-sky-500 text-white">Password Reset</a>
   <a href="{{route('logout')}}" class="py-2 px-2 font-medium text-gray-500 rounded-full bg-sky-500 text-white">Log Out</a>
    @endif
    
  </h1>
  
</div>
   
   <div class="container mx-auto px-4">
   <section class="pt-8 px-4">
                  <div class="flex flex-wrap -mx-4">
                    <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720?burger" alt=""></div>
                    <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720?pizza" alt=""></div>
                    <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720?donut" alt=""></div>
                    <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720?sandwich" alt=""></div>
                    <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720?chicken-fry" alt=""></div>
                    <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720?pastry" alt=""></div>
                  </div>
                </section>
              
                <form action="{{route('menu')}}" method="post">
                {{csrf_field()}}

              <div class="relative flex justify-center item-center inline-block w-auto text-gray-700 overflow-hidden">
                  <select name="item" class="w-auto h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                    <option>Tailwind Burger</option>
                    <option>Laravel Pizza</option>
                    <option>Apache Sandwich</option>
                  </select>
                </div>
                <div class="flex justify-center">
                    <button class="w-auto px-6 py-2 mt-4 text-white bg-sky-500 rounded-lg hover:bg-sky-600">Order</button>
                </div>
                </form><br>
                @isset($success)
                <div class="relative flex justify-center item-center inline-block w-auto text-gray-700 overflow-hidden">
                   {{$success}}
                </div>
                @endisset
              </div>
</div>
</body>
</html>


