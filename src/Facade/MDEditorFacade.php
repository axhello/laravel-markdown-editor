<?php
/**
 * Created by PhpStorm.
 * User: Axhello
 * Date: 4/1/16
 * Time: 13:09
 */
namespace Axhello\Editor\Facade;

use Illuminate\Support\Facades\Facade;

class MDEditorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MDEditor';
    }
}
