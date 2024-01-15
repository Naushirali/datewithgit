<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','custom login')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    @include('include.welcomeheader')
    @include('include.welcomefooter')



        @yield('content')


    <style>
        .container
        {
            padding-left:0cm;
            padding-bottom: 1.2222cm;
        }
        @media screen and (max-width: 645px)
              {
                .container
                 {
                    padding-top:2cm;

                 }
              }


        </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
