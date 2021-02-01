# PHP Notes

## Syntax
* Variable always starts with `$`
* String always has quotation or apostrophe
* Every statement ends with semi colon
* No such thing as dot notation
* Single line comment starts with 2 slashes or hash| pound sympol
* Multiple line comment within /**/
* `exit` exit the execution

# Unique
* Does not have closure

### Variable
* Not start with numbers | special characters
* Should start with upper| lower case | underscore
* Global variables start with `global`

### Constant
* `define('Name', 'Value');`

### Conversion and Casting
* `"100" + 36.25 + True = 137.25` or `"sam" + 25 = 25` Not wise (Convert expression values silently and aggressively via operator)
* False converse to nothing (string) or 0 (numeric) `strpos use ====`
* Force casting `(int) 9.9`

## Magic Quotation
* Placeholder string like js use quotation
* Literal string (print dollar sign) use apostrophe

## Data Types
* String 
* Integer
* Decimal / Float
* Boolean
    * false == 0
* Array
    * Not type-strict
* Object


## Operator
* Concatenation use dot
* Null coalescing operator `??` like C# ( >= PHP 7.0) suppress non-fatal error

## Function
* `echo` & `print` to print
* `print_r` print human-readable
* `var_dump` 
* `function_existes("name")`

## Array
* Define `[]` `array()`

## Associative Array
* Fat Arrow 🤣

## Loop
* For loop
* do while loop
* while loop
* foreach loop
    * `foreach ($collection as $e)`

## Comparison
* Has both strict and loose comparison

## Function
* Default value in parameter `$name = value`
* Specifing names of arguments when passing in DOES NOTHING (verbosity)

## Super Global Variables
* Access with `$_GET|POST|REQUEST['name']`

## Form
* `$_REQUEST` = `$_GET` | '$_POST'
* inject `<?= value?>` use `htmlentites($value)`