@extends('main')

@section('page-title')
{{ $page_title }}
@endsection

@section('content')
<form action="/blog-update" method="post">
    @csrf
    <input type="hidden" name='id' value="{{ $blog->id }}">

    <div class="row">
        <div class="col form-group">
            <label>Title</label>
            <input type="text" class="form-control" name='title' value="{{ $blog->title }}">
        </div>
    </div>

    <div class="row">
        <div class="col form-group">
            <label>snippet</label>
            <input type="text" class="form-control" name='snippet' value="{{ $blog->snippet }}">
        </div>
    </div>

    <div class="row">
        <div class="col form-group">
            <label>Posted on</label>
            <input type="text" class="form-control" name='posted_on' value="{{ $blog->posted_on }}">
        </div>
    </div>


    <div class="row">
        <div class="col form-group">
            <label>Link</label>
            <input type="text" class="form-control" name='link' value="{{ $blog->link }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </div>

</form>
@endsection