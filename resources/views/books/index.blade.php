@extends('layouts.app')

@section('content')
@include('books.create')



<div class="box-body">
<table class="table table-bordered table-hover" style="text-align=center">
<tr>
<th scope="col" class="text-center" style="width: 10%"> Image </th>
<th scope="col" class="text-center" style="width: 10%"> Title </th>
<th scope="col" class="text-center" style="width: 10%"> Author </th>
<th scope="col" class="text-center" style="width: 10%"> Copies </th>
<th scope="col" class="text-center" style="width: 10%"> Fee/day </th>
<th scope="col" class="text-center" style="width: 10%"> Category </th>

<th scope="col" class="text-center" style="width: 22%">Description</th>
<th scope="col" colspan='2' class="text-center" style="width: 18%">Actions</th>
</tr>

@foreach($books as $book)
<tr>
    <td scope="row" class="text-center"> {{$book->image}} </td>
    <td scope="row" class="text-center"> {{$book->title}} </td>
    <td scope="row" class="text-center"> {{$book->author}} </td>
    <td scope="row" class="text-center"> {{$book->copies_number}} </td>
    <td scope="row" class="text-center"> {{$book->fees_per_day}} </td>
  
    <td></td>
    <td scope="row" class="text-center">  {{$book->description}} </td>
    <td scope="row" class="text-center"> @include('books.edit')</td>

    <td class="text-center">
        <form method="post" action=" {{route('books.destroy', $book->id)}} ">
            {{ csrf_field() }}
            @method('delete')
            <button type="submit"  class="btn btn-danger">
            <i class="fas fa-trash"></i>
            Delete

            </button>
    
        </form>
    </td>
</tr>
@endforeach
</table>

<!-- <select  name="myselect[]" class="form-control edit-form" >
        @foreach($categories as $category)
            <option value=" {{$category->id }}"> {{$category->name}} </option>
        @endforeach
</select> -->
</div>

@endsection