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


                        <input type = "submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
