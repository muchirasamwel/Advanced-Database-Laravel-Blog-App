@extends('layouts.app')
@section('title')
    <title>Advanced Databases</title>
@endsection
@section('content')
    <div>
        <h1 class="text-center">Blogs</h1>

        <div class="container">
            <div>
                <form method="POST" action="/search" class="row" >
                    @method('post')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="title" class="form-control">
                    <button type="submit" class="btn btn-outline-success">Search</button>
                </form>
            </div>
            @if($blogs)
                @foreach($blogs as $blog)
                    <div class="blog my-4">
                        <div class="bg-secondary p-3 text-center
                        font-weight-bolder text-white">
                            <span>Title : {{$blog->title}} ( By {{$blog->user->name}} ) </span>
                            <span class="float-right text-success font-weight-bolder">{{$blog->created_at}}</span>
                        </div>
                        <div class="p-3">{{$blog->content}} </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
