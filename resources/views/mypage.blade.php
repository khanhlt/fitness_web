
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@extends('layouts.app')

@section('content')
    <div class="container" style="height: 470px">
        <form action="{{route('reg_course')}}" method="post">
            {{csrf_field()}}
            <fieldset>
                <input class="btn btn-primary" type="submit" name="submit" value="Registration">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Course name</th>
                            <th>Done</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course as $course_item)
                        <tr>
                            <td><h1>{{$course_item->title}}</h1></td>
                            <td><input type="checkbox" name="checkbox[]"
                                       value="<?php echo $course_item->id;?>" value="checked"/></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

                {!! $course->links() !!}
            </fieldset>
        </form>
    </div>

@endsection