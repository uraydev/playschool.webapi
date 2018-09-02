<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDemandCreate;
use App\Source\DAL\Interfaces\Services\ICompanyService;
use App\Source\DAL\Interfaces\Services\IDemandService;
use Illuminate\Support\Facades\Input;

/**
 * @resource Demand
 *
 */
class DemandController extends _BaseApiController
{
    private $demandService;
    private $companyService;

    /**
     * @param IDemandService $demandService
     * @param ICompanyService $companyService
     * @internal param IDemandService $service
     */
    public function __construct(IDemandService $demandService, ICompanyService $companyService)
    {
        parent::__construct($demandService);
        $this->demandService = $demandService;
        $this->companyService = $companyService;
    }

    /**
     * Store
     *
     * @param FormDemandCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormDemandCreate $request)
    {
        try {
            $findCompany = $this->companyService->find_object_by(Input::get('company_uid'), 'uid')->get();
            if ($findCompany === null || count($findCompany) === 0) return response()->json('Указанный UID компании не найден', 400, $this->header, JSON_UNESCAPED_UNICODE);
            if (count($findCompany)>1) return response()->json('По указанному UID найдено более одной компании', 400, $this->header, JSON_UNESCAPED_UNICODE);
            $company = $findCompany->first();
            $newDemand = $company->demands()->create(Input::get('demand'));
            if (is_null($newDemand)) return response()->json('Ошибка при создани требования', 400, $this->header, JSON_UNESCAPED_UNICODE);
            return response()->json($newDemand, 200, $this->header, JSON_UNESCAPED_UNICODE);
        } catch(Exception $e)
        {
            return response()->json($e->getMessage(), 500, $this->header, JSON_UNESCAPED_UNICODE);
        }
    }

    /**
     * Update
     *
     */
    public function update()
    {
        return null;
    }
}
