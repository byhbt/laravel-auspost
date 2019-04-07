<?php
declare(strict_types=1);

namespace Byhbt\Auspost\Facades;

use Illuminate\Support\Facades\Facade;

class Auspost extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'auspost';
    }
}
