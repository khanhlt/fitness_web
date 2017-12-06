@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cac khoa hoc ban vua dang ky : </h1>
        @foreach($cart as $data_item)
            {

            <td>{!!$data_item->course->title!!}</td>

            }
        @endforeach
        <h1>Cac khoa hoc khong the dang ky do da trung : </h1>
        @foreach($cart_deleted as $delete_item)
            {

            <td>{!!$delete_item->course->title!!}</td><br/>

            }

        @endforeach
    </div>

@endsection