<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/edit-book.css') }}">
</head>
<body style="padding:15px">
    <div class="form-border-wrapper">
            <div class="title-header">
                <h2>Edit Book</h2>
            </div>
            <div class="form-wrapper">
            <form action="{{ route('update-book', $book->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="book_no" class="form-label">Book No</label>
                    <input type="text" class="form-control" id="book_no" name="book_no" value="{{ $book->book_no }}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
                </div>
                <div class="mb-3">
                    <label for="published_year" class="form-label">Publication Year</label>
                    <input type="text" class="form-control" id="published_year" name="published_year" value="{{ $book->published_year }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
    
    </div>

    
</body>
</html>
