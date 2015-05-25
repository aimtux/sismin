@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Ganti Data Kelurahan</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::model($kelurahan, array('route' => array('kelurahan.update', $kelurahan->id), 'method' => 'PUT')) !!}

					<div class="form-group">
					{!! Form::label('kecamatan_id', 'Kecamatan') !!}
					{!! Form::select('kecamatan_id', $kelurahan->getKecamatanLists(), null, array('class' => 'form-control')) !!}
					</div>
					
					<div class="form-group">
					{!! Form::label('nama_kelurahan', 'Kelurahan') !!}
					{!! Form::text('nama_kelurahan', null, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Ganti Kelurahan', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection