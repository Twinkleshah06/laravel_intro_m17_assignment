@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection