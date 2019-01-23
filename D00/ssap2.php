#!/usr/bin/php
<?php
function cmp($a, $b)
{
    $al = strtolower($a);
    $bl = strtolower($b);
    
    $order = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    for ($i = 0; $i < strlen($a) || $i < strlen($b); $i++)
    {
        $posa = strpos($order, $al[$i]);
        $posb = strpos($order, $bl[$i]);
        if ($posa < $posb)
        return (-1);
        else if ($posa > $posb)
        return (1);
    }
}

$tab = array();
unset($argv[0]);
foreach($argv as $element) {
    $tab_tmp = array_filter(explode(' ', $element));
    foreach ($tab_tmp as $element_tmp)
    $tab[] = $element_tmp;
}
usort($tab, "cmp");
foreach($tab as $element)
echo("$element\n");
?>