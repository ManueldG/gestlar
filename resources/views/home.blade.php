@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="posts">
                        @foreach ($posts as $post)

                            <div>
                                <h1>{{ $post->title }}</h1>
                                <img src="{{ asset('img/').'/'.$post->file }}" alt="">
                                <p>{{ $post->description }}</p>
                                <code>{{ $post->categories->name }}</code>
                                @foreach ($post->tag as $tag)
                                    <code>{{ ($tag->name) }}</code>
                                @endforeach
                            </div>

                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
