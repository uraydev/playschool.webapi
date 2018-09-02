<?php
namespace App\Source\DAL\Services;

use App\Source\DAL\Interfaces\Services\IUserService;
use App\Source\Repository\UserRepository;
use DB;
use Mockery\CountValidator\Exception;
use Session;
use Hash;
use Illuminate\Support\Facades\Input;

class UserService extends BaseCrudService implements IUserService
{

    public function __construct(UserRepository $context)
    {
        parent::__construct($context);
    }

    public function new_user($company, $data)
    {
        return $company->users()->create($data);
    }
}