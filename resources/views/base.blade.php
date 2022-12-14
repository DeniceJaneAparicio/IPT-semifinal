<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(231, 210, 221); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">


  <div class="head">
    <div class="headA">
        <a class=" text-white shadow-lg" href="{{url('/')}}" style="padding:20px; font-size:40px;">Visitor Log</a>
    </div>


  </div>
  <style>
    .head{
        display: grid;
        place-content: center;
    }
    .headA a{
        margin-top: 10px;
        border-radius: 10px;
        width: 100vh;
        text-align: center;
        background-color: rgb(110, 93, 100);
        text-decoration: none;
    }
  </style>

<div class="container">
    @yield('content')
</div>

</body>



</html>
