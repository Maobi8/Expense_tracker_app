<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>INDEX</title>
    <style>
        .list {}
    </style>
</head>

<body>
    <div class="container list ">
        <h1 class=" text-center">Expenses</h1>
        <a href="/expenses/create" class="btn btn-primary">Add Expense</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col">DATE</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>

                </tr>
            </thead>
            @foreach ($expenses as $expense)
                <tbody>
                    <tr>

                        <th>{{ $expense->title }}</th>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->date }}</td>
                        <td><a class="btn btn-primary" href="{{ url('show', $expense->id) }}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{ url('delete', $expense->id) }}">Delete</a></td>

                    </tr>


                </tbody>
            @endforeach
        </table>


    </div>


</body>

</html>
