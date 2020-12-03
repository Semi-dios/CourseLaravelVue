<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

          <!-- Styles -->
          <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
        <div  class="container-fluid"  id="app">



                <div class="row">
                  <div class="col-sm-12">

                    <router-view></router-view>
                  </div>
                </div>

          </div>




          <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>
