@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">MY PAGE ACTIONS</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('CheckActions')}}" method="post" role="form">
                            {{csrf_field()}}
                            <fieldset>
                                @foreach($content as $ct)
                                    <table>
                                        <tr>
                                            <td>{{$ct->content}}<br></td>
                                            <?php $done = \App\done_action::where('course_content_id', '=', $ct->id)->first(); ?>
                                            @if($done != NULL)
                                                <td>Done</td>
                                            @elseif( $done == NULL)
                                                <td><input type="checkbox" name="checkbox[]"
                                                           value="<?php echo $ct->id;?>" value="checked"/></td>
                                            @endif
                                        </tr>
                                    </table>
                                @endforeach
                                <input type="submit" name="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection