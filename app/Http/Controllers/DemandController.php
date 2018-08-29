<?php

namespace App\Http\Controllers;

use App\Source\DAL\Interfaces\Services\IDemandService;

/**
 * @resource Demand
 *
 */
class DemandController extends _BaseApiController
{
    /**
     * UserController constructor.
     * @internal param IUserService $userService
     * @param IDemandService $service
     */
    public function __construct(IDemandService $service)
    {
        parent::__construct($service);
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
    }}
