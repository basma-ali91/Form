<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>{{$title}}</title>
  </head>
  <body>
    <div class="container">
   
            <form action="{{url('form')}}" method="post" enctype = "multipart/form-data">

                <h3>Registration Form</h3>
                @csrf
                    <div class="form-wrapper">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" 
                        value="{{old('name')}}"><br>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                    </div>
                    
                <div class="form-wrapper">
                    <label for="">Age:</label>
                    <input type="text" class="form-control" placeholder="Enter Your E_mail" name="age"   value="{{old('age')}}"><br>
                    @error('age')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
                </div>
                     
                <div class="form-wrapper">
                    <label for="">Phone:</label>
                    <input type="number" class="form-control" placeholder="Enter Your E_mail" name="phone"   value="{{old('phone')}}"><br>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>

                     
                <div class="form-wrapper">
                    <label for="">National ID</label>
                    <input type="number" class="form-control" placeholder="Enter Your E_mail" name="id"   value="{{old('id')}}"><br>
                    @error('id')
                     <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password"   value="{{old('password')}}"><br>
                    
                       @error('password')
                         <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                </div>
               
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">About Us</label>
                    <textarea class="form-control" name="about_us" rows="3" value="{{old('about_us')}}"></textarea><br>
                    @error('about_us')
                       <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   
  </body>
</html>