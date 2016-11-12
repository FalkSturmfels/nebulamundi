<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Referencing mixed final css -->
    {{ Html::style('css/final.css') }}

    <title>Title</title>
</head>
<body>

@include('partials.mainnav')

    @yield('content')


    <!-- Referencing mixed final js -->
    {{Html::script('js/final.js')}}
</body>
</html>