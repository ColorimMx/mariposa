<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MenuCatalogo;

class MenuCatalogoController extends Controller
{
    public function menus(){
        $menus = MenuCatalogo::select('id','descripcion');
        return datatables()->of($menus)->addIndexColumn()->toJson();
    }
    public function index()
    {
        return view('layouts.menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = MenuCatalogo::UpdateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'descripcion' => $request->descripcion,
                'activo' => $request->activo
            ]);
        return response()->json(['sucess' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = MenuCatalogo::find($id);

        if($menu !== null){
            return response()->json([
                'status' => "200",
                'id' => $menu->id,
            ]);
        }else{
            return response()->json([
                'status' => "400",
                'id' => $id,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = MenuCatalogo::find($id);
        return response()->json($menu);
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = MenuCatalogo::find($id);
        $menu->delete();

        return response()->json(['sucess' => true]);
    }
}
