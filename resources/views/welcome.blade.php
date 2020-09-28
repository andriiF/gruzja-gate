@extends('layouts.app')


@section('content')
<div class="header">
    <img src="https://system.imagine-nation.pl/storage/app/media/uploaded-files/header.jpg" alt=""/>
</div>

<div class="content {{$is_code?'d-none':''}}">
    <div class="counter">
        <div>
            <span>

                Do startu wydarzenia pozostało
            </span>
        </div>
        <div>
            <div id="countDown">
                <span class="days">20 dni </span><span class="hours">22 godzin </span><span class="minutes">26 minut </span>
            </div><br/>
        </div>
        <div>
            <span>
                do zobaczenia 29 września o godzinie 10:00
            </span>
        </div>
    </div>
</div>

<section class="section-form {{$is_code?'':'d-none'}}">

    <form autocomplete="off" action="{{ route('code.verify.route') }}" method="POST">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="font-weight-bold">@lang('messages.enter_your_code')</h2>

                </div> 
                <div class="form-group col-md-4 offset-md-4">
                    <input  type="text" class="form-control custom-input" name="code" id="code" required>
                    <button type="submit" class="btn btn-lg btn-custom mt-3">@lang('messages.join')</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p class="">@lang('messages.technical_issues') <a  href="mailto:dellemc@imagine-nation.pl"> dellemc@imagine-nation.pl</a></p>
                    @if (isset($error))
                    <p class="font-weight-bold text-danger">{{$error}}</p>
                    @endif
                </div>
            </div>
        </div>
    </form>
</section>



<div class="footer">
    <img src="https://system.imagine-nation.pl/storage/app/media/uploaded-files/footer.jpg" alt=""/>
</div>
@endsection