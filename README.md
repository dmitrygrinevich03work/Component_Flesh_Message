# Component Flesh Messages
### 1. Be sure to start the session.
1.1. Setting up the session at the beginning of the page.
```php
session_start();
```
### 2. Connect component Flesh Messages:
```php
require_once "../Component/component.php";
```
### 3. Methods
3.1. To create a flash message, call the FleshMessages :: set_flash_message () method as an argument, specify the Flash message name and specify the message itself as the second parameter.
```php
FleshMessages::set_flash_message('name_flash_message', 'flash_message');
```
3.2. To create a call to a message, call the FleshMessages :: display_flash_message () method as an argument, specify the Name of the flash message, and as the second parameter, specify the Message Key.
 ```php
FleshMessages::display_flash_message('name_flash_message', 'key');
 ```
 - key "danger" - indicates the red color of the message.
 - key "success" - green message output!
 - key "warning" - orange message output!
### 4. Execute a query as in examples below:
 ```php
 session_start();
 require_once "../Component/component.php";
 
 FleshMessages::set_flash_message('name', 'Hello!');
 FleshMessages::display_flash_message('name', 'success');
  ```