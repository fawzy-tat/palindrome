<?php
class Palindrome
{
    public static function isPalindrome($word)
    {

        if(strrev(strtolower($word)) == strtolower($word))
        {
          return True;
        }
        else
        {
          return False;
        }
        
    }
}

echo Palindrome::isPalindrome('Deleveled');
