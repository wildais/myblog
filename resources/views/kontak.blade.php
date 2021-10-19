@extends('layouts/master')
@section('title','Kontak')
@section('content')
                <div class="title m-b-md">
                    <h1>Kontak</h1>
                </div>
                <h2> Nama saya <?= $name.' ' ?>{{ $name }} {!! $name !!} </h2>
                <p> {!! nl2br($text) !!}
@endsection