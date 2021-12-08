Feature: Calculate the number of values in an array that are a multiplier of either 4 or 6 (or both)
//Scenario outline can be implemented, but I wrote them separately for a better understanding of what scenarios are included

//positive testing
Scenario: Check that the multipliers of 6 are counted
    Given we have array "6, 18.0, -36"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "3"

Scenario: Check that the multipliers of 4 are counted
    Given we have array "4, -16, 0.20"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "3"

Scenario: Check that the multipliers of 4 and 6 are counted just once
    Given we have array "0,12, -60, 600.24"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "4"

Scenario: Check that the multipliers of 4 and 6 are counted correctly even if there is a long array
    Given we have array "0,6,13,c,hyte,-21,25,36,40,01,60,66,44,40,48,50,60,66,72,76,80,84,92,-500,320.06,120,160,180,abv,220,320,800,888," ",null,4,15,12,19,35,30,24,444,600,alabala,6,13,25,36,40,01,60,66,44,40,48,50,60,66,72,76,80,84,92,-500,320.06,120,160,180,abv,220,320,800,888," ",null, 4,15,12,19,35,30,24,444,600,alabala"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "61"


//negative testing
Scenario: Check that the numbers that are not multipliers of 4 or 6 (or both) are not counted
    Given we have array "1, 5.1, -379"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "0"

Scenario: Check that null values are not counted
    Given we have array "null"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "0"

Scenario: Check that empty values are not counted
    Given we have array " "
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "0"

Scenario: Check that alphanumeric values are not counted
    Given we have array "abv3"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "0"


Scenario: Check that alphanumeric values are not counted
    Given we have array "true"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "0"

Scenario: Check that special characters are not counted
    Given we have array "/&^%"
    When I check the number of multipliers of either 4 or 6 (or both)
    Then I should receive the answer "0"
