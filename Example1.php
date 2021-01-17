<?
$arr = array("red","green","blue","black","red","green","blue","black");
$addArr = array();
echo "<div style='display: flex; flex-wrap: wrap; width: 400px;'>";
while(count($addArr)<4){
    $i = rand(0, count($arr)-1);
    $color = $arr[$i];
    if(!in_array($color, $addArr)){
        array_push($addArr,$color);
        echo "<div style='background-color: $color; width: 200px; height: 200px;'></div>";
    }
}
echo "</div>"
?>