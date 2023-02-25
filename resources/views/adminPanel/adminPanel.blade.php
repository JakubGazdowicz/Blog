@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="content">
            <h1 style="text-align: center">Witaj w panelu administratora!</h1>
            <h3 style="text-align: center">Dodaj post</h3>

            <form action="{{ route('adminPanel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <p>Tytuł</p>
                    <input type="text" name="title" class="form-control" id="title" required="required">
                </div>
                <div class="form-group col-md-6">
                    <p>Autor</p>
                    <input type="text" name="author" class="form-control" id="author" required="required">
                </div>
                <div class="form-group col-md-12">
                    <p>Zdjęcie</p>
                    <input type="file" name="photo" id="photo" required="required">
                </div>
                <div class="form-group col-md-12">
                    <p>Treść</p>
                    <textarea rows="6" name="content" class="form-control" id="content" required="required"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <hr>
            @foreach($posts as $post)
                <div class="col">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav text-center">
                            <li><a href="{{ route('post.show', $post->id) }}"><button type="button">Czytaj</button></a></li>
                            <li><form action="{{ route('adminPanel.destroy', $post->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-danger">Usuń</button>
                                </form></li>
                            <li><a href="{{ route('adminPanel.edit', $post->id) }}"><button type="button">Edytuj</button></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
