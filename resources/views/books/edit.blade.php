<div style="margin-bottom:10px">
<a href= " {{route('books.edit', $book->id)}} "class="btn btn-success" data-toggle="modal" data-target="#bookModal"> <i class="fas fa-edit">  </i> Edit</a>
</div>


<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update Book</h4>
      </div>
      <form action=" {{route('books.update', $book->id)}} " method="post">
         @csrf
         @method('put')
	      <div class="modal-body">
                <div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="title" id="title" value=" {{old('title',$book->title)}} ">
	        	</div>

                <div class="form-group">
		        	<label for="title">Author</label>
		        	<input type="text" class="form-control" name="author" id="title"  value=" {{old('author',$book->author)}} " >
	        	</div>

                <div class="form-group">
		        	<label for="title"> Number of copies</label>
		        	<input type="number" class="form-control" name="copies_number" id="title"  value = "{{old('copies_number',$book->copies_number)}} ">
	        	</div>

                <div class="form-group">
		        	<label for="title">Fees/day</label>
		        	<input type="number" class="form-control" name="fees_per_day" id="title" value = "{{old('fees_per_day',$book->fees_per_day)}} ">
	        	</div>

                <div class="form-group">
		        	<label for="title">Image</label>
		        	<input type="file" class="form-control" name="image" id="title">
	        	</div>

	        	<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"> {{old('description',$book->description)}}</textarea>
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

