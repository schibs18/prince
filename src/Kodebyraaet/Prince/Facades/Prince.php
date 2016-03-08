<?php namespace Kodebyraaet\Prince\Facades;

use Illuminate\Support\Facades\Facade;
use Kodebyraaet\Prince\PrinceInterface;

class Prince extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return PrinceInterface::class;
    }

}