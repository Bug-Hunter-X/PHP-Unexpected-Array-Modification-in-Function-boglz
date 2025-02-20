```php
function processData(array $data): array {
  // Create a copy to avoid modifying the original array.
  $newData = $data;
  // ... some code to process $newData ...
  return $newData;
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

// Now $myData remains unmodified.

foreach ($processedData as $value) {
  echo $value . " ";
}

//Alternatively, if you want to modify the original array use this:
function processData2(array &$data): void {
  //Modify the array in place. Note this uses a reference.
  // ... some code to process $data ...
}

$myData2 = [1, 2, 3, 4, 5];
processData2($myData2);
foreach ($myData2 as $value) {
  echo $value . " ";
}
```