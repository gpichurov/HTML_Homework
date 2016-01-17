/**
 * 
 */

var array = [1, 2, 3];

var arrayFromConstructor = new Array(2);

//array_push($array, 5);
array.push(5);

// array_pop($array)
array.pop()

// array_shift($array)
array.shift()

// array_unshift($array, 5)
array.unshift(5)
// where to start, how many to remove, what to add
array.splice(1, 1, 5, 4, 6);

// array_search($array, 5) => 1

array.indexOf(5);