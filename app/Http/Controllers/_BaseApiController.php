<?php

namespace App\Http\Controllers;

use App\Source\DAL\Interfaces\ICrud;
use Mockery\CountValidator\Exception;

/**
 * Class _BaseApiController
 * @package App\Http\Controllers
 */
class _BaseApiController extends Controller
{
    protected $contextService;
    protected $header = ['Content-Type' => 'application/json; charset=utf-8'];

    public function __construct(ICrud $service)
    {
        $this->contextService = $service;
    }

    /**
     * Get all
     * Выводит коллекцию всех объектов
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {
        $data = $this->contextService->get_objects();
        return response()->json($data, 200, $this->header, JSON_UNESCAPED_UNICODE);
    }

//    /**
//     * Выводит страницу для создания объекта
//     *
//     * @param Request $request
//     * @return \Illuminate\Http\Response
//     */
//    protected function store(Request $request)
//    {
//        $this->contextService->new_object($request->all());
////        return View($this->getDirectory() . '.create')->with('index_route',$this->indexRoute);
//    }


//    /**
//     * Удаляет объект
//     *
//     * @param  int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        if ($this->contextService->remove_object($id)) return $id;
//        else return 0;
//    }

    /**
     * Remove
     * Удаляет объект
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    protected function destroy($id)
    {
        try {
            $find = $this->contextService->find_object_by_id($id);
            if (!isset($find)) return response()->json('Удаляемый объект не найден', 400, $this->header, JSON_UNESCAPED_UNICODE);
            if (!$this->contextService->remove_object($id)) return response()->json('Ошибка удаления объекта', 400, $this->header, JSON_UNESCAPED_UNICODE);
            return response()->json(true, 200, $this->header, JSON_UNESCAPED_UNICODE);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500, $this->header, JSON_UNESCAPED_UNICODE);
        }
    }
}
