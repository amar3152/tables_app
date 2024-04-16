<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Multiplication Table Generator</h1>
    <form action="{{ route('generate-table') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="size">Table Size:</label>
            <input type="number" class="form-control" id="size" name="size" placeholder="Enter size (e.g., 10)" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Generate</button>
    </form>
<div class="row">
@if(isset($table))
    <div class="col-md-3">
   
        <table class="table table-striped solid mt-4">
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    
                        <td>{{ $sizes }} * {{ $i }} = {{ $table[$i] }}</td>

                </tr>
            @endfor
        </table>
  
    </div>
    <div class="col">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
             <div class="card-header">Square of {{$sizes}}</div>
            <div class="card-body">
                <h5 class="card-title">{{$square}}</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
             <div class="card-header">Cube of {{$sizes}}</div>
            <div class="card-body">
                <h5 class="card-title">{{$cube}}</h5>
            </div>
        </div>
    </div>
</div>
@endif
    
</div>
</body>
</html>
