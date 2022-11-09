# Вывод слова наоборот

## Библиотека позволяет вывести заданное слово наоборот

- PHP 7.0

## Установка

```bash
$ composer require svatelnet/my-library
```

## Использование

```php
<?php
$newWord = new ReverseService();
echo $newWord->reverse('string');
```