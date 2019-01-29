@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<?php 

	
			
			
			function countSetBits($n) 
			{ 
			    $count = 0; 
			    while ($n) 
			    { 
			        $count += $n & 1; 
			        $n >>= 1; 
			    } 
			    return $count; 
			} 
			  
			// Driver Code 
			$a = 7;
			$b = 3;
			$c = ($a * $b);
			echo "Penjumlahan = "."$a".""."x".""."$b"."="."$c"."<br>";
			echo "Angka Biner = ".decbin($c)."<br>"; 
			echo "Jumlah Angka 1 = ".countSetBits($c); 

		?>
		</div>
	</div>
</div>
</div>
@endsection