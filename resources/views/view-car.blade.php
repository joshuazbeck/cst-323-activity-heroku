<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>View Car Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

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
                All Listings
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Toyota Tacoma
                            <small class="text-muted">Toyota Brand</small>
                        </h3>
                        <div class="button--wrapper">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="submit" class="btn btn-destruction">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
