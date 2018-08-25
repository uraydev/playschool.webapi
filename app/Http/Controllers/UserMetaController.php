<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMeta;

/**
 * @resource UserMeta
 */
class UserMetaController extends Controller
{
    /**
     * Get all
     * 
     * Выводит коллекцию всех метаданных пользователей
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserMeta::all();
        $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
        return response()->json($data, 200, $headers, JSON_UNESCAPED_UNICODE);
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
