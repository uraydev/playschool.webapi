<?php
namespace App\Source\DAL\Services;

use App\Source\DAL\Interfaces\Services\IDemandService;
use App\Source\Repository\DemandRepository;
use phpDocumentor\Reflection\Types\Object_;


class DemandService extends BaseCrudService implements IDemandService
{

    public function __construct(DemandRepository $context)
    {
        parent::__construct($context);
    }

    /**
     *
     * @param $company
     * @param $array
     * @return mixed
     */
    public function  new_demand($company, $array){
        return $company->demands()->create($array);
    }
}