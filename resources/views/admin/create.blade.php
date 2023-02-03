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
                        @if ($errors->all())
                            <div class="alert alert-success" role="alert">

                                @foreach ($errors->messages() as $mess)

                                    <li>{{ $mess[0] }}</li>

                                @endforeach

                            </div>

                        @endif
                    </ul>


                    <form action="{{ route('post.store') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <input type = "text" name = "title" >
                        <textarea name = "description"></textarea>

                        <select name="categories" id="" >
                            @foreach ($categories as $category)

                                <option value="{{ $loop->iteration }}">{{ $category->name }}</option>

                            @endforeach
                        </select>

                        @foreach ($tags as $tag)

                            <label for="tag{{ $loop->iteration }}">{{ $tag->name }}</label>
                            <input type="checkbox" name="tag[]" id="tag{{ $loop->iteration }}" value="{{ $tag->id}}">

                        @endforeach

                        <input type="file" id="myFile" name="filename">

                        <input type = "submit">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
