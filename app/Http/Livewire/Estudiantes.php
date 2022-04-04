<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante; 



class Estudiantes extends Component
{


    public $estudiantes, $Codigo, $Nombre, $Direccion, $Telefono, $Email, $id_estudiante;
    public $modal = false;

    public function render()
    {
        $this->estudiantes = Estudiante::all();
        return view('livewire.estudiantes');
    }



    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->Codigo = '';
        $this->Nombre = '';
        $this->Direccion = '';
        $this->Telefono = '';
        $this->Email = '';
        $this->id_estudiante = '';
    }
    public function editar($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $this->id_estudiante = $id;
        $this->Codigo = $estudiante->Codigo;
        $this->Nombre = $estudiante->Nombre;
        $this->Direccion = $estudiante->Direccion;
        $this->Telefono = $estudiante->Telefono;
        $this->Email= $estudiante->Email;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Estudiante::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {

        Estudiante::updateOrCreate(['id'=>$this->id_estudiante],
            [
               'Codigo' => $this->Codigo,
                'Nombre' => $this->Nombre,
                'Direccion' => $this->Direccion,
                'Telefono' => $this->Telefono,
                'Email' => $this->Email

                  
            ]);

        

         session()->flash('message',
            $this->id_estudiante ? '¡Actualización exitosa!' : '¡Datos agregados correctamente!');
         
         $this->cerrarModal();
         $this->limpiarCampos();



    }
}