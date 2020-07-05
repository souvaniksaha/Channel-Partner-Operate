<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5">
      @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong>{{session('status')}}
            </div>
      @endif

      @if(isset($errors) && $errors->any())

         <div class="alert-alert-danger">
             @foreach ($errors->all() as $error)
                {{$error}}
             @endforeach
         </div>

      @endif
    <form action="/area/store" method="post" enctype="multipart/form-data">
        @csrf
     <div class="form-group">
        <input type="file" name="file" id="file">
        <button type="submit" class="btn btn-success">Upload</button>
     </div>
    </form>
  </div>
  <div class="container mt-5">
    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">State</th>
            <th scope="col">District</th>
            <th scope="col">Pincode</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($cplist as $key => $item)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$item->state}}</td>
            <td>{{$item->district}}</td>
            <td>{{$item->pincode}}</td>
          </tr>
        @empty
          <tr>
              <td class="text-center" colspan="4">Not Available</td>
          </tr>
        @endforelse
        </tbody>
      </table>
      @if(count($cplist)>0)
         {{$cplist->links()}}
      @endif
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
