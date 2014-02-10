<?php

// Check if Palindrome – Checks if the string entered by the user is a palindrome. That is that it reads the same forwards as backwards like “racecar”

class PalindromeChecker {
		
	public static function isPalindrome($string) {

		$reverseString = implode(array_reverse(str_split($string, 1)));

		echo $string . " is ";
		echo ($reverseString === $string) ? 'a palindrome.' : 'not a palindrome';
	}
}

PalindromeChecker::isPalindrome('racecar');
?>
