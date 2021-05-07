@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')
    <div class="card card-success">
    	<div class="card-header">
    		<h3><i class="fas fa-user"></i> Actualizar Perfil</h3>
    	</div>
    	<form method="POST" action="{{ route('update_profile') }}">
    		@csrf
    		@method('put')
    		<div class="card-body">
    			<div class="form-group">
    				<label>Nombre:</label>
    				<input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" />
    			</div>
    			<div class="form-group">
    				<label>Email:</label>
    				<input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" />
    			</div>
    		</div>
    		<div class="card-footer text-right">
    			<button class="btn btn-success"><i class="fas fa-sync-alt"></i> Actualizar</button>
    		</div>
    	</form>
    </div>

    <div class="card card-success">
    	<div class="card-header">
    		<h3><i class="fas fa-key"></i> Cambiar Contraseña</h3>
    	</div>
    	<form method="POST" action="{{ route('change_password') }}">
    		@csrf
    		@method('put')
    		<div class="card-body">
    			<div class="form-group">
    				<label>Contraseña:</label>
    				<input type="password" name="password" class="form-control" />
    			</div>
    			<div class="form-group">
    				<label>Confirmar Contraseña:</label>
    				<input type="password" name="password_confirmation" class="form-control" />
    			</div>
    		</div>
    		<div class="card-footer text-right">
    			<button class="btn btn-success"><i class="fas fa-sync-alt"></i> Actualizar</button>
    		</div>
    	</form>
    </div>
@stop