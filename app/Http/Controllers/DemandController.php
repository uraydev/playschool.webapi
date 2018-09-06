<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDemandCreate;
use App\Source\DAL\Interfaces\Services\ICompanyService;
use Illuminate\Support\Facades\Input;
use Mockery\CountValidator\Exception;

/**
 * @resource Demand
 *
 * Требования
 *
 */
class DemandController extends _BaseApiController
{
    /**
     * @param ICompanyService $companyService
     */
    public function __construct(ICompanyService $companyService)
    {
        parent::__construct($companyService);
    }


    /**
     * Get All
     *
     * Получает коллекцию всех требований компании
     * @param $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($company)
    {
        $company = $this->getCompany($company);
        return response()->json($company->demands()->get(), 200, $this->header, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Get
     *
     * Получает конкретное требование компании
     * @param $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($company, $demand)
    {
        $company = $this->getCompany($company);
        $demand = $company->demands()->find($demand);
        if (is_null($demand)) $this->responseNotFoundDemand();
        return response()->json($demand, 200, $this->header, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store
     * Создает новое требование компании
     *
     * @param FormDemandCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormDemandCreate $request, $company_uid)
    {
        $company = $this->getCompany($company_uid);
        $newDemand = $company->demands()->create(Input::all());
        if (is_null($newDemand)) return response()->json('Ошибка при создани требования', 400, $this->header, JSON_UNESCAPED_UNICODE);
        return response()->json($newDemand, 200, $this->header, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update
     * Обновляет требование компании
     *
     * @param FormDemandCreate $request
     * @param $company_uid
     * @param $demand
     * @return null
     */
    public function update(FormDemandCreate $request, $company_uid, $demand)
    {
        $company = $this->getCompany($company_uid);
        $demand = $company->demands()->find($demand);
        if (is_null($demand)) $this->responseNotFoundDemand();
        $demand->name = Input::get('name');
        $demand->description = Input::get('description');
        $demand->save();
        return response()->json(true, 200, $this->header, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove
     * Удаляет требование компании по ID
     * @param $company_uid
     * @param $demand
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove($company_uid, $demand)
    {
        $company = $this->getCompany($company_uid);
        $demand = $company->demands()->find($demand);
        if (is_null($demand)) $this->responseNotFoundDemand();
        $demand->delete();
        return response()->json(true, 200, $this->header, JSON_UNESCAPED_UNICODE);
    }


    //region Responses
    /**
     * JsonResponse - заданная компания не нйдена
     * @return \Illuminate\Http\JsonResponse
     */
    protected function responseNotFoundDemand()
    {
        throw new Exception('Указанный ID требования не найден', 404);
    }

    //endregion
}
