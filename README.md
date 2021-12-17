## What is request ?

It is used to make $_GET, $_POST and $_FILES requests secure and organized.

data:
Parameters sent from the address line or form, for example:
```php
?username=aliyilmaz&password=123456&age=34
```

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
print_r($m::aliyilmaz('request')->request());
// print_r($m::aliyilmaz('request')->request('username'));
// print_r($m::aliyilmaz('request')->request(['username', 'password']));
```

**When using it in the class:**

code:
```php
print_r(self::aliyilmaz('request')->request());
// print_r(self::aliyilmaz('request')->request('username'));
// print_r(self::aliyilmaz('request')->request(['username', 'password']));
```

output:
```php
Array ( [username] => ali [password] => 123 [age] => 34 )
```

---

### Dependencies
1. [filter 1.0.0](https://github.com/aliyilmaz/filter)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/request/blob/main/LICENSE) license.