<?php

namespace App\Http\Controllers;

use App\Source\DAL\Interfaces\Services\IPositionService;

/**
 * @resource Position
 *
 */
class PositionController extends _BaseApiController
{


    /**
     * UserController constructor.
     * @param IPositionService $service
     * @internal param IUserService $userService
     */
    public function __construct(IPositionService $service)
    {
        parent::__construct($service);
    }

    /**
     * Get Position
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return null;
    }

    /**
     * Update
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return null;
    }

    /**
     * Store
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return null;
    }
}
