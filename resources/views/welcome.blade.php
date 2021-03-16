@extends('layouts.app')
@section('content')
<div class="row ">
    <div class="col-12 col-lg-6 right-container">
        <div class="padding-image">

            <img src="img/left.png" alt="" class="img-fluid left"/>
        </div>
    </div>
    <div class="col-12 col-lg-6 left-container">
        <div class="padding-image">
            <img src="img/kolo_right.png" alt="" class="img-fluid right"/>
        </div>
    </div>
</div>
@if ($is_code)
<div class="text-center zegar input">
    <div class="col-12">
        <div class="form-wrapper">
            <form class="code-form" method="POST" action="{{route('code.verify.route')}}">
                @method('POST')
                @csrf
                <label>
                    Wprowadź kod
                </label>
                <div class="input-wrapper">
                    <input type="text" name="code" />
                </div>
                <button type="submit">Zatwierdź</button>
                <p>
                    W przypadku problemów technicznych <br/>
                    prosimy o kontakt z <br/>
                    <a href="mailto:thebrandcasters@imagine-nation.pl">
                        thebrandcasters@imagine-nation.pl
                    </a>
                </p>
                @if (isset($error))
                <p class="font-weight-bold text-danger">{{$error}}</p>
                @endif
            </form>
        </div>
    </div>
</div>
@else
<div class="text-center zegar">
    <p>Konferencja startuje już za</p>
    <div class="flipTimer">
        <div class="days"></div>
        <div class="hours"></div>
        <div class="minutes"></div>
    </div>
</div>
@endif
</div>
<div class="footer">
    <img src="img/footer.jpg" alt="" class="img-fluid"/>
</div>
@endsection