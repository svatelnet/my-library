<?php

declare(strict_types=1);

namespace Svatelnet\MyLibrary;

class ReverseService
{
    public function reverse(string $word): string
    {
        return strrev($word);
    }
}