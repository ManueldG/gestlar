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

                                    <li>{ $mess[0] }</li>

                                @endforeach

                            </div>

                        @endif
                    </ul>




                    <form action="{{ route('post.update',$post->id) }} " method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-floating mb-3">
                            <input class = "form-control" type = "text" name = "title" id="floatingInput" placeholder="Title" value = "{{ $post->title }}">
                            <label for="floatingInput">Titolo</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Testo" id="floatingTextarea" name = "description">{{ $post->description }}</textarea>
                            <label for="floatingTextarea">Testo</label>
                        </div>

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option selected>(seleziona)</option>

                              @foreach ($categories as $category)

                                <option  value="{{ $loop->iteration }}" @if(!is_null($post->categories)&&$post->categories_id == $category->id) selected="selected" @endif>{{ $category->name }}</option>

                              @endforeach
                            </select>
                            <label for="floatingSelect">Categoria</label>
                          </div>

                        @foreach ($tags as $tag)

                            <div class="form-check">
                                <label class = "form-check-label" for="tag{{ $loop->iteration }}">{{ $tag->name }}</label>
                                <input class = "form-check-input" type="checkbox" name="tag[]" id="tag{{ $loop->iteration }}" value="{{ $tag->id}}"
                                @foreach ($post->tag as $posttag)

                                    @if($posttag->name == $tag->name)  checked @endif

                                @endforeach
                                >
                            </div>
                        @endforeach

                        <div class="mb-3 mt-3">

                            @if ($post->file)
                                <img class="img-fluid" src="{{ asset('img/').'/'.$post->file }}" alt="{{ $post->file }}">
                            @endif

                            <label for="formFile" class="form-label">Immagine</label>
                            <input class="form-control" type="file" id="formFile" name="filename" >

                        </div>

                        <input class="btn btn-secondary" type = "submit">

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection



