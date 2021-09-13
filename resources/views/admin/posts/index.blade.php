@extends('layouts.app')
@section('content')

<div class="container">
<table class="table">
        <thead>
            <tr>
            <th scope="col">Codice</th>
            <th scope="col">Titolo</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }} </th>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{route('admin.posts.edit', $post->id)}} " class="btn btn-success">Edit</a>
                    <form action="" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection