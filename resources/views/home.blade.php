@extends('layouts.app')

@section('content')
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
                            <code>{{ $post->categories->name }}</code>
                            @foreach ($post->tag as $tag)
                                <code>{{ ($tag->name) }}</code>
                            @endforeach


                        </div>
                    </div>
                </div>
                        @endforeach


        </div>
    </div>

</div>
@endsection
