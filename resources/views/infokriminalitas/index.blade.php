@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Informasi Kriminalitas</div>

				<div class="panel-body">
				<a class="btn btn-small btn-success" href="{{ URL::to('info-kriminalitas/create') }}">Tambah Informasi Kriminalitas</a>
				<hr />
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Kecamatan</td>
            <td>Kelurahan</td>
            <td>Jenis Kriminalitas</td>
            <td>Informasi</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
    @foreach($infokriminalitas as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->kecamatan->nama_kecamatan }}</td>
            <td>{{ $value->kelurahan->nama_kelurahan }}</td>
            <td>{{ $value->namakriminalitas->nama_kriminalitas }}</td>
            <td>{{ $value->informasi }}</td>
            <td>

                <a class="btn btn-small btn-info" href="{{ URL::to('info-kriminalitas/' . $value->id . '/edit') }}">Ganti</a>
                {!! Form::open(array('url' => 'info-kriminalitas/' . $value->id, 'class' => 'pull-right')) !!}
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