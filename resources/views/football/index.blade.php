@extends('layouts.footballapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection
    @section('content')
    <table>
    <tr><th>チーム名</th><th>備考</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->football_teams_name}}</td>
            <td>{{$item->football_teams_memo}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
