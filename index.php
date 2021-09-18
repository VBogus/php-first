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
        
        echo "to samoe 'chyvstvo', kogda konchilis slova i otkluchena \"fantazia\", da eshe i kavuchek \" ' \" napihali. <br>";
?>
<?php
        define('PASSWORD','ioe84fe#');
        echo '<div>', PASSWORD,'</div>';
?> 
<?php
        $a=5<1;// true
        echo $a, '<br>';
        $a=5==1;// False
        $a=5!=9;//True
        $a=3<>3;//False
        $a=9<3;//False
        $a=5+1;//6
        $a=1<=2;//true
        $a=-10 >=5;//false
        $a=0==1;// False
?>
<?php
        $user1=['name'=>'PEt9'];
        $user1['age']=25;
        $user2=['name'=>'Vlad'];
        $user2['age']=27;
       echo '<pre>';
        print_r([$user1,$user2]);
       echo '</pre>'; 
        $user1['age']*=1.5;
        $user2['age']*=1.5;
       echo '<pre>';
       print_r([$user1,$user2]);
      echo '</pre>';
?>