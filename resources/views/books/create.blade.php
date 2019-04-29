<div style="margin-bottom:10px">
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
		        	<input type="text" class="form-control" name="title" id="title">
	        	</div>

                <div class="form-group">
		        	<label for="title">Author</label>
		        	<input type="text" class="form-control" name="author" id="title">
	        	</div>

                <div class="form-group">
		        	<label for="title"> Number of copies</label>
		        	<input type="number" class="form-control" name="copies_number" id="">
	        	</div>

                <div class="form-group">
		        	<label for="title">Fees/day</label>
		        	<input type="number" class="form-control" name="fees_per_day" id="">
	        	</div>

                <div class="form-group">
		        	<label for="title">Image</label>
		        	<input type="file" class="form-control" name="image" id="">
	        	</div>

                <div class="form-group">
                    <label for="title">Categories</label>
                    <select  name="categories_id[]" class="form-control edit-form" multiple>
                        @foreach($categories as $category)
                            <option value=" {{$category->id }}"> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>

	        	<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="des" cols="20" rows="5" id='des' class="form-control"></textarea>
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

