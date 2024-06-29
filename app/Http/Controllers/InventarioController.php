<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\InventarioRequest;
use DB;
use Auth;
use DataTables;
use Session;


class InventarioController extends Controller
{
    // Retornar vista
    public function getVista(){
        return view('inventario');
    }

    // Obtener inventario de base de datos
    public function getInventario(){
        $inventory = DB::table('inventario')->select(['*'])->where('user_id', Auth::user()->id);
        return DataTables::of($inventory)->make(true);
    }

    // Obtener vista para agregar producto
    public function addInventario(){
        return view('addInventario');
    }

    // Guardar producto 
    public function storeInventario(InventarioRequest $request){
        $product = DB::table('inventario')->insert(
            [
              'nombre' => $request['nombre'],
              'descripcion' => $request['descripcion'],
              'cantidad' => $request['cantidad'],
              'precio' => $request['precio'],
              'user_id' => Auth::user()->id,
            ]
        );

        if($product){
            Session::flash('message-success', 'Producto agregado correctamente.');
            return redirect()->route('inventario');
        }else{
            Session::flash('message-error', 'No se agrego el producto.');
            return redirect()->route('addInventario');
        }
    }

    public function editInventario($id){
        $producto = DB::table('inventario')->select(['*'])->where('id', $id)->first();
        return view('editInventario', compact('producto'));
    }

    public function updateInventario(Request $request,$id){
        $product = DB::table('inventario')->where('id',$id)->update(
            [
              'nombre' => $request['nombre'],
              'descripcion' => $request['descripcion'],
              'cantidad' => $request['cantidad'],
              'precio' => $request['precio'],
              'user_id' => Auth::user()->id,
            ]
        );

        if($product){
            Session::flash('message-success', 'Producto guardado correctamente.');
            return redirect()->route('inventario');
        }else{
            Session::flash('message-error', 'No se guardo el producto.');
            return redirect()->route('editInventario');
        }
    }

    public function deleteInventario(Request $request){
        $eliminar = DB::table('inventario')->where('id',$request['id'])->delete();
        Session::flash('message-success', 'Producto eliminado correctamente.');
        return redirect()->route('inventario');
    }
}
