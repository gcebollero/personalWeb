<?php

$jsonfile = file_get_contents('./abilities.json');

$json = json_decode($jsonfile);

foreach ($json as $ability) {
    echo $ability->name_ES, "\n";
    echo $ability->text_ES,"\n";
    echo "value:";
    echo $ability->value,"\n";
}
echo $yummy->name_ES; //donut

?>
