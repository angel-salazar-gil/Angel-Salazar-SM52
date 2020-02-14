<template>
    <div class="row">
        <div class="col-sm" v-for="pokemon in pokemons">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/" alt="Pokemon">
                <div class="card-body">
                    <h5 class="card-title">{{ pokemon.name }}</h5>
                    <p class="card-text">{{ pokemon.description }}</p>
                    <a href="/trainers/" class="btn btn-primary">Ver más...</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                pokemons: []
            }
        },
        mounted() {
            axios.get('http://localhost:8000/pokemons').then(response => (this.pokemons = response.data))
        }
    }
</script>