<template>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card " style=" margin-bottom:10%; height:100%;   width:30rem;" >
                <div class="modal-header  mb-3" style="background-color: #FF6C00; margin-top:0%;">
                    <h5 class="modal-title text-white" id="exampleModalLabel" style="text-align: center;" >Registrar vehículo</h5>
                </div>
                <div class="card-bady " style="margin-top:10%; margin-bottom: 10%;margin-left:18%;height:auto; width:20rem;">
                    <form>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Placa">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Número interno">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Modelo">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Motor">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Marca">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Chasis">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Color">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" placeholder=" # Pasajeros">
                            </div>
                        </div>
                    </div>

                <div class="form-group row" style="width:98%; margin-left:1%;">
                    <div class="col">
                        <button type="submit" class="btn btn-block text-white" style="background-color: #787473; whidth:4rem; ">Cancelar</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-block text-white" style="background-color: #FF6C00;">Agregar</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
</template>

<script> 
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
