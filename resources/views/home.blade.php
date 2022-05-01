<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title> CRUD Eloquent | Home </title>
   </head>
   <body>
      <h1> CRUD Eloquent | Home </h1>

    @if (session('status'))
        <h5 style="color:green;">
            {{ session('status') }}
        </h5>
    @endif

      <div class="container mt-5">
         <div class="row">
            <div class="col-md-4">
               <!-- Form -->
               <form action="" method="POST">
                  @csrf
                  <div class="mb-3">
                     <label for="Emp_name" class="form-label">Employee Name</label>
                     <input type="text" class="form-control" name="Emp_name" id="Emp_name" placeholder="Employee name">
                  </div>
                  <div class="mb-3">
                     <label for="Emp_email" class="form-label">Employee Email </label>
                     <input type="text" class="form-control" name="Emp_email" id="Emp_email" placeholder="Employee Email">
                  </div>
                  <div class="mb-3">
                     <label for="Emp_address" class="form-label">Employee Address</label>
                     <input type="text" class="form-control" name="Emp_address" id="Emp_address" placeholder="Employee Address">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button class="btn btn-light" onClick="window.location.reload();">Refresh Page</button>
               </form>
            </div>
            <div class="col-md-8">
               <!-- Table -->
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Sl#</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Employee Email</th>
                        <th scope="col">Employee Address</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ( $company as $key => $listCompanise )
                     <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td> {{$listCompanise->Emp_name}} </td>
                        <td> {{$listCompanise->Emp_email}} </td>
                        <td> {{$listCompanise->Emp_address}} </td>
                        <td> 
                           <a href="/edit/{{$listCompanise->id}}" class="btn btn-info">Edit</a> 
                           <a href="/delete/{{$listCompanise->id}}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a> 
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