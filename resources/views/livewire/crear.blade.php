

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
    <


    <form class="row g-3">
     <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

     <div class="col-md-4">
       <label for="validationServer01" class="form-label">Codigo</label>
       <input type="text" class="form-control is-valid" id="validationServer01"   id="Codigo" wire:model="Codigo"   value=" " required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">Nombre</label>
      <input type="text" class="form-control is-valid" id="validationServer02"   id="Nombre" wire:model="Nombre"     value=" " required>
      <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer03" class="form-label">Direccion</label>
    <input type="text" class="form-control is-valid" id="validationServer03"   id="Direccion" wire:model="Direccion"     value=" " required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationServer04" class="form-label">Telefono</label>
    <input type="text" class="form-control is-valid" id="validationServer04"   id="Telefono" wire:model="Telefono"     value=" " required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername"  id="Email" wire:model="Email"       aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  
  </div>
  

    <button  wire:click.prevent="guardar()"  class="btn btn-primary" type="submit">Guardar</button>

   <button wire:click="cerrarModal()" class="btn btn-warning" type="submit">Cancelar</button>
</form>  



