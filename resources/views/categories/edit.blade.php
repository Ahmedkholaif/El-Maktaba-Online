
<a href= "{{route('category.edit',$category->id)}}"class="btn btn-success" data-toggle="modal" data-target="#editModal">  <i class="fas fa-edit">  </i> Edit</a>


<!-- <a href="  " class="btn btn-success ">   Edit </a> -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <form action="{{route('category.update',$category->id)}}" method="post">
         @csrf
         @method('put')
	      <div class="modal-body">
          <div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="name" id="title" value="{{old('name',$category->name)}}">
	        	</div>

	        	<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"> {{old('description',$category->description)}} </textarea>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>

