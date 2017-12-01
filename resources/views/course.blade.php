<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Course</title>
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
    .title {
        font-size: 84px;
        text-align: center;
        font-family: 'Raleway', sans-serif;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
  </style>
</head>
<body>
	<div id="content">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/home') }}">
              Home
          </a>
				</div>
				@if(isset($user_id))
				<div class="nav navbar-nav navbar-right">
					<a href="{{ route('logout') }}"
  						onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <h4 id="logout"><span class="glyphicon glyphicon-log-out"></span>Logout</h4>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
				</div>
				@endif
			</div>
		</nav>

		<div class="title m-b-md">Course</div>
		@yield('content')

		@if($courses != '')
			@foreach ($courses as $course)
			<div class="container">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h5 class="panel-title">{!!$course->title!!}</h5>	
					</div>
					<div class="panel-body">
						<h5>Course level : {{$course->level}}</h5>	
						<br>
						@if(isset($user_id))
						<h5>Comment ... <span class="glyphicon glyphicon-pencil"></span></h5>
						<form action="comment/{{$course->id}}" method="post" role="form">
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							<div class="form-group">
								<textarea class="form-control" name="content" row="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Send</button>
						</form>
						@endif
					</div>
				</div>
			</div>
			@endforeach	
		@else
			{{'No course!'}}
		@endif
	</div>
</body>
</html>