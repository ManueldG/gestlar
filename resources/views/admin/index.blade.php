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

                        <a href="{{ route('post.create') }}"> Crea nuovo post </a>

                        <table class="table">

                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td><a class="btn btn-secondary" href="{{ route('post.show',$post->id) }}"> Mostra </a></td>
                                    <td><a class="btn btn-secondary" href="{{ route('post.edit',$post->id) }}"> Modifica </a></td>

                                    <td>

                                        <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-secondary" type="submit" value="Cancella">
                                        </form>

                                    </td>

                                </tr>
                            @endforeach

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
