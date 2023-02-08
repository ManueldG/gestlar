@extends('layouts.app')

@section('content')

<h2 class="text-center">React Version</h2>
<div id="app2"></div>

<h2 class="text-center">Blade Version</h2>
    <div class="container">
        <div class="row justify-content-center">

                    @foreach ($posts as $post)
                    <div class="col-md-6 mb-2">

                        <div class="card">

                            <div class="card-header">{{ __($post->title) }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @if ($post->file)
                                    <img src="{{ asset('img/').'/'.$post->file }}" alt="{{ $post->file }}">
                                @endif

                                <p>{{ $post->description }}</p>
                                <div class="category">Categoria <code>{{ $post->categories->name }}</code></div>
                                <div class="tags">Tags
                                    @foreach ($post->tag as $tag)
                                        <code>{{ ($tag->name) }}</code>
                                    @endforeach
                                </div>


                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
