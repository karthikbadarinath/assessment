[![Build Status](https://travis-ci.org/karthikbadarinath/assessment.svg?branch=master)](https://travis-ci.org/karthikbadarinath/assessment)

# Challenge

Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.

# Requirements (All ARE MANDATORY)

* PHP 7
* Maximum of 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge

# Submission
Create a repository on GitLab, GitHub or any other similar service and
just send us the link.

# Environment

### Installation

1. Download or clone the repository
2. Execute the composer command in project root:

```
    composer install
```
4. Run challenge php script in project root:

```
    php index.php
```

### Unit test

To run the PHPUnit tests execute the follow command in Terminal from project root:

```
    vendor/bin/codecept -d run unit
```
