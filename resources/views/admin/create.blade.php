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
                    <ul>
                        @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <form action="{{ route('post.store') }} " method="post">
                        @csrf
                        @method('post')
                        <input type = "text" name = "title">
                        <input type = "text" name = "description">

                        <select name="categories" id="" >
                            @foreach ($categories as $category)

                                <option value="{{ $loop->iteration }}">{{ $category->name }}</option>

                            @endforeach
                        </select>

                        @foreach ($tags as $tag)

                            <label for="tag{{ $loop->iteration }}">{{ $tag->name }}</label>
                            <input type="checkbox" name="tag[]" id="tag{{ $loop->iteration }}" value="{{ $tag->id}}">

                        @endforeach

                        <input type = "submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
