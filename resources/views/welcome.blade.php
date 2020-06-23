@extends('layouts.app')
@section('content')
<section class="section-form">

    <form autocomplete="off" action="{{ route('code.verify.route') }}" method="POST">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="text-white font-weight-bold">@lang('messages.enter_your_code')</h2>
                    <p class="text-white">@lang('messages.technical_issues')<br> @lang('messages.contact')<a style="color:white; font-weight:bold" href="mailto:k.derecka@imagine-nation.pl"> k.derecka@imagine-nation.pl</a></p>
                    @if (isset($error))
                    <p class="font-weight-bold text-danger">{{$error}}</p>
                    @endif
                </div> 
                <div class="form-group col-md-4 offset-md-4">
                    <input  type="text" class="form-control custom-input" name="code" id="code" required>
                    <button type="submit" class="btn btn-lg btn-custom mt-3">@lang('messages.join')</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
