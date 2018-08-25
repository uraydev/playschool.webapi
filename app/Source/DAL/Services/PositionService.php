<?php
namespace App\Source\DAL\Services;

use App\Source\DAL\Interfaces\Services\IPositionService;
use App\Source\Repository\PositionRepository;
use DB;
use Mockery\CountValidator\Exception;
use Session;
use Hash;
use Illuminate\Support\Facades\Input;

class PositionService extends BaseCrudService implements IPositionService
{

    public function __construct(PositionRepository $context)
    {
        parent::__construct($context);
    }

    /**
     * ��������� ������
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update_object($id, $data)
    {
        // TODO: Implement update_object() method.
    }

    /**
     * ������� ����� ������
     * @param $data
     * @return mixed
     */
    public function new_object($data)
    {
        // TODO: Implement new_object() method.
    }
}