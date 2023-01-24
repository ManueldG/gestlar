@extends('layouts.app')

    @section('content')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <a href="{{ route('post.create') }}"> Crea nuovo post </a>

                <table>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><a href="{{ route('post.show',$post->id) }}"> Mostra </a></td>
                        <td><a href="{{ route('post.edit',$post->id) }}"> Modifica </a></td>
                        <td>
                            <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Cancella">
                            </form>

                        </td>
                    </tr>
                @endforeach

                </table>

            </div>

    @endsection
