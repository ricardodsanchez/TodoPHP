@extends('layout')

@section('content')
	
	<hr>
<div class="col-lg-3"></div>
<div class="col-lg-6">

	<form action="{{ url('/todos') }}" method="POST" class="form">
		<div>
			<label for="inputTodo" class="control-label">What do you need to get done?</label>
		</div>
		<div>
			<input type="text" class="form-control" name="inputTodo" id="inputTodo" placeholder="Enter your todo" />
		</div>
		<div>
			<label for="inputDescription" class="control-label">Type a detailed description (of any)</label>
		</div>
		<div>
			<textarea class="form-control" rows="3" name="inputDescription" id="inputDescription" placeholder="Enter description"></textarea>
		</div>
		<div>
			<label for="date-picker-1" class="control-label">Due date</label>
	        <div class="input-append date" id="date-container">
				<input type="text" class="form-control" name="inputDuedate" id="inputDuedate">
			</div>
		</div>
		<div>
			<label for="inputAuthor" class="control-label">Who should take care of it?</label>
		</div>
		<div>
			<input type="text" class="form-control" name="inputAuthor" id="inputAuthor" placeholder="Assign to" />
		</div>
		<div class="form-group">
	      <div>
	      	<br>
	        <button class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
	    </div>
	</form>
	
	<table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	      <th>Due</th>
	      <th>Title</th>
	      <th>Description</th>
	      <th>Author</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach($todos as $todo)
		<tr>
			<td>{{ $todo->duedate }}</td>
		    <td>{{ $todo->title }} </td>
		    <td>{{ $todo->description }}</td>
		    <td>{{ $todo->author }}</td>
		</tr>		
		@endforeach
	  </tbody>
	</table> 
</div>
<div class="col-lg-3"></div>

<!-- Initiates a date picker -->
<script>
	$(function(){
		$('#date-container input').datepicker({
    format: "mm/dd/yyyy",
    todayBtn: true
});
	})
	
</script>

@stop

