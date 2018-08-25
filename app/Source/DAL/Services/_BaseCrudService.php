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
     * Возвращает все записи таблицы
     *
     * @return mixed
     */
    public function get_objects()
    {
        return $this->context->all();
    }

    /**
     * Создает новый объект
     * @param $array
     * @param $id
     * @return mixed
     */
    public function  update_object($array, $id){
        return $this->context->update($array, $id);
    }

    /**
     * Создает новый объект
     * @param $array
     * @return mixed
     */
    public function  new_object($array){
        return $this->context->create($array);
    }

    /**
     * Поиск объекта по id
     * @param $id
     * @return mixed
     */
    public function find_object_by_id($id)
    {
        return $this->context->find($id);
    }

    /**
     * Удаляет объект из базы
     * @param $id
     * @return mixed
     */
    public function remove_object($id)
    {
        try {
            $this->context->delete($id);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}