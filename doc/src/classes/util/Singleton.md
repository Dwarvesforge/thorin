# Singleton

Basic singleton class that expose a `getInstance` static method to
retreive the singleton instance of the class.
Support arguments if needed.


### Example
```php
	// without attributes
class MySingletonClass extends \Thorin\Singleton {
}
$myInstance = MySingletonClass::getInstance();

// with arguments
class MySingletonClassWithArgs extends \Thorin\Singleton {
    public function __construct($myArg) {
        // do something with $myArg
    }
}
$myInstance = MySingletonClassWithArgs::getInstance('hello');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)


## Constructor

Singleton class constructor


Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Protected**



## Static methods


### getInstance

Get the singleton instance of the class


#### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$args...  |  **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**  |  Some arguments that will be passed to the constructor  |  required  |

#### Example
```php
	// without attributes
$myInstance = MySingletonClass::getInstance();

// with arguments
$myInstance = MySingletonClassWithArgs::getInstance('hello');
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

**Public**

**Static**



## Protected methods


### $instance

Store the instance of the class

Type : **{ [Mixed](http://php.net/manual/en/language.pseudo-types.php#language.types.mixed) }**

**Protected**

**Static**

Default : **null**