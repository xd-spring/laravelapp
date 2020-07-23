@extends('layouts.footballapp')

@section('title','Teams_player.index')

@section('menubar')
    @parent
    プレイヤー・ページ
@endsection
    @section('content')
    <table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
