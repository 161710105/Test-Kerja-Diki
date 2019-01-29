@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<?php 

		for ($i = 1; $i <= 45; $i++) {
			
	    if ($i % 2 == 0 && $i % 3 == 0 && $i % 5 == 0) {
	        echo 'CodilityTestCoders<br>';
	    } elseif ($i % 2 == 0 && $i % 3 == 0) {
	        echo 'CodilityTest<br>';
	    } elseif ($i % 2 == 0 && $i % 5 == 0) {
	        echo 'CodilityCoders<br>';
	    } elseif ($i % 3 == 0 && $i % 5 == 0) {
	        echo 'CodersTest<br>';
	    } elseif ($i % 2 == 0) {
	        echo 'Codility<br>';
	    } elseif ($i % 3 == 0) {
	        echo 'Test<br>';
	    } elseif ($i % 5 == 0) {
	        echo 'Coders<br>';
	    } else {
	        echo $i . '<br>';
	    }
	}

		?>
		</div>
	</div>
</div>
</div>
@endsection