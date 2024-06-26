@extends('layouts.base')
@section('title', 'Book list')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Books</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <a href="{{ route('books.create') }}" class="btn btn-primary">Create new Book</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book name</th>
                        <th scope="col">Author name</th>
                        <th scope="col">Editorial name</th>
                        <th scope="col">Number Pages</th>
                        <th scope="col">Number Chapters</th>
                        <th scope="col">Publication Date</th>
                        <th scope="col">Synopsis</th>
                        <th scope="col">Available</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name_book }}</td>
                            <td>{{ $book->author_name }}</td>
                            <td>{{ $book->editorial_name }}</td>
                            <td>{{ $book->number_pages }}</td>
                            <td>{{ $book->number_chapters }}</td>
                            <td>{{ $book->publication_date }}</td>
                            <td>{{ $book->synopsis }}</td>
                            <td>{{ ($book->available == 1) ? 'Yes': 'No' }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-sm" href="{{route('books.edit', $book)}}">Update</a>
                                    <a class="btn btn-warning btn-sm" href="{{route('books.show', $book)}}">Show</a>
                                    <form method="post"
                                          action="{{ route('books.destroy', $book) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this task?')">
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul>
                </ul>
            </div>
        </div>
    </div>
@endsection
