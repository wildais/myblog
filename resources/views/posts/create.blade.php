@extends('../layouts/master')

@section('content')
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Post</div>
                    <div class="card-body">
                        <form action="store" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control is-invalid">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label><br>
                                <textarea name="body" id="body" style="resize:none;width:450px;height:100px;" class="form-control is-invalid"></textarea>
                                @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
@endsection