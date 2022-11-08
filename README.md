# Вывод слова наоборот

## Библиотека позволяет вывести заданное слово наоборот

- PHP 8.1

## Установка

```bash
$ composer require sveta/my-library
```

## Использование

```php
<?php
$newWord = new ReverseService();
echo $newWord->reverse('string');
```