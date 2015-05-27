@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Ganti Data Informasi Kriminalitas</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::model($infokriminalitas, array('route' => array('info-kriminalitas.update', $infokriminalitas->id), 'method' => 'PUT')) !!}

					<div class="form-group">
					{!! Form::label('kecamatan_id', 'Kecamatan') !!}
					{!! Form::select('kecamatan_id', $kecamatan, null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('kelurahan_id', 'Kelurahan') !!}
					{!! Form::select('kelurahan_id', $kelurahan, null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('namakriminalitas_id', 'Nama Kriminalitas') !!}
					{!! Form::select('namakriminalitas_id', $namakriminalitas, null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('tgl_info', 'Tanggal Informasi') !!}
					{!! Form::text('tgl_info', date('d-m-Y', strtotime($infokriminalitas->tgl_info)), array('class' => 'form-control', 'id' => 'datepicker')) !!}
					</div>
					
					<div class="form-group">
					{!! Form::label('informasi', 'Informasi Kriminalitas') !!}
					{!! Form::textarea('informasi', null, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Ganti Informasi Kriminalitas', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection