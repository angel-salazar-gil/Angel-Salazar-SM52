<template>
    <div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Pokemon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="savePokemon">
                        <div class="form-group">
                            <label>Pokemon</label>
                            <input type="text" class="form-control" placeholder="Ingresa el nombre del pokemon" v-model="name">
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="picture">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" class="form-control" placeholder="Ingresa la descripcion del pokemon" v-model="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style>

</style>

<script>
export default {
    data(){
        return {
            name: null,
            picture: null,
            description: null
        }
    },
    methods: {
        savePokemon: function(){
            axios.post('http://localhost:8000/pokemons', {
                name: this.name,
                picture: this.picture,
                description: this.description
            })
            .then(function(res) {
                console.log(res)
                $('#addPokemon').modal('hide')
            })
            .catch(function(err){
                console.log(err)
            });
        }
    }
}
</script>