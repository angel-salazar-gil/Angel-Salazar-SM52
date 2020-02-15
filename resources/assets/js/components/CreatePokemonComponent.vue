<template>
    <div class="modal fade" id="addPokemon" data-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                            <label>Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Ingresa la descripcion del Pokemon" v-model="description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <form @submit.prevent="savePokemon">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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