@extends('layouts.dashboard')

@section('content')
    <h1>Crea un nuovo post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf


        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">None</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>

            <div class="my-3">
                <h4>Tags</h4>
                @foreach ($tags as $tag)
                    <div class="form-check">


                        <input class="form-check-input" type="checkbox" value="{{ $tag->id}}" name="tags[]" id="tag-{{ $tag->id}}">
                        <label class="form-check-label" for="tag{{$tag->id}}" {{ in_array( $tag->id, old('tags', [])) ? 'checked' : ''}}>
                            {{ $tag->name}}
                        </label>
                    </div>
                @endforeach
            </div>





            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" name="content" id="content" {{ old('content') }}></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            <div>
                <label for="image">Immagine di copertina</label>
                <input type="file" id="image namee="image">
            </div>
    </form>
@endsection
