@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="content" style="margin-bottom: 15px">
            <h1>Edytuj post</h1>

            <form action="{{ route('adminPanel.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
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
                    <button style="margin-bottom: 15px" type="submit">Edytuj</button>
                </div>
            </form>
        </div>
    </div>
@endsection
