@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data User
			<div class="panel-title pull-right"><a href="{{ route('users.create') }}">Tambah</a>
			</div>
		</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 1; @endphp
						@foreach($user as $data1)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data1->name }}</td>
							<td>{{ $data1->email }}</td>
							<td>
								<a class="btn btn-warning" href="{{ route('users.edit',$data1->id) }}">Edit</a>
							</td>
							<td>
							 	<form method="post" action="{{ route('users.destroy',$data1->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
							</form>
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
</div>
@endsection