@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Masukan Informasi Kriminalitas</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}
					{!! Form::open(array('url' => 'info-kriminalitas')) !!}
					<div class="form-group">
					{!! Form::label('kecamatan_id', 'Kecamatan') !!}
					{!! Form::select('kecamatan_id', $kecamatan, Input::old('kecamatan_id'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('kelurahan_id', 'Kelurahan') !!}
					{!! Form::select('kelurahan_id', $kelurahan, Input::old('kelurahan_id'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('namakriminalitas_id', 'Jenis Kriminalitas') !!}
					{!! Form::select('namakriminalitas_id', $namakriminalitas, Input::old('namakriminalitas_id'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('tgl_info', 'Tanggal Informasi') !!}
					{!! Form::text('tgl_info', Input::old('tgl_info'), array('class' => 'form-control', 'id' => 'datepicker')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('jam_info', 'Jam Informasi') !!}
					{!! Form::text('jam_info', Input::old('jam_info'), array('class' => 'form-control', 'id' => 'timepicker')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('informasi', 'Informasi Kriminalitas') !!}
					{!! Form::textarea('informasi', Input::old('informasi'), array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Input Data!', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection