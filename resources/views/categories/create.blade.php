<div style="margin-bottom:10px">
<a href= ""class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#myModal"> add new category</a>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">New Category</h4>
      </div>
      <form action="{{route('category.store')}}" method="post">
         @csrf
	      <div class="modal-body">
          <div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="name" id="title" required>
							@if ($errors->has('name'))

                	<span class="text-danger">{{ $errors->first('name') }}</span>

            	@endif
	        	</div>

	        	<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="des" cols="20" rows="5" class="form-control" required></textarea>
	        		@if ($errors->has('description'))

                	<span class="text-danger">{{ $errors->first('description') }}</span>

            	@endif
						</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
	@if (count($errors) > 0)
			$('#myModal').modal('show');
	@endif
</script>


