<?php


namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all(); //Obtener todos los registros de la tabla articles
        //Return para vistas en blade
        return view('components.list', ['articles' => $articles]);  //Retornar la vista index de articles con los datos obtenidos

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Metodo que se encarga de retornar una vista
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
