<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Your Eyes</title>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css">
  
        
    <style>
        html,
        body {
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .stripe {
            background: repeating-linear-gradient(to right, #1E71B8 1px, #ffff 8px);
            padding: 0.5rem;
        }

        .sub-title {
            color: #1E71B8;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
<!--         @if (Route::has('login')) -->
<!--         <div class="top-right links"> -->
<!--             @auth -->
<!--             <a href="{{ url('/home') }}">Home</a> @else -->
<!--             <a href="{{ route('login') }}">Login</a> @if (Route::has('register')) -->
<!--             <a href="{{ route('register') }}">Register</a> @endif @endauth -->
<!--         </div> -->
<!--         @endif -->

        <div class="container-fluid mr-auto p-3" style="background-image: linear-gradient(to right, rgba(26,157,217,0.80) , white);">



        </div>
        <div class="stripe"></div>


        <div class="container">
        <div class="row pt-3"><div class="col"><a class="btn btn-secondary" href="{{route('survey.list')}}" role="button">Cancel</a></div></div>
            <div class="py-3 text-center">
                

                <h3>Adding image</h3>
              
            </div>


            <div class="row mb-4">
                <div class="col-md-12">
                    <hr>
                </div>


                @if ($errors->any())

                <div class="col-md-12">
                    <div class="alert alert-danger">
                    <?php print_r($errors);?>
                        Select an image
                    </div>

                </div>
                @endif

                
                <div class="col-md-12 mb-4">
                @if($survey->admin_image !='')
               
                <img src="{{ url($survey->admin_image) }}" class="rounded mx-auto d-block img-fluid" alt="">
                     <form action="{{ route('image.destroy', $survey->id)}}" method="post">
                  @csrf
                  <button class="btn btn-danger btn-sm mt-1" onclick="return confirm('Are you sure?')"  type="submit">Delete</button>
                </form>
                
                
             
                <hr class="mb-4">
                @endif
                
                </div>

                <div class="col-md-12">

                    <form class="needs-validation" novalidate method="POST" action="{{ route('survey.image',$survey->id)}}" autocomplete="off" enctype="multipart/form-data">
                    	
                        @csrf
                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Survey Image</label>
                                            <div class="col-md-6">
                                                <input id="admin_image" type="file" class="form-control" name="admin_image">
                                                
                                            </div>
                                        </div>
                      <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#54B3DF">Upload</button>
                    </form>
                </div>
            </div>
           
           
        </div>


    </div>
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
     
  </script>
  
</body>

</html>

