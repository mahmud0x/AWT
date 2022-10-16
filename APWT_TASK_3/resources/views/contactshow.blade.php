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

    <div class="pl-6 self-center pr-6 pt-6">
        <h1 class="text-base text-3xl font-light leading-relaxed mt-0 mb-4 text-pink-800"><b>Contact Show</b><br></h1>
        <h2 class="text-base text-3xl font-light leading-relaxed mt-0 mb-4 text-pink-800"><i>Email-></i>{{$email}}<br></h1>
        <h3 class="text-base text-3xl font-light leading-relaxed mt-0 mb-4 text-pink-800"><i>Subject-></i>{{$subject}}<br></h1>
        <h4 class="text-base text-3xl font-light leading-relaxed mt-0 mb-4 text-pink-800"><i>Body-></i>{{$body}}<br></h1>


    </div>
</body>
</html>