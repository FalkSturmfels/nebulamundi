<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Referencing mixed final css -->
    {{ Html::style('css/final.css') }}

    <!-- Referencing mixed final js -->
    {{Html::script('js/final.js')}}

    <title>Nebula Mundi</title>
</head>
<body>

@include('partials.mainnav')

<div class="container-fluid">
    @yield('content')
</div>

@include('partials.bootjquery')

</body>
</html>