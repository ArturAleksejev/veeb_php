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
    array('Nimi'=>'Enesehinnangu tööraamat teismelistele', 'Autor'=>'Lisa M. Schab', 'Keel'=>'eesti', 'Lehekulgi'=>192),
    array('Nimi'=>'Põrsas Peppa. Esimesed numbrid', 'Autor'=>'eOne', 'Keel'=>'eesti', 'Lehekulgi'=>10),
    array('Nimi'=>'Jänku-Jass mängib peitust', 'Autor'=>'Julia Sigarova', 'Keel'=>'eesti', 'Lehekulgi'=>12)
);
echo build_table($raamatud);
?>