<?php
echo phpversion();
// Array representing a possible record set returned from a database
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 
//$first_names = array_column($records, 'first_name'); // can use in php version > 5.5
print_r($first_names);
//If two keys are the same, the second one prevails.
//Example:
echo '<br/><br/>';
print_r(array_combine(Array('a','a','b'), Array(1,2,3)));

//Returns:
/*Array
(
    [a] => 2
    [b] => 3
)*/
echo '<br/><br/>';
$string = "hello world";
$array_1 = str_split($string);
print_r(array_count_values($array_1));
$array = array(1, "hello", 1, "world", "hello");
//$array = array('h','e','l','l','o','w','o','r','l','d');
print_r(array_count_values($array));
echo '<br/><br/>';
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);
echo '<br/><br/>';
$input = array("a" => 1, "b" => 1, "c" => 2);
$flipped = array_flip($input);

print_r($flipped);
echo '<br/><br/>';
$search_array = array('first' => null, 'second' => 4);

// returns false
isset($search_array['first']);

// returns true
array_key_exists('first', $search_array);
echo '<br/><br/>';
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);

echo '<br/><br/>';
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

// note the differences in the array keys
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));
echo '<br/><br/>';
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
// $input is now array("red", "green")

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
// $input is now array("red", "yellow")

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
// $input is now array("red", "orange")

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
// $input is now array("red", "green",
//          "blue", "black", "maroon")

$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
// $input is now array("red", "green",
//          "blue", "purple", "yellow");
echo '<br/><br/>';
echo '<br/><br/>';
ECHO 'CHECK HERE';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');
echo '<br/>';
array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');

$origDate = '2014-03-27';
//function dateToDateTimeTransform($origDate){
        $transformedDate = new DateTime($origDate);
        // $transformedDate->add(DateInterval::createFromDateString($now->getTimestamp() . ' seconds'));
        $now = new DateTime('now');
        print_r($now);
        $today = new DateTime(date('Y-m-d'));
        print_r($today);
        $time = $today->diff($now);
        $transformedDate->add($time);

        echo $transformedDate->format('Y-m-d H:i:s');

        $test = new DateTime('02/09/2011');
        echo 'check this'.date_format($test, 'Y-m-d H:i:s');
  //  }
echo '<br/>';echo '<br/>';
//$base = array("orange", "banana", "apple", "raspberry");
$base = array('a'=>'orange','aa'=>'banana','c'=>'apple');
$replacements = array('a' => "pineapple", 'd' => "cherry");
$replacements2 = array('a' => "grape");

$basket = array_merge($base, $replacements, $replacements2);
print_r($basket);
echo '<br/>';echo '<br/>';
$array1 = array("course1" => "java","course2" => "sql");
$array2 = array("course1" => "php","course3" => "html");
$result = array_merge($array1, $array2);
$result1 = array_replace($array1,$array2);
print_r($result);print_r($result1);


$stack = array("orange", "banana", "apple", "raspberry");
echo 'array pop'.array_pop($stack);

?>