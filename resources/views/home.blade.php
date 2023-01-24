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

                    <div class="posts">
                        @foreach ($posts as $post)

                            <div>
                                <div>{{ $post->title }}</div>
                                <div>{{ $post->description }}</div>
                            </div>

                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
