<?php
    echo '<h1>PHP OPERATORS Example for Beginners: Technical Questions for System Test</h1>';
    echo '<h1>PHP Arithmetic operators with Example</h1>';
    $a = 10;
    $b = 20;
    $add = $a + $b;
    $sub = $a - $b;
    $mul = $a * $b;
    $div = $a / $b;
    $mod = $a % $b;
    $expo = $a ** $b;
    echo 'a=10 & b=20 <br/>';
    echo 'Addition Arithmetic operators a + b = ' . $add. '<br/>';
    echo 'Subtraction Arithmetic operators a - b = ' . $sub. '<br/>';
    echo 'Multiplication Arithmetic operators a * b = ' . $mul. '<br/>';
    echo 'Division Arithmetic operators a / b = ' . $div. '<br/>';
    echo 'Modulus Arithmetic operators a % b = ' . $mod. '<br/>';
    echo 'Exponentiation Arithmetic operators a ** b = ' . $expo. '<br/>';

    echo '<h1>PHP Array operators with Example</h1>';
    $a = array(0=>'php',1=>'python',2=>'java');
    $b = array(3=>'html',4=>'css',5=>'js');
    echo 'a = array(\'php\',\'python\',\'java\') & b = array(\'html\',\'css\',\'js\')<br/>';
    echo 'Union Array operator $a + $b:- ';print_r($a + $b);echo '<br/>';
    echo 'Non-identity Array operator $a !== $b:- ';var_dump($a !== $b);echo '<br/>';
    echo 'Inequality type 1 Array operator $a != $b:- ';var_dump($a != $b);echo '<br/>';
    echo 'Inequality type 2 Array operator $a <> $b:- ';var_dump($a <> $b);echo '<br/>';
    echo 'Equality Array operator $a == $b:- ';var_dump($a == $b);echo '<br/>';
    echo 'Identity Array operator $a === $b:- ';var_dump($a === $b);

    echo '<h1>PHP Assignment operators with Example</h1>';
    $a = 20;
    $b = 40;
    echo 'a=20 & b=40 <br/>';    
    echo 'Addition Assignment operator a += b:- ';$a += $b; echo $a .'<br/>';
    echo 'Subtraction Assignment operator a -= b:- ';$a -= $b; echo $a .'<br/>';
    echo 'Multiplication Assignment operator a *= b:- ';$a *= $b; echo $a .'<br/>';
    echo 'Division Assignment operator a /= b:- ';$a /= $b; echo $a .'<br/>';
    echo 'Modulus Assignment operator a %= b:- ';$a %= $b; echo $a .'<br/>';
    echo 'Union Assignment operator a = b:- b=';$a=$b; echo $a. '<br/>';

    echo '<h1>PHP Conditional Assignment operators with Example</h1>';
    
    $aa = 1;
    $bb = 1;
    $cc = '';

    echo 'aa=1 & bb=1 & cc = "" <br/>';    
    echo 'Ternary Conditional Assignment operator <b>?:</b> ';echo $out = $aa ? $bb : $cc.'';
    echo '<br/>Null coalescing Conditional Assignment operator <b>??</b> ';echo $out = $aa ?? $bb.'<br/>';

    echo '<h1>PHP Comparison Assignment operators with Example</h1>';
    $a = 10;
    $b = 30;
    $c = 10;
    echo 'a=10 & b=30 & c=10<br/>'; 
    echo 'Equal Comparison  operator a == b:- ';var_dump($a == $b);
    echo '<br/>Identical Comparison  operator a === b:- ';var_dump($a === $b) ;
    echo '<br/>NOT Identical Comparison  operator a !== b:- ';var_dump($a !== $b) ;
    echo '<br/>Not equal Comparison  operator a <> b:- ';var_dump($a <> $b) ;
    echo '<br/>Not equal Comparison  operator a != b:- ';var_dump($a != $b) ;
    echo '<br/>Greater than Comparison  operator a > b:- ';var_dump($a > $b) ;
    echo '<br/>Greater than or equal to Comparison  operator a >= b:- ';var_dump($a >= $b) ;
    echo '<br/>Less than Comparison  operator a < b:- ';var_dump($a < $b) ;
    echo '<br/>Less than or equal to Comparison  operator a <= b:- ';var_dump($a <= $b) ;
    echo '<br/>Spaceship Comparison  operator a <=> b:- ';echo $a <=> $b ;
    echo '<br/>Spaceship Comparison  operator b <=> b:- ';echo $b <=> $c ;
    echo '<br/>Spaceship Comparison  operator a <=> c:- ';echo $a <=> $c ;

    echo '<h1>PHP Increment/Decrement operators with Example</h1>';
    echo 'a=10 '; 
    echo '<br/>Pre-Increment  operator a++:- ';echo $a++ ;
    echo '<br/>Post-Increment  operator ++a:- ';echo ++$a ;
    echo '<br/>re-Decrement  operator a--:- ';echo $a-- ;
    echo '<br/>Post-Decrement  operator --a:- ';echo --$a ;

    $a = 10;
    $b = 30;
    $c = 10;

    echo '<h1>PHP Logical operators with Example</h1>';
    echo 'a=10 & b=30 & c=10 '; 
    echo '<br/>Logical operator (a==b and a==c) :- ';var_dump($a==$b and $a==$c) ;
    echo '<br/>Logical operator (a==c and a==b) :- ';var_dump($a==$c or $a==$b) ;
    echo '<br/>Logical operator (a==c xor a==b) :- ';var_dump($a==$c xor $a==$b) ;
    echo '<br/>Logical operator (a==c && a==b) :- ';var_dump($a==$c && $a==$b) ;
    echo '<br/>Logical operator (a==c || a==b) :- ';var_dump($a==$c || $a==$b) ;
    echo '<br/>Logical operator !(a==b) :- ';var_dump(!($a==$b)) ;

    echo '<h1>PHP String operators with Example</h1>';
    echo 'a=10 & b=30'; 
    echo '<br/>Concatenation operator (a.b) :- ';echo($a.$b) ;
    echo '<br/>Concatenation assignment operator (a.=b) :- ';echo($a.=$b) ;
?>