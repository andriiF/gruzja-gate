@extends('layouts.app')

@section('content')
    <img class="img-fluid" src="{{ asset('img/header.png') }}" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="dancer" src="{{asset('img/dancer.svg')}}" alt="">
                <iframe src="https://vimeo.com/event/75305/embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
            </div>
            <div class="col-md-4">
                <iframe src="https://vimeo.com/event/75305/chat/" width="400" height="600" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <img class="img-fluid" src="{{ asset('img/footer.png') }}" alt="">
@endsection



