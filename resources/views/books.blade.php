<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">

</head>
<body style="padding:15px">
    
    <div class="container">
        <div class="border-wrapper">
            <div class="wrapper-header">
                <div class="title-header">
                    <h1 >Books Management System</h1>
                </div>
                
                <a href="{{ route('add-book') }}" class="btn btn-success btn-sm float-end">Add New Book</a>
            </div>
            <div class="wrapper-body">
            <table class="table table-success table-striped table-bordered">
                <thead>
                    <th>#Id</th>
                    <th>Book No</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publication Year</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                @foreach($all_books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->book_no }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>
                        <a href="{{ route('edit-book', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('delete-book', $book->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
</body>
</html>