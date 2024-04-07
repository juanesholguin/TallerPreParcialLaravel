@extends('layouts.base')

@section('title', 'Edit Book')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Edit Book</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('books.index') }}" class="btn btn-danger">Go List</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="POST" action="{{ route('books.update', $book) }}">
            @csrf
            @method("PUT")
            <div class="col-md-6 mt-2">
                <label for="name_book" class="form-label">Book name</label>
                <input type="text" class="form-control" id="name_book" name="name_book" value="{{ old('name_book', $book->name_book) }}"
                       required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="author_name" class="form-label">Author name</label>
                <input type="text" class="form-control" id="author_name" name="author_name"
                       value="{{ old('author_name', $book->author_name) }}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="editorial_name" class="form-label">Editorial name</label>
                <input type="text" class="form-control" id="editorial_name" name="editorial_name"
                       value="{{ old('editorial_name', $book->editorial_name) }}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="number_pages" class="form-label">Number pages</label>
                <input type="number" min="1" class="form-control" id="number_pages" name="number_pages"
                       value="{{ old('number_pages', $book->number_pages) }}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="number_chapters" class="form-label">Number Chapters</label>
                <input type="number" min="1" class="form-control" id="number_chapters" name="number_chapters"
                       value="{{ old('number_chapters', $book->number_chapters) }}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="publication_date" class="form-label">Publication date</label>
                <input type="date" class="form-control" id="publication_date" name="publication_date"
                       value="{{ old('publication_date', $book->publication_date) }}" required>
            </div>
            <div class="col-md-6 mt-2">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea class="form-control" id="synopsis" rows="3" name="synopsis"
                          required> {{ old('synopsis', $book->synopsis) }} </textarea>
            </div>
            <div class="form-group">
                <label for="available">Availability:</label>
                <select class="form-control" id="available" name="available">
                    <option value="1" {{ old('available', $book->available) == '1' ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ old('available', $book->available) == '0' ? 'selected' : '' }}>Not Available</option>
                </select>
            </div>
            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
