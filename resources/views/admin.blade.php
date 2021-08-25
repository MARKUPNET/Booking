@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>予約日</th>
            <th>プラン名</th>
            <th>人数</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($bookingPosts as $bookingPost)
            <tr>
                <td>{{ $bookingPost['id'] }}</td>
                <td>{{ $bookingPost['date'] }}</td>
                <td>{{ $bookingPost['plan'] }}</td>
                <td>{{ $bookingPost['count'] }}</td>
                <td><a href="#">編集</a>&nbsp;&nbsp;<a href="#">削除</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
