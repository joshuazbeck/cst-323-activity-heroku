<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>View Car Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        form {
            display: inline;
        }
        .add {
            margin-top: 1rem;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

        <div class="card">
            <div class="card-header text-center font-weight-bold">
                All Car Listings
            </div>
            @foreach($cars as $car)
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            {{$car->carname}}
                            <small class="text-muted">{{$car->brandname}}</small>
                        </h3>
                        <div class="button--wrapper">
                            <form action="/edit/{{$car->id}}" method="get">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            <form action="/delete/{{$car->id}}" method="get">
                                <button type="submit" class="btn btn-destruction">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <form action="/car/add" method="get">
            <button type="submit" class="add btn btn-primary">Add</button>
        </form>
        <div style="padding-bottom: 5rem"></div>
</div>
</body>
</html>
