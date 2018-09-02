<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCompanyCreate;
use App\Source\DAL\Interfaces\Services\ICompanyService;
use App\Source\DAL\Interfaces\Services\IDemandService;
use App\Source\DAL\Interfaces\Services\IUserService;
use Illuminate\Support\Facades\Input;

class CompanyController extends _BaseApiController
{
    private $companyService;
    private $userService;
    private $demandService;

    /**
     * @param ICompanyService $service
     * @param IUserService $userService
     * @param IDemandService $demandService
     */
    public function __construct(ICompanyService $service, IUserService $userService, IDemandService $demandService)
    {
        parent::__construct($service);
        $this->companyService = $service;
        $this->userService = $userService;
        $this->demandService= $demandService;
    }

    /**
     * Store
     *
     * Добавляет в дервео базы узел для компании
     *
     * @param FormCompanyCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCompanyCreate $request)
    {
        try {
            $data = $this->contextService->new_object(Input::all());
            if ($data === null) return response()->json('Ошибка создания объекта компании', 400, $this->header, JSON_UNESCAPED_UNICODE);
            $newUser = $this->userService->new_object(Input::get('user'));
            if ($newUser === null) return response()->json('Ошибка создания объекта пользователь', 400, $this->header, JSON_UNESCAPED_UNICODE);
            $this->userService->new_user($data, $newUser->toArray());
            return response()->json($data, 200, $this->header, JSON_UNESCAPED_UNICODE);

        } catch(Exception $e)
        {
            return response()->json($e->getMessage(), 500, $this->header, JSON_UNESCAPED_UNICODE);
        }
    }
}
