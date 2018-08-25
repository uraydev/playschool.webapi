<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormUserMeta;
use App\Source\DAL\Interfaces\Services\IUserMetaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mockery\CountValidator\Exception;

/**
 * @resource UserMeta
 */
class UserMetaController extends _BaseApiController
{
    /**
     * @param IUserMetaService $service
     */
    public function __construct(IUserMetaService $service)
    {
        parent::__construct($service);
    }

    /**
     * Store
     *
     * Добавляет метаданные для пользователя
     *
     * @param FormUserMeta $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormUserMeta $request)
    {
        try {
            $data = $this->contextService->new_object(Input::all());
            if ($data === null) return response()->json('Ошибка создания объекта', 400, $this->header, JSON_UNESCAPED_UNICODE);
            return response()->json($data->toArray(), 200, $this->header, JSON_UNESCAPED_UNICODE);

        } catch(Exception $e)
        {
            return response()->json($e->getMessage(), 500, $this->header, JSON_UNESCAPED_UNICODE);
        }
    }

    /**
     * Get UserMeta
     * 
     * Выводит метаданные по ID пользователя
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update
     *
     * Обновляет метаданные о пользователе
     *
     * @param FormUserMeta $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormUserMeta $request, $id)
    {
        try {
            $data = $this->contextService->update_object(Input::all(), $id);
            if ($data === 0) return response()->json('Ошибка обновления объекта', 400, $this->header, JSON_UNESCAPED_UNICODE);
            return response()->json(true, 200, $this->header, JSON_UNESCAPED_UNICODE);

        } catch(Exception $e)
        {
            return response()->json($e->getMessage(), 500, $this->header, JSON_UNESCAPED_UNICODE);
        }
    }

    /**
     * Remove
     * 
     * Удаляет метаданные пользователя
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
