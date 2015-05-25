@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nama Kriminalitas</div>

				<div class="panel-body">
				<a class="btn btn-small btn-success" href="{{ URL::to('nama-kriminalitas/create') }}">Tambah Nama Kriminalitas</a>
				<hr />
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Kriminalitas</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
    @foreach($namakriminalitas as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nama_kriminalitas }}</td>
            <td>

                <a class="btn btn-small btn-info" href="{{ URL::to('nama-kriminalitas/' . $value->id . '/edit') }}">Ganti</a>
                {!! Form::open(array('url' => 'nama-kriminalitas/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus', array('class' => 'btn btn-warning')) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection