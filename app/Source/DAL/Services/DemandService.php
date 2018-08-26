<?php
namespace App\Source\DAL\Services;

use App\Source\DAL\Interfaces\Services\IDemandService;
use App\Source\Repository\DemandRepository;


class DemandService extends BaseCrudService implements IDemandService
{

    public function __construct(DemandRepository $context)
    {
        parent::__construct($context);
    }
}