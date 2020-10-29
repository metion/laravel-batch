<?php declare(strict_types=1);

namespace Metion\Batch;

use Illuminate\Support\Facades\Facade;

class BatchFacade extends Facade
{
    /**
     * Get facade accessor to retrieve instance.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Batch';
    }
}
