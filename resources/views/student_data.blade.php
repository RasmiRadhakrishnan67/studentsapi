<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Student Info Page</title>
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div>
            @endif
        </div>
	  	<div class="row">
		<div class="col-sm-12">
		    <h1 class="display-3">Student DB</h1>    
			  <table class="table table-striped">
			    <thead>
			        <tr>
			          <td>Name</td>
			          <td>Roll Number</td>
			          <td>Class</td>
			          <td>English</td>
			          <td>Maths</td>
			          <td>Science</td>
			            <td>Tamil</td>
			          <td colspan = 2>Actions</td>
			        </tr>
			    </thead>
			    <tbody>
		        @foreach($students as $student)
		        <tr>
		            <td>{{$student->name}}</td>
		            <td>{{$student->roll_number}}</td>
		            <td>{{$student->std}}</td>
		            <td>{{$student->english}}</td>
		            <td>{{$student->maths}}</td>
		            <td>{{$student->science}}</td>
		            <td>{{$student->tamil}}</td>
		            <td>
		                <a href="{{ route('student.edit',$student->id)}}" class="btn btn-primary">Update</a>
		            </td>
	           		<td>
	                <form action="" method="post">
	                  @csrf
	                  @method('DELETE')
	                  <button class="btn btn-danger" type="submit">Delete</button>
	                </form>
	            	</td>
	        	</tr>
	       		@endforeach
		    	</tbody>
		  </table>
		<div>
		</div> 
	   
	</div>
</body>
</html>