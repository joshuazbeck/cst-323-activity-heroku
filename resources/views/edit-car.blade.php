<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Car Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        label {
            text-align: center;
            width: 100%;
        }
        .button--wrapper{
            text-align: center;
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
            Add a New Car Listing
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                @csrf
                <div class="form-group">
                    <label for="title--car">Car Name</label>
                    <input type="text" id="carname" name="carname" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="title--car">Car Brand</label>
                    <input type="text" id="carbrand" name="carbrand" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="title--car">Year</label>
                    <input type="number" id="year" name="year" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="title--car">Number of Wheels</label>
                    <input type="number" id="numberofwheels" name="numberofwheels" class="form-control" step="3">
                </div>
                <div class="form-group">
                    <label for="title--car">Mileage</label>
                    <input type="number" id="mileaege" name="mileage" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="title--car">Accident Reported</label>
                    <input type="number" id="accidentreported" name="accidentreported" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="title--car">Description</label>
                    <textarea name="description" class="form-control" required=""></textarea>
                </div>
                <div class="button--wrapper">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
