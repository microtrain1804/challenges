<?php
echo "<h2>Solution 1</h1>";
$show=<<<'EOT'
<pre style="background: #ccc; padding: 1rem; font-size: .8rem;">
$seed = [1,2,4,0,9,5,7];

$allNums = range(0, max($seed));

$missing = array_diff($allNums, $seed);

asort($missing);

foreach( $missing as $num ) {

  echo "{$num}&lt;br&gt;";

}
</pre>
EOT;

echo $show;
echo "<h3>Output</h3>";

// -- BEGIN SOLUTION
$seed = [1,2,4,0,9,5,7];

$allNums = range(0, max($seed));

$missing = array_diff($allNums, $seed);

asort($missing);

foreach( $missing as $num ) {

	echo "{$num}<br>";

}


// -- END SOLUTION




echo "<h2>Solution 2</h1>";
$show=<<<'EOT'
<pre style="background: #ccc; padding: 1rem; font-size: .8rem;">
$arr = [1,2,4,0,9,5,7];
$limit = max($arr);
$li='';
for($i=0; $i<=$limit; $i++){

  if(!in_array($i, array_values($arr))){
    $li .=  "&lt;li&gt;{$i}&lt;/li&gt;";
  }

}

echo "&lt;ul&gt;{$li}&lt;/ul&gt;";
</pre>
EOT;

echo $show;
echo "<h3>Output</h3>";




// -- BEGIN SOLUTION
$arr = [1,2,4,0,9,5,7];
$limit = max($arr);
$li='';
for($i=0; $i<=$limit; $i++){

	if(!in_array($i, array_values($arr))){
		$li .=  "<li>{$i}</li>";
	}

}

echo "<ul>{$li}</ul>";
// -- END SOLUTION
