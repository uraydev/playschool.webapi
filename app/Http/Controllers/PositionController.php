<?php

namespace App\Http\Controllers;

use App\Source\DAL\Interfaces\Services\IPositionService;

/**
 * @resource User
 *
 */
class PositionController extends _BaseApiController
{


    /**
     * UserController constructor.
     * @param IPositionService $service
     * @internal param IUserService $userService
     */
    public function __construct(IPositionService $service)
    {
        parent::__construct($service);
    }


    /**
     * Get all
     *
     * ������� ��������� ���� �������������
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
     * ������� ������������� �� ID
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
     * ��������� ������ ������������
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
     * ��������� ������ � ������������
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
     * ������� ������������
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
