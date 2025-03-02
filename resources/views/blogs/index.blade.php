@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Blog List</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul class="list-group mt-3">
        @foreach ($blogs as $blog)
            <li class="list-group-item">
                <h5>{{ $blog->title }}</h5>
                <p>{{ Str::limit($blog->content, 100) }}</p>
                <a href="{{ route('blogs.show', $blog) }}" class="btn btn-info">View</a>
                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection