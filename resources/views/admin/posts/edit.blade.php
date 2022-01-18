@extends('layouts.admin')


@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('put')

            <div class="text-start mt-5">
                <div class="mb-3">
                    <label for="field_title" class="form-label">Titolo del post</label>
                    <input type="text" class="form-control" name="title" id="field_title" value="{{ old('title') ?? $post->title }}">
                </div>
    
                <div class="mb-3">
                    <label for="field_image" class="form-label">Immagine</label>
                    <input type="url" class="form-control" name="image" id="field_image" value="{{ old('image') ?? $post->image }}">
                </div>
                
                <div class="mb-3">
                    <label for="field_content" class="form-label">Contenuto</label>
                    <input type="text" class="form-control" name="content" id="field_content" value="{{ old('content') ?? $post->content }}">
                </div>
    
                
    
                <button class="btn btn-primary" type="submit">Aggiungi</button>
            </div>


            
            
        </form>
    </div>
@endsection