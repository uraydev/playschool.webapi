<?php
namespace App\Source\DAL\Services;

use App\Source\DAL\Interfaces\Services\IUserMetaService;
use App\Source\Repository\UserMetaRepository;
use DB;
use Mockery\CountValidator\Exception;
use Session;
use Hash;
use Illuminate\Support\Facades\Input;

class UserMetaService extends BaseCrudService implements IUserMetaService
{

    public function __construct(UserMetaRepository $context)
    {
        parent::__construct($context);
    }

    /**
     * Обновляет объект
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update_object($id, $data)
    {
        // TODO: Implement update_object() method.
    }

    /**
     * Создает новый объект
     * @param $data
     * @return mixed
     */
    public function new_object($data)
    {
        // TODO: Implement new_object() method.
    }
}