<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
    <div class="container">



        <h1>Detail : </h1><br/>
        <table class="table">
            <thead >
            <tr>
                <th scope="col">Course Name </th>
                <th scope= "col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart_deleted as $delete_item)
                <tr>
                    <td><h4>{!!$delete_item!!}</h4></td>
                    <td><button type="button" class="btn btn-outline-dark">Fail</button></td>
                </tr>
            @endforeach

            @foreach($cart as $data_item)
                <tr>
                    <td><h4>{!!$data_item!!}</h4></td>
                    <td><button type="button" class="btn btn-outline-success">Success</button></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
@endsection