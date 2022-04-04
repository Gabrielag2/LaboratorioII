


<x-slot name="header">
     <h8 class="text-gray-900">Estudiantes: Gabriela Aguilar, Luis Martinez, David Henriquez </h8>

</x-slot>

<div class="py-12">
   <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
       

@if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif




       <button wire:click="crear()" class="  btn btn-warning ">Ingresar Nuevo Registro</button>
       @if($modal)
        @include('livewire.crear')
        @endif
       
       <table class="table-fixed w-full"> 
        <thead>
            <tr class="table table-striped text-write">
            <tr>
                <th class="px-2 py-1">id</th>
                <th class="px-2 py-1">Codigo</th>
                <th Class="px-2 py-1">Nombre</th>
                <th class="px-2 py-1">Direccion</th>
                <th class="px-2 py-1">Telefono</th>
                <th class="px-2 py-1">Email</th>
                <th class="px-2 py-1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <td class="border px-3 py-1">{{$estudiante->id}}</td>
                <td class="border px-3 py-1">{{$estudiante->Codigo}}</td>
                <td class="border px-3 py-1">{{$estudiante->Nombre}}</td>
                <td class="border px-3 py-1">{{$estudiante->Direccion}}</td>
                <td class="border px-3 py-1">{{$estudiante->Telefono}}</td>
                <td class="border px-3 py-1">{{$estudiante->Email}}</td>
                <td>
                <button wire:click="editar({{$estudiante->id}})" class="btn btn-success hover:text-gray-500   border-gray-300 ">Editar</button>
                    <button wire:click="borrar({{$estudiante->id}})" class="btn btn-danger hover:text-gray-500   border-gray-300  ">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
       </div> 
   </div>




   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</div>



