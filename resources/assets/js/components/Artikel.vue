<template>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" v-for="artikel in artikels">
            <div class="card h-100">
                <router-link :to="{ path: 'artikel/show', query: { id: artikel.artikel_id }}">
                    <img class="card-img-top" :src="artikel.artikel_gambar" alt="">
                </router-link>
                <div class="card-body">
                    <h4 class="card-title">
                        <router-link :to="{ name: 'show', query: { id: artikel.artikel_id }}">{{ artikel.artikel_judul }}</router-link>
                    </h4>
                    <p class="card-text">{{ artikel.artikel_isi }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                artikels: []
            }
        },
        mounted() {
            this.fetchUsers();
        },
        methods : {
            fetchUsers() {
                axios("api/artikel").then(({data}) => this.artikels = data.data)
            }
        }
    }
</script>
