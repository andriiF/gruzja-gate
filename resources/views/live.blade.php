@extends('layouts.app')
@section('content')
<section class="live-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-8">
                <div class="video-container">
                    <iframe src="https://vimeo.com/event/275150/embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="chat-container">
                    <iframe src="https://vimeo.com/event/275150/chat/" style="width: 100%; height: 100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>  
    </div>
</section>
@endsection
