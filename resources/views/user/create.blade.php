@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data User
			<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			</div>
		</div>
			<div class="panel-body">
				<form action="{{ route('users.store')}}" method="post">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name="name" required>
						@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label class="control-label">Email</label>
						<input type="text" class="form-control" name="email" required>
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" required>
						@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection