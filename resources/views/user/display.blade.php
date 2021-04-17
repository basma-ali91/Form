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

        <!-- PHP code to read records will be here -->
        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>Action</th>
            </tr>

            <!-- table body will be here -->

            <!-- <a href='' class='btn btn-danger m-r-1em'>Delete</a>
            <a href='' class='btn btn-primary m-r-1em'>Edit</a> -->


            @foreach ($Users as $data )
                
              <tr>
                  <td>{{$data->id}} </td>
                  <td>{{$data->name}} </td>
                  <td>{{$data->email}} </td>
                  <td> <a  data-toggle="modal" data-target="#modal_single_del_{{$data->id}}" href='' class='btn btn-danger m-r-1em'>Delete</a> 
                       <a href='{{url('Users/'.$data->id.'/edit')}}' class='btn btn-primary m-r-1em'>Edit</a></td>
              </tr>




              <div class="modal" id="modal_single_del_{{$data->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">delete confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
                        </div>
            
                        <div class="modal-body">
                            <p> {{ 'Confirm to delete user  : '. $data->name }}</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{url('Users/'.$data->id)}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <div class="not-empty-record">
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>









            @endforeach



            <!-- end table -->
        </table>


       {{ $Users->links() }}


    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>