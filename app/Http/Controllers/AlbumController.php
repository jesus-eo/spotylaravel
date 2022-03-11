<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumes = Album::all();

        return view('albumes.index', [
            'albumes' => $albumes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $album = new Album();

        return view('albumes.create', [
            'album' => $album
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumRequest $request)
    {
        //Validamos la request con validate accediendo a la función rules de app/http/request/storeAlbumRequest que es la encargada de validar.
        //Creamos un nuevo album y lo guardamos.
        //Con file recuperamos los archivos cargados con el name 'portada'
        //Si no desea que se asigne automáticamente un nombre de archivo a su archivo almacenado, puede usar el storeAsmétodo, que recibe la ruta, el nombre de archivo y el disco que se encuentra en config/filesystem(opcional) como argumentos,
        //Se crea la carpeta portadas y se guarda en storage/app/public
        // php artisan storage:link crea un enlace simbolico para poder ver desde fuera a las imagenes guardadas antes en store/app/public
        $validados = $request->validated();
        $album = new Album($validados);
        $album->save();
        $request->file('portada')->storeAs(
            'portadas',
            $album->id . '.jpg',
            'public',
        );
        return redirect()->route('albumes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
    }
}
