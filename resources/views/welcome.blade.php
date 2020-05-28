@extends('layouts.app')

@section('content')
<body>
    <img class="img-fluid" src="{{ asset('img/header.png') }}" alt="">
    <form autocomplete="off" action="{{ route('code.verify.route') }}" method="POST">
        <div class="container md-mt--3">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="text-white font-weight-bold">Enter your event code</h2>
                    <p class="text-white">If you have any technical issues,<br>please contact <a style="color:white; font-weight:bold" href="mailto:distributionforum@imagine-nation.pl">distributionforum@imagine-nation.pl</a></p>
                    @if (isset($error))
                    <p class="font-weight-bold text-danger">{{$error}}</p>
                    @endif
                </div> 
                <div class="form-group col-md-4 offset-md-4">
                    <input maxlength="6" type="text" class="form-control custom-input" name="code" id="code" required>
                    <button type="submit" class="btn btn-lg btn-custom-yellow mt-3">JOIN</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </form>
    <img class="img-fluid footer-banner" src="{{ asset('img/footer.png') }}" alt="">
</body>
@endsection
