<?php
/**
 * Created by PhpStorm
 * Date 2022/10/6 15:15
 */

namespace Chance\Log\facades;

use Chance\Log\Facade;

/**
 * @method static created($model)
 * @method static updated($model)
 * @method static deleted($model)
 */
class IlluminateOrmLog extends Facade
{
    protected static function getFacadeClass(): string
    {
        return \Chance\Log\orm\IlluminateOrmLog::class;
    }
}