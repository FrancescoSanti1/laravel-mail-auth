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
                        <div>Voto: {{videogame.rating}}</div>
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
        }
    }
</script>
