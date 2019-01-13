<template>
    <div class="row">
        <div class="portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" :src="artikel.artikel_gambar" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{ artikel.artikel_judul }}</a>
                    </h4>
                    <p class="card-text">{{ artikel.artikel_isi }}</p>
                    <div>by <router-link :to="{ name: 'artikel', query: { id: artikel.user_id }}">{{ artikel.creator }}</router-link></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                artikel: ''
            }
        },
        mounted() {
            this.fetchUsers()
        },
        methods : {
            fetchUsers() {
                axios("api/artikel/"+this.$route.query.id).then(({data}) => this.artikel = data.data)
            }
        }
    }
</script>
