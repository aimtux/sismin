@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Ganti Data Kecamatan</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::model($kecamatan, array('route' => array('kecamatan.update', $kecamatan->id), 'method' => 'PUT')) !!}

					<div class="form-group">
					{!! Form::label('nama_kecamatan', 'Kecamatan') !!}
					{!! Form::text('nama_kecamatan', null, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Ganti Kecamatan', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection