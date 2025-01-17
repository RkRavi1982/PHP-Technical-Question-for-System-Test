<?php
    echo '<h1>PHP LOOPS Example for Beginners: Technical Questions for System Test</h1>';
    
    echo '<h1>PHP While Loop with Example</h1>';

    $i=1;
    while ($i<=10)
    {
        echo $i;
        if($i<10)
        echo ',';
        $i++;
    }

    echo '<h1>PHP do While Loop using break; with Example</h1>';

    $j=1;
    do{

        echo $j;
        if($j<10)        
        echo ',';
        if($j>9)
        break;
        $j++;
    }while($j<=12);

    echo '<h1>PHP for Loop using continue; with Example</h1>';

    for($x=1;$x<=10;$x++)
    {
        echo $x;
        if($x<10)
        echo ',';
        continue;
    }

    echo '<h1>PHP foreach Loop using Array with Example</h1>';

    $arr = array("A","B","C","D","E");

    foreach($arr as $ar)
    {
        echo "$ar <br/>";
    }




?>