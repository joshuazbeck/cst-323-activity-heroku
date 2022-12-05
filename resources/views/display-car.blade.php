<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Display All Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h2{
            text-align: center;
        }
        .top-section--car {
            text-align: center;
            padding-top: 0.5rem;
        }
        .top-section--car > .lead {
            padding: 0 0.3rem;
            flex-basis: 1;
        }

        .middle-section--car {
            text-align: center;
            padding-bottom: 1rem;
            display: flex;
            width: 100%;
            justify-content: center;


        }
        .middle-section--car > .lead {
            padding: 0 3rem;
        }
        .bottom-section--car {
            text-align: center;
        }
        hr {
            margin: auto 20rem;
        }
        .description {
            border: 1px solid lightgray;
            min-height: 7rem;
            margin: auto 5rem;
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
            View Car
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                @csrf

                <h2>{{$car->carname}}</h2>
                <hr>
                <div class="top-section--car">
                    <span class="lead">{{$car->year}}</span>
                    <span class="lead"> | </span>
                    <span class="lead">{{$car->brandname}}</span>
                </div>

                <div class="middle-section--car">
                    <span class="lead"><small>{{$car->wheelnum}} Wheels</small></span>
                    <span class="lead"><small>{{$car->mileage}} Miles</small></span>
                    <span class="lead"><small>{{$car->accidentsreported}} Accidents</small></span>
                </div>
                <div class="bottom-section--car">
                    <h3><small>Description</small></h3>
                    <p class="lead description"><small> {{$car->description}} </small></p>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>
