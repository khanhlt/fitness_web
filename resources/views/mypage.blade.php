@extends('layouts.app')

@section('content')
    <div class="container" style="height: 470px">
        <form action="{{route('reg_course')}}" method="post">
            {{csrf_field()}}
            <fieldset>
                <input type="submit" name="Submit">
                <table>
                    <tr>
                        <th>Course name</th>
                        <th>Done</th>
                    </tr>
                    @foreach($course as $course_item)
                        <tr>
                            <td><?php trim($course_item->title,'{}') ?></td>
                            <td><input type="checkbox" name="checkbox[]"
                                       value="<?php echo $course_item->id;?>" value="checked"/></td>
                        </tr>

                    @endforeach
                </table>


            </fieldset>
        </form>
    </div>

@endsection