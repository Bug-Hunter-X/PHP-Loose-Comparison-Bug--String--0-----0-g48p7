# PHP Loose Comparison Bug

This repository demonstrates a common, yet subtle bug in PHP related to loose comparison (==) and type juggling.  The issue arises when comparing user input against the integer 0.  Because of PHP's loose typing, the string "0" is considered equal to the integer 0, leading to unexpected behavior.

## Bug Description

The primary problem lies in the use of `==` instead of strict comparison `===`.  The loose comparison `==` performs type juggling before the comparison, converting the string "0" to an integer 0.  This leads to a condition that is unexpectedly met. The code will not function as intended if only numeric input is expected.

## Solution

The solution is to use strict comparison (`===`) to avoid type juggling. This ensures that both the type and the value are compared, preventing the erroneous behavior.