<?php
for($i=0;$i<=6;$i++)
{
	for($k=6;$k>=$i;$k--)
	{
		echo "  ";
	}
	for($j=1;$j<=$i;$j++)
	{
		echo "*  ";
	}
	echo "<br>";
}
for($i=5;$i>=1;$i--)
{
	for($k=6;$k>=$i;$k--)
	{
		echo "  ";
	}
	for($j=1;$j<=$i;$j++)
	{
		echo "*  ";
	}
	echo "<br>";
}


function print_parttern_two($n){
	$r = ($n-1);

	for ($i=1; $i <= $n; $i++) { 
		for ($s=$r; $s >= 1 ; $s--) { 
			echo "&nbsp;";
		}
		for ($j=1; $j <= $i ; $j++) { 
			echo "*";
		}
		echo "<br/>";
		$r--;
	}


	$r = abs($r);	

	for ($i=$n; $i >= 1; $i--) { 
		for ($s=1; $s < $r ; $s++) { 
			echo "&nbsp;";
		}
		for ($j=$i; $j >= 1 ; $j--) { 
			echo "*";
		}
		echo "<br/>";
		$r++;
	}

}

print_parttern_two(5);

echo "Vishal"; ?>