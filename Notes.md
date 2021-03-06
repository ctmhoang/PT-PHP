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
* Have different syntax `abstract am func name`
* Use `parent` instead of `super`

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
* `error_log`
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
* reference use `&`

## Super Global Variables
* Access with `$_GET|POST|REQUEST['name']`
* `$_COOKIE`
    * `setcookie('key','val',time()+?)`
* `$_SESSION`
    * `session_start()` in the model
    * `session_destroy()`

### Cookieless
* Passing session ID via Post or Get
* `init_set`
    * `session.use_cookies,0`
    * `session.use_only_cookies,0`
    * `session.use_trans_sid,1`

## Form
* `$_REQUEST` = `$_GET` | '$_POST'
* Avoid HTML inject `<?= value?>` use `htmlentites($value)`
   * Do not call it after we put in the db, call it after we take data out of the db

## Error reporting
* `error_reporting(E_ALL);`
* `ini_set('display_errors', 1);` 
* PDO `$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);`

## PDO
* Insert | Delete
    * `prepare`
    * `execute`
* Query
    * `query`
    * `fetch(PDO::FETCH_ASSOC)` (This mode is useful in most situations)
## Modularity
* `require` or `include`
* `_once` lib

## Class
* `property_exists($obj,$key)`
* `method_exists)('')`
* has VAL
* `this` ins `self` cla
* `instance of`


## Trait 
* Like class
* grouping methods in a fine-grained and reliable way

## New ???
* static 
   * whatever class in the hierarchy you called the method on.
* self 
   & the actual class

## Magic Methods
* `__constructor`
   * `new` operator
   * Setting things up
   * Dependencies injection
   * Inhertion
* `__invoke`
   * `is_callable`
   * Can take args in signature
   * Dont wanna give a method name
   * Tidy things up
* `__isset($key)`
   * Check attribute is set
* `__set($key,$value)`
   * Intervene of setting up props
   * use this syntax `$obj->data[key] = value`
   * set property internally `$this->{$key}`
* `__get($key)`
   * Like  `__set` access
   * `method_exists($obj,$methodName)` <br> excec `$obj->{$methodName}`
   * Create presenter
      * Access any method as property
* `__toString()`
   * repr string of obj
   * Can be use for json encode
   * Prototype UI attributes
 * `__unset($key)`
   * like `__isset`
* `__call($name,$args)`
   * calling a method that does not exist
   * Use for decorator, dynamic method name
* `static __callStatic($name,$args)`
   * Facede technique
* `__debugInfo()`
   * overwrite `var_dump()`
   * `get_object_vars`
* `__clone`
   * use for deep clone
* `__destruct`
   * clean up
   * dispatch job
   * nomad model
* `__sleep` `__wakeup`
   * `un/serialize` class (`base64_encode`)
   * Customize data when un/serialize
* `static __set_state`
   * `var_export` -> export exec code
   * cache `file_put_contents`
# PHP 7.0+
* Expected return type
	* `signature : type`
	* `signature : ? type` potential null value
* Parameter type 
	* Like Java
   * Can be Null `? Type`
* Array Deconstruction
   * Use `list` or `[]` no key
   * `[key=>$varName]` has Key
   * Skip `,,`
   * Building `$var = [,] = [,]`
   * Nested use `[]`
   * `merge` last , `+` first
* Can use negative offset
* `void`,`iterable` Type
* Cons visibility
* Group Exception Catching ( Like java)
* Random num `mt_rand` `array_rand`
* Iterable imp `IteratorAggregate` `getIterator` `ArrayIterator`
* Callback `callable`
## Arrow Function
* `fn() => returnval`
* has scope of outer function
* Mul expr `[]`
* `compact`
* Can use type hinting
* `declare(strict_types=1)`
* `use ()` into scope of closure
