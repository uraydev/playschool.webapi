<?php

namespace App\Http\Controllers;

use App\Source\DAL\Interfaces\ICrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Session;

class _BaseApiController extends Controller
{
    protected $contextService;
    protected $directory;
    protected $indexRoute;

    protected $header = [ 'Content-Type' => 'application/json; charset=utf-8' ];

    public function __construct(ICrud $service)
    {
        $this->contextService = $service;
    }

    //region Ссылка на общую таблицу объектов
    public function setIndexRoute($route)
    {
        $this->indexRoute = $route;
        return $this;
    }

    public function getIndexRoute()
    {
        return $this->indexRoute;
    }
    //endregion

    //region Каталог модели
    public function setDirectory($directory)
    {
        $this->directory = $directory;
        return $this;
    }

    public function getDirectory()
    {
        return $this->directory;
    }
    //endregion


    //region Заголовок представления
    public function setHeader($type, $value)
    {
        if (is_null($this->header)) $this->header = [
            'index' => '',
            'create' => '',
            'edit' => ''
        ];
        $this->header[$type] = $value;
        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }
    //endregion


    /**
     * Выводит главную страницу со списком объектов
     *
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

    /**
     * Выводит страницу для редактирования объекта
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    protected function edit($id)
    {
        $object = $this->contextService->find_object_by_id($id);
        if ($object == null) {
            Session::flash('error_msg', 'Указанный объект не найден');
            return redirect()->route($this->indexRoute);
        } else
            return View($this->getDirectory() . '.edit')
                ->with('object_item', $object)
                ->with('index_route',$this->indexRoute);
    }

    /**
     * Удаляет объект
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->contextService->remove_object($id)) return $id;
        else return 0;
    }
}
