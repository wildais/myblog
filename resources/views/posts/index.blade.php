@extends('../layouts/master')
@section('title','Artikel')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h3>All Posts</h3>
                <hr>
            </div>
            <div>
                <a href="/posts/create" class="btn btn-primary">New Post</a>
            </div>
        </div>
        <div class="row">
            @include('posts/alert')
        </div>
        <div class="row">
            <!-- @foreach($posts as $p)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <b>{{ $p->title }}</b>
                        </div>
                        <div class="card-body">
                            <div>{{ Str::limit($p->body, 100, '.....') }}</div>
                            <a href="/posts/{{ $p->slug }}">Read more</a>
                        </div>
                        <div class="card-footer">
                            {{-- Published on {{ $p->created_at->format('d F Y') }} --}}
                            Published on {{ $p->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach -->
            
            @forelse ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <div>{{ Str::limit($post->body, 100, '.....') }}</div>
                            <a href="/posts/{{ $post->slug }}">Read more</a>
                        </div>
                        <div class="card-footer">
                            {{-- Published on {{ $post->created_at->format('d F Y') }} --}}
                            Published on {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-6">
                    <div class="alert alert-info">
                        There's no posts here.
                    </div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection