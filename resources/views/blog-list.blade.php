@extends('main')

@section('page-title')
{{ $page_title }}
<a href="/blog/add" class='btn btn-primary'>New</a>
@endsection

@section('content')
@foreach ($blog_list as $blog)
<div class="card text-left">
    <div class="card-body">
        <h5 class="card-title">{{ $blog['title'] }}</h5>
        <p class="card-text">{{ $blog['snippet'] }}</p>
        <a href="/blog/{{ $blog['id'] }}" class="btn btn-primary">Edit</a>
        <a href="/blog/{{ $blog['id'] }}/delete" class="btn btn-danger">Delete</a>
    </div>
</div>
@endforeach
@endsection