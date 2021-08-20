@extends('layouts.front')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <a href="./?ym={{ $prev }}">&lt;</a>
        <span class="month">{{ $month }}</span>
        <a href="./?ym={{ $next }}">&gt;</a>
    </div>

    <div class="calendar">
        <table class="table table-bordered">
            <tr>
                <th class="day-sun">日</th>
                <th class="day-mon">月</th>
                <th class="day-tue">火</th>
                <th class="day-wed">水</th>
                <th class="day-thu">木</th>
                <th class="day-fri">金</th>
                <th class="day-sat">土</th>
            </tr>
            @foreach ($weeks as $week)
                {!! $week !!}
            @endforeach
        </table>
    </div>

</div>
@endsection
