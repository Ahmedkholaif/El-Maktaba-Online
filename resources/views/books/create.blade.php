<div>
<a href= ""class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#myModal"> add new book</a>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">New Book</h4>
      </div>
      <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
         @csrf
	      <div class="modal-body">
            <div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="title" required>
							@if ($errors->has('title'))
								<span class="text-danger">{{ $errors->first('title') }}</span>
							@endif
	        	</div>

            <div class="form-group">
		        	<label for="title">Author</label>
		        	<input type="text" class="form-control" name="author"  required>
							@if ($errors->has('author'))
								<span class="text-danger">{{ $errors->first('author') }}</span>
							@endif
	        	</div>

            <div class="form-group">
		        	<label for="title"> Number of copies</label>
		        	<input type="number" class="form-control" name="copies_number"  required>
							@if ($errors->has('copies_number'))
								<span class="text-danger">{{ $errors->first('copies_number') }}</span>
							@endif
	        	</div>

            <div class="form-group">
		        	<label for="title">Fees/day</label>
		        	<input type="number" class="form-control" name="fees_per_day"  required>
							@if ($errors->has('fees_per_day'))
								<span class="text-danger">{{ $errors->first('fees_per_day') }}</span>
							@endif
	        	</div>

                <div class="form-group">
		        	<label for="title">Image</label>
		        	<input type="file" class="form-control" name="image"  required>
							@if ($errors->has('image'))
								<span class="text-danger">{{ $errors->first('image') }}</span>
							@endif
	        	</div>

                <div class="form-group">
                    <label for="title">Categories</label><br>
										<span class="text-info">Press ctrl to choose more than one category</span>
                    <select  name="categories_id[]" class="form-control edit-form" multiple required>
                        @foreach($categories as $category)
                            <option value=" {{$category->id }}" > {{$category->name}} </option>
                        @endforeach
                    </select>
										@if ($errors->has('categories_id'))
											<span class="text-danger">{{ $errors->first('categories_id') }}</span>
										@endif
                </div>

	        	<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" cols="20" rows="5" id='des' class="form-control" required></textarea>
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

