<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' =>'required',
        'descripcion' => 'required',
        'imagen' => 'required|mimes:png,jpg,jpeg|max:2048'
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar imagen
        $imagen = $this->imagen->store('public/vacantes');
        $nombre_imagen = str_replace("public/vacantes/", "", $imagen);

        // Crear Vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $nombre_imagen,
            'user_id' => auth()->user()->id,
        ]);

        // Crear mensaje
        session()->flash('mensaje', 'La Vacante se publicó correctamenta');
        
        // Redireccionar usuario
        return redirect()->route('vacantes.index');
    }


    public function render()
    {

        // consultar DB
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
