<div >
<a href= " {{route('books.edit', $book->id)}}" class="btn btn-success" data-toggle="modal" data-target="#bookModal-{{$book->id}}"> <i class="fas fa-edit" style=" vertical-align: middle;">  </i> Edit</a>
</div>


<div class="modal fade" id="bookModal-{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update Book</h4>
      </div>
      <form action=" {{route('books.update', $book->id)}} "  method="post" enctype="multipart/form-data" >
         @csrf
         @method('put')
	      <div class="modal-body">
            <div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="title"  value=" {{old('title',$book->title)}} " required>
							@if ($errors->has('title'))
								<span class="text-danger">{{ $errors->first('title') }}</span>
							@endif
						</div>

            <div class="form-group">
		        	<label for="author">Author</label>
		        	<input type="text" class="form-control" name="author"   value=" {{old('author',$book->author)}} " required >
	        		@if ($errors->has('author'))
								<span class="text-danger">{{ $errors->first('author') }}</span>
							@endif
						</div>

            <div class="form-group">
		        	<label for="copies"> Number of copies</label>
		        	<input type="number" class="form-control" name="copies_number" value=" {{old('copies_number',$book->copies_number)}} " required>
							@if ($errors->has('copies_number'))
								<span class="text-danger">{{ $errors->first('copies_number') }}</span>
							@endif
						</div>

            <div class="form-group">
		        	<label for="fee">Fees/day</label>
		        	<input type="number" class="form-control" name="fees_per_day"  value = "{{old('fees_per_day',$book->fees_per_day)}} " required>
							@if ($errors->has('fees_per_day'))
								<span class="text-danger">{{ $errors->first('fees_per_day') }}</span>
							@endif
						</div>

            <div class="form-group">
		        	<label for="image">Image</label>
		        	<input type="file" class="form-control" name="image"  value = "{{old('image',$book->fees_per_day)}} " required>
							@if ($errors->has('image'))
								<span class="text-danger">{{ $errors->first('image') }}</span>
							@endif
						</div>

						<div class="form-group">
                    <label for="category">Categories</label><br>
										<span class="text-info">Press ctrl to choose more than one category</span>
                    <select  name="categories_id[]" class="form-control edit-form" multiple required>
												@foreach($categories as $category)
                            <option value=" {{$category->id }}"> {{$category->name}} </option>
                        @endforeach
                    </select>
										@if ($errors->has('categories_id'))
											<span class="text-danger">{{ $errors->first('categories_id') }}</span>
										@endif
                </div>

	        	<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" cols="20" rows="5" class="form-control" required> {{old('description',$book->description)}}</textarea>
							@if ($errors->has('description'))
								<span class="text-danger">{{ $errors->first('description') }}</span>
							@endif
						</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>

