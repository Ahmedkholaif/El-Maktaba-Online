@extends('layouts\app')

@section('content')
<div style="margin-bottom:10px">
<a href= ""class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalCategoryForm"> add new category</a>
</div>
<div class="box-body">
<table class="table table-bordered table-hover" style="text-align=center">
<tr>
<th scope="col" class="text-center" style="width: 35%"> name </th>
<th scope="col" class="text-center col-md-6" style="width: 45%">description</th>
<th scope="col" colspan="2" class="text-center" style="width: 20%">actions</th>
</tr>

<td scope="row" class="text-center"> Art </td>
<td scope="row" class="text-center"> Science </td>
<td scope="row" class="text-center"> <a href="" class="btn btn-success "> Edit  <i class="fas fa-edit"> </i></a></td>

<td class="text-center">
    <form method="post" action="">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="" >
    <button type="submit"  class="btn btn-danger">
    <i class="fas fa-trash"></i>
    Delete

    </button>
    
    </form>
</td>
</div>

<div class="modal fade" id="modalCategoryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class=" prefix grey-text"></i>
          <input type="email" class="form-control ">
          <label data-error="wrong" data-success="right" for="name">name</label>
        </div>

        <div class="md-form mb-4">
          <i class=" prefix grey-text"></i>
          <input type="text " class="form-control ">
          <label data-error="wrong" data-success="right" for="description">description</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Save</button>
      </div>
    </div>
  </div>
</div>



@endsection