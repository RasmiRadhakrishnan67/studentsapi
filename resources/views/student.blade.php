<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <form action="" method="post" action="{{ route('student.store') }}">
            @csrf
            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label>Roll Number</label>
                <input type="text" class="form-control" name="roll_number" id="roll_number">
            </div>

            <div class="form-group">
                <label>Class</label>
                <input type="text" class="form-control" name="std" id="std">
            </div>

            <div class="form-group">
                <label>English</label>
                <input type="text" class="form-control" name="english" id="english">
            </div>

             <div class="form-group">
                <label>Maths</label>
                <input type="text" class="form-control" name="maths" id="maths">
            </div>

             <div class="form-group">
                <label>Science</label>
                <input type="text" class="form-control" name="science" id="science">
            </div>

             <div class="form-group">
                <label>Tamil</label>
                <input type="text" class="form-control" name="tamil" id="tamil">
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>