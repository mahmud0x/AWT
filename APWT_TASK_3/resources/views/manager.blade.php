<!doctype html>
<html>
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

   </head>
   
   @include('inc.topbar')
   <body class="overflow-y-hidden">
   <div class="flex justify-center pt-10">
   <h1 class="text-sm font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
      Welcome Manager
   <a href="{{route('logout')}}" class="py-2 px-2 font-medium text-gray-500 rounded-full bg-sky-500 text-white">Log Out</a> 
   </h1>
   </div>
   <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ID
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Customer Name
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Food Item
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Contact
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach($takeorder as $dummy)
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              {{ $dummy->id }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{ $dummy->name }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              @foreach($dummy->orders as $test)
              {{$test->item}}
              @endforeach
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{ $dummy->phone }}
              </td>
            </tr>
         @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
      </body>
</html>
        

