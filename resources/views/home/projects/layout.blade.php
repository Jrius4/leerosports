<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.materia.min.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('/vendor/plugins/fontawesome-free/css/all.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/custom-icons.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.blue.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('/css/custom.css')}}">
<link rel="shortcut icon" href="{{asset('/img/logos/ndebi-tech-favi-blue.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('/vendor/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
<link rel="stylesheet" href="{{asset('/vendor/plugins/bootstrap-slider/css/bootstrap-slider.min.css')}}">
{{-- <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{asset('/assets/webfonts/maven-pro/style.css')}}">
    <title>LEEROSPORTS</title>
</head>
<body class="">


        @include('home.projects.navbar')

        @include('home.modals.modal')

           <div>
                @yield('content')
           </div>




    @include('layouts.home.footer')


    <!-- JavaScript files-->
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
    <script src="{{asset('/assets/js/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/assets/js/front.js')}}"></script>
    <script src="{{asset('/vendor/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('/vendor/plugins/bootstrap-slider/bootstrap-slider.min.js')}}"></script>
    <script>
            $(function () {
              /* BOOTSTRAP SLIDER */
              $('.slider').bootstrapSlider()

              /* ION SLIDER */
              $('#budget').ionRangeSlider({
                min     : 0,
                max     : 15000,
                from    : 6500,
                to      : 13500,
                type    : 'double',
                step    : 0.1,
                prefix  : '$',
                prettify: true,
                hasGrid : true
              }).replace(/;/g, '-between-');

              $('#range_2').ionRangeSlider()

              $('#range_5').ionRangeSlider({
                min     : 0,
                max     : 10,
                type    : 'single',
                step    : 0.1,
                postfix : ' mm',
                prettify: false,
                hasGrid : true
              })
              $('#range_6').ionRangeSlider({
                min     : -50,
                max     : 50,
                from    : 0,
                type    : 'single',
                step    : 1,
                postfix : '°',
                prettify: false,
                hasGrid : true
              })

              $('#range_4').ionRangeSlider({
                type      : 'single',
                step      : 100,
                postfix   : ' light years',
                from      : 55000,
                hideMinMax: true,
                hideFromTo: false
              })
              $('#range_3').ionRangeSlider({
                type    : 'double',
                postfix : ' miles',
                step    : 10000,
                from    : 25000000,
                to      : 35000000,
                onChange: function (obj) {
                  var t = ''
                  for (var prop in obj) {
                    t += prop + ': ' + obj[prop] + '\r\n'
                  }
                  $('#result').html(t)
                },
                onLoad  : function (obj) {
                  //
                }
              })
            })
          </script>


</body>
</html>
