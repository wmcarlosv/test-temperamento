@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3><i class="fas fa-users"></i> Usuarios</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fas fa-plus"></i> Nuevo Usuario</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>-</th>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
<script type="text/javascript">
    $("table.table").DataTable();
</script>
@stop