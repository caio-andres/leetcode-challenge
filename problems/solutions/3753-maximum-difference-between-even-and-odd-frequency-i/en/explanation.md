*Maximum difference between odd and even occurrences*
<br>
Then, the string will be traversed and the occurrence of the characters within the string will be stored.
If the problem asks for maximum difference, then if we find the largest odd number and the smallest even number, we will also find the solution.
<br><br>
difference = (largest odd) - (smallest even).
<br><br>
To store frequency numbers of a character, objects or functions can be used for this, but I chose to use a loop to store the frequencies as the value of a key, which is a character.
This structure, in Python, is dict() or {} and in PHP [] or array(), which is called an associative array.
<br><br>
And a second loop to find the even number and the odd number.
<br><br>
Note: in the Editorial, Counter and max and min functions are used in Python.
