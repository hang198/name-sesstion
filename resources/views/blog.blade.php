@extends('master')
@section('content')
    <div class="title m-b-md">
        Hello Hang
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection
