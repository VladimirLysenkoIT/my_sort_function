<?php
/*
 *	Write a function whose input is an array with numeric elements. The function should return the array sorted
 *	by the frequency of repetition of elements in it, for example sort_function([3, 8, 1, 4, 1, 1, 3, 5, 7, 1, 8, 3])
 *	will return this result - [1, 1, 1, 1, 3, 3, 3, 8, 8, 4, 5, 7].
 **/
function sort_function($array)
{
    $counted_values = array_count_values($array);
    arsort($counted_values);
    foreach ($counted_values as $key => $value) {
    	for ($i=0; $i < $value; $i++) { 
    		echo $key;
    		echo "<br>";
    	}
    }
}
 
sort_function([3, 8, 1, 4, 1, 1, 3, 5, 7, 1, 8, 3]);