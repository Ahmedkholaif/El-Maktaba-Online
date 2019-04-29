
@extends('layouts.app')

@section('content')

    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Description</th>
                            <th scope="col">Categories</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($booksInfo as $bookInfo)
                            <tr>
                                <td><a href="/book/{{ $bookInfo->book->id }}">{{ $bookInfo->book->title }}</a></td>
                                <td>{{ $bookInfo->book->author }}</td>
                                <td>{{ $bookInfo->book->description }}</td>
                                <td>
                                        @foreach ($bookInfo->book->categories as $category)
                                            <a href="/category/{{ $category->id }}">{{ $category->name }}</a><br>
                                        @endforeach
                                        {{ count($bookInfo->book->categories) ? '' : '#' }}
                                        </td>
                                <td><img width="80" src="data:image/jpeg;base64,{{  base64_encode( $bookInfo->book->image )}}"/></td>
                                <td>
                                    <form method="post" action="{{ route('favoriteBooks') }}">
                                        @csrf
                                        <button id="favBtn" type="submit"><i class="fas fa-heart fa-2x"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
