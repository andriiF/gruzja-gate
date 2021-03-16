@extends('layouts.app')
@section('content')
<section class="live-section">
    <div class="left-kolo"></div>
    <div class="little-kolo"></div>
    <div class="right-kolo"></div>
    <div class="middle-kolo"></div>
    <div class="bottom-kolo"></div>
    <div class="piramida"></div>
    <div class="rainbow-line"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="video-container">
                    @if ($stream_backup==0)
                    <div style="padding:90vh 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/524294460" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
                    @else
                    <div style="padding:90vh 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/524294460" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
                    @endif
                </div>
            </div>  
        </div>
</section>
@endsection
