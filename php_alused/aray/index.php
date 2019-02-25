<?php
function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
        $html .= '<th>' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$raamatud = array(
    array(
        'nimi'=>'Enesehinnangu tööraamat teismelistele',
        'autor'=>'Lisa M. Schab',
        'keel'=>'eesti',
        'hind'=>2,
        'lehekulgi'=>192),
    array(
        'nimi'=>'Põrsas Peppa. Esimesed numbrid',
        'autor'=>'eOne',
        'keel'=>'eesti',
        'hind'=>4,
        'lehekulgi'=>10),
    array(
        'nimi'=>'Jänku-Jass mängib peitust',
        'autor'=>'Julia Sigarova',
        'keel'=>'eesti',
        'hind'=>6,
        'lehekulgi'=>12)
);
echo build_table($raamatud);
?>