@extends('layouts.header')

@section('content')
<div class="container">
  <div class="owl-carousel owl-theme">
    @for ($i = 1; $i <= 12; $i++)
      <div class="item">
        <img src="images/{{$i}}.jpg" alt="">
      </div>
    @endfor
  </div>
</div>
@endsection
