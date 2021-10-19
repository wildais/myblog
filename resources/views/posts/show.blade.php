@extends('../layouts/master')
@section('title',$post->slug)
@section('content')
    <div class="title m-b-md">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>
@endsection