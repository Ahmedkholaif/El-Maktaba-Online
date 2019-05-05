@extends('layouts.app')

@section('content')
@include('books.create')

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="query"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>


@if (session('status'))
<div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif

<div class="box-body">
<table class="table table-bordered table-hover" style="text-align=center">
<thead class="thead-light">
<tr>
<th scope="col" class="text-center " style="width: 10%"> Image </th>
<th scope="col" class="text-center" style="width: 10%"> Title </th>
<th scope="col" class="text-center" style="width: 10%"> Author </th>
<th scope="col" class="text-center" style="width: 10%"> Copies </th>
<th scope="col" class="text-center" style="width: 10%"> Fee/day </th>
<th scope="col" class="text-center" style="width: 10%"> Category </th>

<th scope="col" class="text-center" style="width: 22%">Description</th>
<th scope="col" colspan='2' class="text-center" style="width: 18%">Actions</th>
</tr>
</thead>
@foreach($books as $book)
<tr>
    <td scope="row" class="text-center align-middle"> <img src="{{asset('storage/'.$book->image)}}" style="height:100px;width:100px;"/> </td>
    <td scope="row" class="text-center align-middle"> {{$book->title}} </td>
    <td scope="row" class="text-center align-middle"> {{$book->author}} </td>
    <td scope="row" class="text-center align-middle"> {{$book->copies_number}} </td>
    <td scope="row" class="text-center align-middle"> {{$book->fees_per_day}} </td>
  
    <td scope="row" class="text-center align-middle">
        @foreach($book->categories as $category)
        <h5>{{ $category->name }}</h5>
        @endforeach
    </td>
    <td scope="row" class="text-center align-middle">  {{$book->description}} </td>
    <td scope="row" class="text-center align-middle"> @include('books.edit')</td>

    <td class="text-center align-middle">
        <form method="post" action=" {{route('books.destroy', $book->id)}} ">
            {{ csrf_field() }}
            @method('delete')
            <button type="submit"  class="btn btn-danger btn-md center-block ">
            <i class="fas fa-trash" style=" vertical-align: middle;"></i>
            Delete

            </button>
    
        </form>
    </td>
</tr>
@endforeach
</table>


</div>

@endsection