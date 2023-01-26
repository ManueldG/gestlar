@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('post.update',$post->id) }} " method="post">
                        @csrf
                        @method('PUT')
                        <input type = "text" name = "title" value="{{ $post->title }}">
                        <input type = "text" name = "description" value="{{ $post->description }}">
                        <input type = "submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection



