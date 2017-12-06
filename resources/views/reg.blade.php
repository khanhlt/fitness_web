@extends('layouts.app')

@section('content')
@foreach($data as $data_item)
{
{{$data_item}}

}

@endforeach	

@endsection