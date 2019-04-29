@extends('layouts.app')

@section('content')
@include('categories.create')

<div class="box-body">
<table class="table table-bordered table-hover" style="text-align=center">
<tr>
<th scope="col" class="text-center" style="width: 35%"> name </th>
<th scope="col" class="text-center col-md-6" style="width: 45%">description</th>
<th scope="col" colspan='2' class="text-center" style="width: 20%">actions</th>
</tr>
@foreach($categories as $category)
<tr>
    <td scope="row" class="text-center"> {{$category->name}} </td>
    <td scope="row" class="text-center">  {{$category->description}} </td>
    <td scope="row" class="text-center"> @include('categories.edit')</td>

    <td class="text-center">
        <form method="post" action=" {{route('category.destroy',$category->id)}} ">
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

</div>

@endsection