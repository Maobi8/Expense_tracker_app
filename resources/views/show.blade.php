<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>SHOW</title>
</head>

<body>
    <div class="container">
        <h1>Update Expenses</h1>
        <form method="POST" action="{{ url('update_expenses', $expense->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $expense->title }}">
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $expense->description }}">
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" value="{{ $expense->amount }}">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $expense->date }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</body>

</html>
