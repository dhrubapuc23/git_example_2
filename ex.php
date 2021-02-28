<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
$chuck = array("fullname" => "AB C", "room" => '123');
$chuck2 = array("familyname" => "CD E", "givenname" => "AB", "room" => '256');

function get_Person_Name($person)
{
    if(isset($person['fullname'])) return $person['fullname'];
    if(isset($person['familyname']) && isset($person['givenname']))
    {
        return $person['givenname'].' '.$person['familyname'];
    }
        

    return false;
}

print get_Person_Name($chuck). "\n";
print get_Person_Name($chuck2). "\n";*/
class Person{
    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;

    function get_Person_Name()
{
    if($this->fullname != false) return $this->fullname;
    if($this->familyname != false && $this->givenname != false)
    {
        return $this->givenname.' '.$this->familyname;
    }
        

    return false;
}


}

$first = new Person();
$first->fullname = "Alex Hales";
$first->room = "12345";

$second = new Person();
$second->familyname = "Gayle";
$second->givenname = "Chris";

print $first->get_Person_Name() . "\n";
print $second->get_Person_Name() . "\n";

/*echo "Today is " . date("Y/m/d") . "<br>";*/
use Datetime;

$now = new DateTime();
echo $now->format('Y-m-d H:i:s')."\n";    // MySQL datetime format
echo $now->getTimestamp();           // Unix Timestamp -- Since PHP 5.3
?>
</body>
</html>

