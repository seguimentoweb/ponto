@extends((Request::ajax())?"layout.ajax":"layout.panel")

@section('content')
	@include('panel.alerts')
	<div class="content-wrapper">
			
	{{ Form::model($user, ['method'=>'PATCH', 'route'=>['user.update', $user->id], 'id'=>'user']) }}
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					{{ Form::label('name', 'Nome:') }}
					{{ Form::text('name', null, array('class' => 'form-control')) }}
					@if ($errors->has('name'))
						{{ $errors->first('name') }}	
					@endif
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					{{ Form::label('surname', 'Sobrenome:') }}
					{{ Form::text('surname', null, array('class' => 'form-control')) }}
					@if ($errors->has('surname'))
						{{ $errors->first('surname') }}	
					@endif
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					{{ Form::label('email', 'Email:') }}
					{{ Form::text('email', null, array('class' => 'form-control')) }}
					@if ($errors->has('email'))
						{{ $errors->first('email') }}	
					@endif
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					{{ Form::label('level', 'Email:') }}
					{{ Form::select('level', array('1' => 'Funcionário', '2' => 'Gerente'), null, array('class' => 'form-control')) }}
					@if ($errors->has('level'))
						{{ $errors->first('level') }}	
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="checkbox">
				    <label>
						<input type="checkbox" role="toggle" data-target="#password-container"> Alterar senha
				    </label>
				</div>
			</div>
		</div>
		<div id="password-container" class="hide">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						{{ Form::label('password', 'Senha:') }}
						{{ Form::password('password', array('class' => 'form-control')) }}
						@if ($errors->has('password'))
							{{ $errors->first('password') }}	
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						{{ Form::label('password_confirmation', 'Confirme a senha:') }}
						{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
						@if ($errors->has('password_confirmation'))
							{{ $errors->first('password_confirmation') }}	
						@endif
					</div>
				</div>
			</div>
		</div>
	{{ Form::close() }}
	</div>
@stop

@section('title')
	Modificar usuário
@stop

@section('toolbar')
	<a role="submit" data-form="#user" class="btn btn-round primary"><i class="fa fa-check"></i></a>
	<a href="/user" class="btn btn-round btn-sm warning"><i class="fa fa-arrow-left"></i></a>
	<a class="btn btn-round btn-sm danger"><i class="fa fa-trash-o"></i></a>
@stop