# NWCheckCompatibility 1.0
## Introduction
NWCheckCompatibility checks a PHP script for compatibility on the server it currently runs on. It returns true if your script runs fine on the server and an array with the unsupported functions on failure. It returns false if no functions were detected.
## License
The NWCheckCompatibility system is distributed under the **MIT License** which allows you to use it privately and commercially, to distribute, modify and sublicense it. You may not hold me liable and must include my name in the credits of your work.
NWCheckCompatibility was created by **Kurt Höblinger** as **NitricWare**.
## Requirements
NWCheckCompatibility requires PHP 5.x.
## Usage
In order to use NWCheckCompatibility, you just need to include the .php-file and write the use command.
```php
require "./path/to/NWCheckCompatibility.php”;
```
Done. No installation required.
### Example
```php
foreach (scandir("./Files/") as $file){
	if (substr($file,0,1) != "." AND !is_dir("./Files/$file")){
		$file = "./Files/$file";
		print_r(NWCheckCompatibility($file));
	}
}
```
This script scans a directory "Files" for NWCheckCompatibility;
## Functions
For information about the functions, please check the documentation inside the .php-file!
### With NWCompatibilityChecker you can:
* check for compatibility

## Changelog
v1.0
- initial release