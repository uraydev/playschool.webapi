<?php

namespace App\Http\Controllers;
use App\Source\DAL\Interfaces\Services\IUserMetaService;


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
