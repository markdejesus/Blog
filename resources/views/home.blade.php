@extends('main')

@section('page-title')
    {{ $page_title }}
@endsection

@section('content')
<div class="card">
    @foreach ($blog_list as $blog)
    <div class="card text-left">
        <div class="card-body">
        <h5 class="card-title">{{ $blog['title'] }}</h5>
        <p class="card-text">{{ $blog['snippets'] }}</p>
        <a href="{{ $blog['link'] }}" target='_blank' class="btn btn-primary">view more</a>
        </div>
        <div class="card-footer text-muted">
          {{ $blog['posted_on'] }}
        </div>
      </div>
      @endforeach
  </div>@endsection