@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-12 col-lg-6 right-container">
            <img src="img/left.png" alt="" class="img-fluid left"/>
        </div>
        <div class="col-12 col-lg-6 left-container">
            <img src="img/kolo_right.png" alt="" class="img-fluid right"/>
        </div>
    </div>
    <div class="text-center zegar">
        <p>Konferencja startuje już za</p>
        <div class="flipTimer">
            <div class="days"></div>
            <div class="hours"></div>
            <div class="minutes"></div>
        </div>
    </div>
</div>
<div class="footer">
    <img src="img/footer.jpg" alt="" class="img-fluid"/>
</div>
@endsection