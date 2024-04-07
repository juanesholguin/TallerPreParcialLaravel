@extends('layouts.base')

@section('title', 'Show Book')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Show: {{ $book->name_book }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('books.index') }}" class="btn btn-danger">Go List</a>
            </div>
        </div>
        <div class="row shadow m-3 p-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="name_book" class="form-label">Book name:</label>
                    <span class="form-control" id="name_book">{{ $book->name_book }}</span>
                </div>
                <div class="mb-2">
                    <label for="author_name" class="form-label">Author name:</label>
                    <span class="form-control" id="author_name">{{ $book->author_name }}</span>
                </div>
                <div class="mb-2">
                    <label for="editorial_name" class="form-label">Editorial name:</label>
                    <span class="form-control" id="editorial_name">{{ $book->editorial_name }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="number_pages" class="form-label">Number pages:</label>
                    <span class="form-control" id="number_pages">{{ $book->number_pages }}</span>
                </div>
                <div class="mb-2">
                    <label for="number_chapters" class="form-label">Number Chapters:</label>
                    <span class="form-control" id="number_chapters">{{ $book->number_chapters }}</span>
                </div>
                <div class="mb-2">
                    <label for="publication_date" class="form-label">Publication date:</label>
                    <span class="form-control" id="publication_date">{{ $book->publication_date }}</span>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <label for="synopsis" class="form-label">Synopsis:</label>
                <p class="form-control" id="synopsis">{{ $book->synopsis }}</p>
            </div>
            <div class="col-md-12">
                <label for="available" class="form-label">Available:</label>
                <span class="form-control">{{ $book->available ? 'Yes' : 'No' }}</span>
            </div>
        </div>
    </div>
@endsection
