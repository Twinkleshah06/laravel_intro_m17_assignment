@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Verify Your Email</h2>
    <p>Please check your email for a verification link.</p>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </form>
</div>
@endsection