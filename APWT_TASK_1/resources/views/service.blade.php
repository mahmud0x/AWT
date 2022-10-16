@extends('layouts.app')
@section('content')


<h1 class="flex justify-start pl-24 pt-10 mb-2 text-4xl font-bold text-gray-900 dark:text-black">Our Services</h2>
<ul class="pl-24 space-y-1 list-inside text-black-500 dark:text-black-900"><br>
    @foreach($service as $n)
    <li class="flex items-center">
        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-700 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        {{$n}}
    </li>
    @endforeach
</ul>
@endsection