<?php

//task1//////////////////////////////////////////////////////////////////////////////////////////
echo("Task1");
$numbers=[1,2,3,4,5,6,7,8,9,10];
rsort($numbers);
print_r($numbers);
echo("<br>");
$sum=array_sum($numbers);
echo("Sum = $sum");
$avg=$sum/count($numbers);
echo("<br>");
echo("Avg = $avg");
echo("<br>");
$odd=array_filter($numbers,function($number){return $number % 2 != 0;});
rsort($odd);
print_r($odd);
//task2////////////////////////////////////////////////////////////////////////////////////////////
echo("<br>");
echo("TAsk 2");
$dates=[
    date_create('10-4-2001'),
    date_create('20-4-2001'),
    date_create('6-5-2001'),
    date_create('21-5-2001'),
    date_create('7-6-2001'),
    date_create('10-6-2001'),
    date_create('11-6-2001'),
    date_create('12-7-2001'),
    date_create('2-8-2001'),
    date_create('20-8-2001')

];
echo("Input dates: ");
for($i=0;$i<count($dates);$i++)
{
    echo (date_format($dates[$i],"d-m-Y").",");
};


for($i=0;$i<count($dates)-1;$i++)
{
    $interval=$dates[$i]->diff($dates[$i+1])->format('%a');
    $ro=$i+1;
    $firstOperator=date_format($dates[$i],"d-m-Y");
    $secondOperator=date_format($dates[$i+1],"d-m-Y");
    echo("<br>");
    echo ("$secondOperator - $firstOperator  = $interval days");
};

//Task 3/////////////////////////////////////////////////////////////////////////
echo("<br>");
echo("Task 3");
echo("<br>");

$data=[["type"=>"text","value"=>"text1"],
    ["type"=>"radio","value"=>"radio1"],
    ["type"=>"checkbox","value"=>"checkbox1"],
    ["type"=>"button","value"=>"button1"],
    ["type"=>"text","value"=>"text2"],
    ["type"=>"text","value"=>"text3"],
    ["type"=>"radio","value"=>"radio2"],
    ["type"=>"radio","value"=>"radio3"],
    ["type"=>"checkbox","value"=>"checkbox2"],
    ["type"=>"button","value"=>"button2"]];

echo("<input type='{$data[0]['type']}' value='{$data[0]['value']}' style='display:block'>
<input type='{$data[1]['type']}' value='{$data[1]['value']}' style='display:block'>
<input type='{$data[2]['type']}' value='{$data[2]['value']}' style='display:block'>
<input type='{$data[3]['type']}' value='{$data[3]['value']}' style='display:block'>
<input type='{$data[4]['type']}' value='{$data[4]['value']}' style='display:block'>
<input type='{$data[5]['type']}' value='{$data[5]['value']}' style='display:block'>
<input type='{$data[6]['type']}' value='{$data[6]['value']}' style='display:block'>
<input type='{$data[7]['type']}' value='{$data[7]['value']}' style='display:block'>
<input type='{$data[8]['type']}' value='{$data[8]['value']}' style='display:block'>
<input type='{$data[9]['type']}' value='{$data[9]['value']}' style='display:block'>
");

//Task 4/////////////////////////////////////////////////////////////////////////
echo("<br>");
echo("Task 4");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");

$first=['color'=>'red','position'=>['x'=>25,'y'=>625]];
$second=['color'=>'green','position'=>['x'=>60,'y'=>660]];
$third=['color'=>'blue','position'=>['x'=>150,'y'=>650]];
echo("

<div style='width:300px; height: 200px;'>
    <div style='width:40px; border-radius: 50%; height: 40px; background-color:{$first["color"]}; position: absolute; top:{$first['position']['y']};left:{$first['position']['x']};'></div>
    <div style='width:40px; height:40px; background-color:{$second["color"]}; position: absolute; top:{$second['position']['y']};left:{$second['position']['x']};'></div>
    <div style='width:40px; border-radius: 20%; height:40px; background-color:{$third["color"]}; position: absolute; top:{$third['position']['y']};left:{$third['position']['x']};'></div>
</div>


");

//Task 5/////////////////////////////////////////////////////////////////////////
echo("<br>");
echo("Task 5");
echo("<br>");
$processor=['name'=>'amd','socket'=>'am3','frequency'=>'3,1','cores'=>'8'];
$motherboard=['name'=>'gigabyte','socket'=>'am3','ram'=>'ddr3'];
$ram=['name'=>'kingstone','type'=>'ddr4','capacity'=>'8Gb'];
$disk=['name'=>'samsung','type'=>'hdd','capacity'=>'100Gb'];
$block=['name'=>'samsung','power'=>'550Wt'];

echo("
<h1>PC</h1>
<h2>Processor :</h2>
<p>name: {$processor['name']}</p>
<p>socket: {$processor['socket']}</p>
<p>frequency: {$processor['frequency']}</p>
<p>cores: {$processor['cores']}</p>
<h2>Motherboard :</h2>
<p>name: {$motherboard['name']}</p>
<p>socket: {$motherboard['socket']}</p>
<p>ram: {$motherboard['ram']}</p>
<h2>RAM :</h2>
<p>name: {$ram['name']}</p>
<p>type: {$ram['type']}</p>
<p>capacity: {$ram['capacity']}</p>
<h2>DISK :</h2>
<p>name: {$disk['name']}</p>
<p>type: {$disk['type']}</p>
<p>capacity: {$disk['capacity']}</p>
<h2>Block :</h2>
<p>name: {$block['name']}</p>
<p>power: {$block['power']}</p>

");

//Task 6/////////////////////////////////////////////////////////////////////////
echo("<br>");
echo("Task 6");
echo("<br>");

$page=[['value'=>'Header','style'=>['height'=>'100','background-color'=>'red','color'=>'white']],
    ['value'=>'Content','style'=>['height'=>'250','background-color'=>'green','color'=>'gray']],
    ['value'=>'Footer','style'=>['height'=>'70','background-color'=>'blue','color'=>'orange']]
    ];

echo("
    <div>
        <div style='width:100%; height: {$page[0]['style']['height']}; background-color: {$page[0]['style']['background-color']}; color: {$page[0]['style']['color']};'>{$page[0]['value']}</div>
        <div style='width:100%; height: {$page[1]['style']['height']}; background-color: {$page[1]['style']['background-color']}; color: {$page[1]['style']['color']};'>{$page[1]['value']}</div>
        <div style='width:100%; height: {$page[2]['style']['height']}; background-color: {$page[2]['style']['background-color']}; color: {$page[2]['style']['color']};'>{$page[2]['value']}</div>
    </div>
");





