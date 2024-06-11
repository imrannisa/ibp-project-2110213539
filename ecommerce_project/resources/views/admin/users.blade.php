<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style type="text/css">
        input[type='text']
        {
            width: 400px;
            height: 50px;
        }

        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid skyblue;
            margin-top: 50px;
            width: 500px;

        }
        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        td
        {
            color: white;
            padding: 10px;
            border: 2px solid skyblue;

        }
    </style>
</head>
<body>
@include('admin.header')

@include('admin.sidebar')
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">


            <form>
                <div>
                    <input type="text">
                </div>
            </form>

            <div>
                <table class="table_deg">
                    <tr>
                        <th>User's Name</th>
                        <th>User E-mail</th>
                        <th>User Type</th>
                        <th>User Phone</th>
                        <th>User Address</th>
                        <th>Edit</th>


                    </tr>
                    @foreach($data as $data)

                        <tr>

                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->usertype}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td>
                                <a class="btn btn-light" href="
                            {{url('edit_user', $data->id)}}">Edit</a>
                            </td>
                        </tr>


                    @endforeach

                </table>
            </div>




        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"> </script>
<script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admincss/js/charts-home.js')}}"></script>
<script src="{{asset('admincss/js/front.js')}}"></script>
</body>
</html>
