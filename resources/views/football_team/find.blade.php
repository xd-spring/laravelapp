@extends('layouts.footballapp')

@section('title', 'Football_team.find')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form action="/football_team/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
    </form>
    @if (isset($item))
    <table>
    <tr><th>Data</th></tr>
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    </table>
    @endif
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
