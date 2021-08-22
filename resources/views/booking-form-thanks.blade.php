@extends('layouts.front')
@section('content')
<div class="container">

    <div class="bookingForm p-5">
        <h1 class="text-center">正常に予約しました。</h1>
        <p class="text-center"><a href="{{ route('home') }}" class="btn btn-primary">トップに戻る</a></p>
    </div>

</div>
@endsection
