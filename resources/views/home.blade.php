@extends('layouts/master')
@section('title','Home')
@section('head')
<style>
    body{
        background-color:yellow;
    }
</style>
@endsection
@section('content')
    <div class="title m-b-md">
        <?='Nama saya adalah '. htmlspecialchars($nama) ?>
        <br>
        {{ ('Nama saya adalah '.$nama) }}
        <h1>Ini adalah Halaman Home</h1>
        <h3>{{ $nama }}<h3>
    </div>
@endsection