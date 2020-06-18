@extends('layouts.app')
@section('content')
<section class="live-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <iframe src="{{env('VIDEO','https://vimeo.com/event/75305/embed')}}" frameborder="0" allow="autoplay; fullscreen" id="video-iframe" allowfullscreen style="top:0;left:0;width:100%;height:100%;"></iframe>
            </div>
            <div class="col-md-4">
                <iframe src="{{env('CHAT','https://vimeo.com/event/75305/chat/')}}" id="chat-iframe" style="top:0;left:0;width:100%;height:600px;" frameborder="0"></iframe>
            </div>
        </div>  
    </div>
</section>
@endsection
