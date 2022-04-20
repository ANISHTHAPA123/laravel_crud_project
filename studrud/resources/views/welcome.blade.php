<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<title>query_builder</title>
</head>
<body>
<!-- <div class="container"> -->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="\"><b>StuMan</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
  </div>
</nav>  
<div class="container mt-5">
        <div class="row">
            
            <div class="col-sm-6">
                <form action=" " method="POST">
                    @csrf
                <div class="mb-3">
                    <h3> <b>Student details</b></h3> </br></br>
                    <label for="name" class="form-label">Name</label>
                    <input type="string" class="form-control" id="name" name="name">
                </div>  
                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div> 
                <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                    <input type="number" class="form-control" id="marks" name="marks">
                </div>    
                <button type="submit" class="btn btn-success">Submit</button>
               </form> 
               @if(session()->has('status'))  
               <div class="alert - alert-success"> 
                   {{session('status')}}
               </div> 
               @endif
               </div>
              
               <div class="col-sm-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $stu)
                        <tr>
                            <th>{{$stu->id}}</th>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->city}}</td>
                            <td>{{$stu->marks}}</td>
                            <td>
                                <a href="{{url('/edit',$stu->id)}}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
        
                </table>
            </div>
        </div>

    </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
