<?php
namespace App\Source\DAL\Services;

use App\Source\DAL\Interfaces\Services\ICompanyService;
use App\Source\Repository\CompanyRepository;
use Mockery\CountValidator\Exception;


class CompanyService extends BaseCrudService implements ICompanyService
{

    public function __construct(CompanyRepository $context)
    {
        parent::__construct($context);
    }

    public function init_company($array)
    {
        try {
            $newCompany = $this->context->create($array);
            if ($newCompany === null) return null;
            return $newCompany;
        } catch (Exception $e) {
            return null;
        }
    }
}
