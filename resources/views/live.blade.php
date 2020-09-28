@extends('layouts.app')
@section('content')
<section class="live-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div style="padding:56.25% 0 0 0;position:relative; width: 1280px; height: 720px">
                    <iframe src="https://vimeo.com/event/275150/embed" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
            </div>
            <div class="col-md-3">
                <iframe src="https://vimeo.com/event/275150/chat/" width="400" height="600" frameborder="0"></iframe>
            </div>
        </div>  
    </div>
</section>
@endsection
