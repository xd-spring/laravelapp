@extends('layouts.footballapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力して下さい。</p>
    @endif
    <form action="/football/add" method="post">
    <table>
        @csrf
        @if($errors->has('football_teams_name'))
        <tr><th>ERROR</th><td>{{$errors->first('football_teams_name')}}</td></tr>
        @endif
        <tr><th>チーム名: </th><td><input type="text" name="football_teams_name"
            value="{{old('football_teams_name')}}"></td></tr>
        <tr><th>備考: </th><td><input type="text" name="football_teams_memo"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
