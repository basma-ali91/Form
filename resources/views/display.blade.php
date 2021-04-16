<!DOCTYPE HTML>
<html>

<head>
    <title></title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }
        
        .m-b-1em {
            margin-bottom: 1em;
        }
        
        .m-l-1em {
            margin-left: 1em;
        }
        
        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>Registeration || <a href="{{url('createForm')}}">add</a></h1>
        </div>

        <!-- PHP code to read records will be here -->
        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>National ID</th>
                <th>About us</th>
                <th>Action</th>
            </tr>

            <!-- table body will be here -->

            <!-- <a href='' class='btn btn-danger m-r-1em'>Delete</a>
            <a href='' class='btn btn-primary m-r-1em'>Edit</a> -->


            @foreach ($RegisterData as $data )
                
              <tr>
                  <td>{{$data->id}} </td>
                  <td>{{$data->name}} </td>
                  <td>{{$data->age}} </td>
                  <td>{{$data->phone}} </td>
                  <td>{{$data->national_id}} </td>
                  <td>{{$data->about_us}} </td>
                  <td> <a href='{{url('delete/'.$data->id)}}' class='btn btn-danger m-r-1em'>Delete</a> 
                       <a href='{{url('Edit/'.$data->id)}}' class='btn btn-primary m-r-1em'>Edit</a></td>
              </tr>


            @endforeach



            <!-- end table -->
        </table>


       {{ $RegisterData->links()}}


    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>