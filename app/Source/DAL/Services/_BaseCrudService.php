<?php
namespace App\Source\DAL\Services;

use App\Source\Repository\BaseRepository;
use DB;
use Mockery\CountValidator\Exception;
use Session;

abstract class BaseCrudService
{
    protected $context;

    public function __construct(BaseRepository $context)
    {
        $this->context = $context;
    }

    /**
     * ���������� ��� ������ �������
     *
     * @return mixed
     */
    public function get_objects()
    {
        return $this->context->all();
    }

    /**
     * ������� ����� ������
     * @param $array
     * @param $id
     * @return mixed
     */
    public function  update_object($array, $id){
        return $this->context->update($array, $id);
    }

    /**
     * ������� ����� ������
     * @param $array
     * @return mixed
     */
    public function  new_object($array){
        return $this->context->create($array);
    }

    /**
     * ����� ������� �� id
     * @param $id
     * @return mixed
     */
    public function find_object_by_id($id)
    {
        return $this->context->find($id);
    }

    /**
     * ������� ������ �� ����
     * @param $id
     * @return mixed
     */
    public function remove_object($id)
    {
        try {
            $object = $this->context->find($id);
            if ($object == null) throw new Exception('������ �� ������');
            DB::beginTransaction();
            $this->context->delete($id);
            DB::commit();
            return true;
        } catch (Exception $e) {
            Session::flash('error_msg', $e->getMessage());
            DB::rollBack();
            return false;
        }
    }
}