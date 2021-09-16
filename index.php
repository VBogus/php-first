<?php
        $title='1 gift';
        echo '<h1>', $title,'</h1>';
        $title=' 2 gist';
        echo '<div>', $title, '</div>';
unset($title);
?>

<?php
        $price=1500;
        $shipping=200;
        $name='AK-47';
        echo $name,' = ', $price, '<br>';
echo 'Delivery=', $shipping,'p.<br>';
echo 'Price+Delivery=', $price+$shipping, 'p.<br>';
?>

<?php
        $vasya=25000;
        $petya=30000;
                echo 'Petya bulo=',$petya, 'stalo=',$petya*1.15, '<br>';
                echo 'Vasy bulo=', $vasya,'Stalo=', $vasya*1.2, '<br>';
?>
'<br>';
<?php
        $vsego=1000;
        $djon=100;
        $stolerman=150;
        $ivan=235;
        echo 'Djon vladeet=',$djon/$vsego*100,'akciy.<br>';
        echo 'Stolerman vladeet=',$stolerman/$vsego*100,'akciy<br>';
        echo 'Ivan vladeet=', $ivan/$vsego*100,'akciy<br>';
        echo 'Vsego=',$vsego, 'Prodano=',$djon+$ivan+$stolerman, 'akciy<br>';
?>

<?php   
        $type='Igra';
        $name='"World of Warcfart"';
        echo "<h1>$type $name</h1>";
?>

<?php
        $chyc="'chyvstvo'";$fant='"fantaziy"';$kav=''';
        echo "<h1>To samoe $chyc, kogda konchilis slova i otkl $fant, da eshe i "$kav" </h1>"
