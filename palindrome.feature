Feature: Check if a string is a palindrome
//Scenario outline can be implemented, but I wrote them separately for a better understanding of what scenarios are included

//Check if palindrome - positive testing
Scenario: Check if a string with odd number of letters is a palindrome
    Given we have "racecar" string
    When I check if the string is a palindrome
    Then the response should be affirmative

Scenario: Check if a string with even number of letters is a palindrome
    Given we have "anna" string
    When I check if the string is a palindrome
    Then the response should be affirmative

Scenario: Check if a string with upper and lower case letters is a palindrome
    Given we have "Ana" string
    When I check if the string is a palindrome
    Then the response should be affirmative

Scenario: Check if a string with special characters is a palindrome
    Given we have "ma 1!?!1 am" string
    When I check if the string is a palindrome
    Then the response should be affirmative

Scenario: Check if a long string is a palindrome (401 characters)
    Given we have "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" string
    When I check if the string is a palindrome
    Then the response should be affirmative


//Check if it's not a palindrome - negative testing
Scenario: Check if a string with odd number of letters is not a palindrome
    Given we have "car" string
    When I check if the string is a palindrome
    Then the response should be negative

Scenario: Check if a string with even number of letters is not a palindrome
    Given we have "mama" string
    When I check if the string is a palindrome
    Then the response should be negative

Scenario: Check if a string with upper and lower case letters is not a palindrome
    Given we have "Anca" string
    When I check if the string is a palindrome
    Then the response should be negative

Scenario: Check if a string with special characters is a not palindrome
    Given we have "ma 21!?!1 am" string
    When I check if the string is a palindrome
    Then the response should be negative

Scenario: Check if a long string is not a palindrome (401 characters)
    Given we have "baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" string
    When I check if the string is a palindrome
    Then the response should be negative


// More negative testing
Scenario: Check if a null string can be checked as palindrome
    Given we have "NULL" string
    When I check if the string is a palindrome
    Then the string cannot be checked and proper message is displayed

Scenario: Check if a empty string can be checked as palindrome
    Given we have " " string
    When I check if the string is a palindrome
    Then the string cannot be checked and proper message is displayed
