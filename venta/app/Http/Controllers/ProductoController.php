<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//se indica el controlador(es) asocido(s)
use App\Producto;

//Librerias para Redireccionar una páginas, 
//para Capturar datos desde un formulario
//Para Conectarse a la BD
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;

class ProductoController extends Controller
{
    public function __construct()
    {

    }

    public function index()
	{
		$productos=DB::table('Producto')
        ->select('*')
        ->get();
		return view('productos.index',["productos"=>$productos]);
	}

	public function create()
	{
		
		return view("productos.create");
	}

	public function store(ArticuloFormRequest $request)
	{
		$articulo = new Articulo;	
		$articulo->idcategoria = $request->get('idcategoria');
		$articulo->idescala = $request->get('idescala');
        $articulo->nombre = $request->get('nombre');
		$articulo->perecedero = $request->get('perecedero'); 
		$articulo->estado = 'Activo';
		
        $articulo->stock = 0;
		$articulo->descripcion = $request->get('descripcion');
		$articulo->codigo = $request->get('codigo');
		if(Input::hasFile('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
			$articulo->imagen = $file->getClientOriginalName();
		}
		$articulo->precio_venta = 0;
		$articulo->save();
		return Redirect::to('deposito/articulo'); //para redireccionar al listado de categorias luego de alamacenar el nuevo objeto
	}

	public function show($id)
	{
		$articulo = Articulo::findOrFail($id)
		->first();
		$categoria = Categoria::findOrFail($articulo->idcategoria)
		->first();
		$escala = Escala::findOrFail($articulo->idescala)
		->first();
		return view("deposito.articulo.show",['articulo'=>$articulo , 'categoria'=>$categoria , 'escala'=>$escala]);
	}

	public function edit($id)
	{

		$producto = Producto::findOrFail($id)
		->get();
		return view("productos.edit",["producto"=>$producto]);
	}	

	public function update(ArticuloFormRequest $request, $id)
	{
		$articulo = Articulo::findOrFail($id);

		$articulo->idcategoria = $request->get('idcategoria');
		$articulo->nombre = $request->get('nombre');
		$articulo->stock = $request->get('stock');
		$articulo->descripcion = $request->get('descripcion');
        $articulo->estado = 'Activo';
        $articulo->idescala = $request->get('idescala');
		$articulo->perecedero = $request->get('perecedero');
		if(Input::hasFile('imagen')){
			$file=Input::file('imagen');
			$file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
			$articulo->imagen = $file->getClientOriginalName();
		}
		$articulo->codigo = $request->get('codigo');
		$articulo -> update();

		return Redirect::to('deposito/articulo');
	}

	public function destroy($id)
	{
		$articulo = Articulo::findOrFail($id);
		$articulo->estado = 'Inactivo';
		$articulo->update();
		return Redirect::to('deposito/articulo');
	}

	

}
