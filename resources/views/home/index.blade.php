@extends('home.home_master')
@section('home')

<!-- start hero -->
@include('home.homelayout.slider')
<!-- end hero -->

<!-- start history -->
@include('home.homelayout.history')
<!-- end history -->

<!-- start VGMO -->
@include('home.homelayout.vgmo')
<!-- end VGMO -->

  @endsection
