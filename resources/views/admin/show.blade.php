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

                    <h1>{{$post->title}}</h1>
                    <p>{{ $post->description }}</p>
                    <div><code>{{ ($post->categories->name) }}</code></div>
                    @foreach ($post->tag as $tag)
                        <code>{{ ($tag->name) }}</code>
                    @endforeach

                    @if ($post->file)
                        <img src="{{ asset('img/').'/'.$post->file }}" alt="{{ $post->file }}">
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
