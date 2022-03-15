<?php
$employee = 
[
    'name' 	=> 'John',
'email' 	=> 'john@example.com',
'phone' 	=> '1234567890',
'hobbies' 	=> ['Football', 'Tennis'],
'profiles' 	=> ['facebook' => 'johnfacebook', 'twitter' => 'johntwitter']
];
foreach ($employee as $key => $value) {
    
    if (gettype($value) == "array"){
        echo $key."=>"."<br>";
        foreach ($value as $key2 => $val) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;".$key2."=>".$val."<br>";
        }
    }
    else
    echo $key."=>".$value."<br>";

  
}
?>
