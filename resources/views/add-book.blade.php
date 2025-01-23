<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/add-book.css') }}">
 
</head>

<body style="padding:15px">
    <div class="form-border-wrapper">
        <div class="title-header" >
         <h2>Add New Book</h2>
        </div>   

    <div class="form-wrapper">
        <form action="{{route('AddBook')}}" method="post" >
         @csrf
            <div class="mb-3">
            <label for="inputBookNo4" class="form-label">Book No</label>
            <input type="text" class="form-control" id="inputBookNo4" name="book_no">
        </div>
        <div class="mb-3">
            <label for="inputTitle4" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputTitle4" name="title">
        </div>
        <div class="mb-3">
            <label for="inputAuthor4" class="form-label">Author</label>
            <input type="text" class="form-control" id="inputAuthor4" name="author">
        </div>
        <div class="mb-3">
            <label for="year-picker" class="form-label">Publication Year</label>
            <input type="text" class="date form-control" name="published_year" id="year-picker" />
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form><br>

    <a href="{{ route('books') }}" >go to book list</a>
</div>
 </div>
    

<script type="text/javascript">
  $(document).ready(function () {
    $('#inputYear4').datepicker({
      format: 'yyyy',
      autoclose: true,
      minViewMode: 2 
    });
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

</body>
</html>