@extends('frontView.master')

@section('title_area')

Center for improvement in laravel

@endsection




@section('css_js')

<link href="{{ asset('frontEnd')}}/https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontEnd')}}/https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('frontEnd')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('frontEnd')}}/css/style.css">

@endsection

@section('css_js1')

 	<script type="text/javascript" src="{{ asset('frontEnd')}}/js/js.js"></script>
  	<script type="text/javascript" src="{{ asset('frontEnd')}}/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="{{ asset('frontEnd')}}/js/custom.js"></script>



@endsection

@section('printed')

 <section id="home-map">
      <img src="{{ asset('frontEnd')}}/img/seminar_details.png"></img>
    </section>


@endsection

