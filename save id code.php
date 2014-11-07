$str = substr('00000000' . 11, -6);
$targetArray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$rand = array_rand($targetArray, 6);
foreach ($rand as $key => $value) {
    echo $targetArray[$value];
}