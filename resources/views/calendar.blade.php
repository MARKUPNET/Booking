@extends('layouts.front')
@section('content')
<div class="container">

    <div class="bookingForm p-5">
        <div class="mb-3 row justify-content-center">
            <a href="/calendar/?ym={{ $prev }}">&lt;</a>
            <span class="month">{{ $month }}</span>
            <a href="/calendar/?ym={{ $next }}">&gt;</a>
        </div>
        <div class="calendar">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="day-sun">日</th>
                        <th class="day-mon">月</th>
                        <th class="day-tue">火</th>
                        <th class="day-wed">水</th>
                        <th class="day-thu">木</th>
                        <th class="day-fri">金</th>
                        <th class="day-sat">土</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($weeks as $week)
                    {!! $week !!}
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <a href="/" class="btn btn-primary">トップページに戻る</a>
        </div>
    </div>

</div>
@endsection
