<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5">
    <form action="/area/store" method="post" enctype="multipart/form-data">
        @csrf
       <div class="row">
           <div class="col-4">
                <label for="State">Select State</label>
                <select class="form-control input-lg dynamic" name="state" id="state" data-dependent="district">
                    <option value="">Select State</option>
                    @foreach ($allStates as $item)
                      <option value="{{$item[0]->state}}">{{$item[0]->state}}</option>
                    @endforeach
                </select>
           </div>
           <div class="col-4">
                <label for="State" >Select District</label>
                <select class="form-control input-lg dynamic" name="district" id="district" data-dependent="pincode">
                    <option>Default select</option>
                </select>
          </div>
          <div class="col-4">
            <label for="State">Select Pincode</label>
            <select class="form-control input-lg dynamic" name="pincode[]" id="pincode" multiple>
                <option>Default select</option>
            </select>
        </div>
       </div>
     </div>
    </form>
  </div>
<script>
        $(document).ready(function(){

            $('.dynamic').change(function(){
            if($(this).val() != '')
            {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('dynamicdependent.fetch') }}",
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result)
                    {
                      $('#'+dependent).html(result);
                    }
            })
            }
        });

                $('#state').change(function(){
                    $('#district').val('');
                    $('#pincode').val('');
                });

                $('#district').change(function(){
                    $('#pincode').val('');
                });

       })
   </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
