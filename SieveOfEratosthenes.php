<?php

//Sieve of Eratosthenes
//Eratosthenes Kalburu

$start = microtime(true);

function find_primes($finish) {

	$number = 2;
	$range = range(2, $finish);
	$primes = array_combine($range, $range);

	while ($number*$number < $finish) {
		for ($i = $number; $i <= $finish; $i += $number) {
			if ($i == $number) {
				continue;
			}
			unset($primes[$i]);
		}
		$number = next($primes);
	}
	return $primes;
}

$kacaKadar = find_primes(100000);

foreach ($kacaKadar as $key => $value) {
	echo $value."\n";
}

$stop = microtime(true);
$time = ($stop - $start);

echo ($time);
?>