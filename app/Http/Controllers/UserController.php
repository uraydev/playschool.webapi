<?php

namespace App\Http\Controllers;

use App\Source\DAL\Interfaces\Services\IUserService;

/**
 * @resource User
 *
 */
class UserController extends _BaseApiController
{


    /**
     * UserController constructor.
     * @param IUserService $service
     * @internal param IUserService $userService
     */
    public function __construct(IUserService $service)
    {
        parent::__construct($service);
    }


    /**
     * Get all
     * 
     * Выводит коллекцию всех пользователей
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $data = User::all();
//        $headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
//        return response()->json($data, 200, $headers, JSON_UNESCAPED_UNICODE);
//    }

    /**
     * Get User
     * 
     * Выводит пользователей по ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Store
     * 
     * Добавляет нового пользователя
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }    

    /**
     * Update
     * 
     * Обновляет данные о пользователе
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
     * Удаляет пользователя
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
