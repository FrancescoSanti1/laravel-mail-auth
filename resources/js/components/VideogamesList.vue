<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div v-for="videogame in videogames" :key="videogame.id" class="card my-3">
                    <div class="card-header">
                        <h2>{{videogame.title}}</h2>
                        <h4>{{videogame.subtitle}}</h4>
                    </div>

                    <div class="card-body">
                        <div class="my-2">Voto: {{videogame.rating}}</div>
                        <div @click="deleteVideogame(videogame.id)" class="btn btn-danger my-2">Elimina videogioco</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                videogames: []
            }
        },
        mounted() {
            axios
            .get('/api/videogames/all')
            .then(result => {
                this.videogames = result.data;
            })
            .catch(errorMessage => {
                console.log('Errore:', errorMessage);
            });
        },
        methods: {
            deleteVideogame(id) {
                axios
                .get(`api/videogame/delete/${id}`)
                .then(result => {
                    const deletedVideogame = result.data;
                    this.deleteFromVue(deletedVideogame);
                })
                .catch(errorMessage => {
                    console.log("Errore:", errorMessage);
                })
            },
            deleteFromVue(deletedVideogame) {
                this.videogames.forEach((videogame, index) => {
                    if(videogame.id === deletedVideogame.id) {
                        this.videogames.splice(index, 1);
                    }
                });
            }
        }
    }
</script>
