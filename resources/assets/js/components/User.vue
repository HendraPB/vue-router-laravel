<template>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" v-for="user in users">
            <div class="card h-100">
                <img class="card-img-top" :src="user.user_foto" alt="">
                <div class="card-body">
                    <h4 class="card-title">
                        Nama : <router-link :to="{ name: 'artikel', query: { id: user.user_id }}">{{ user.user_nama }}</router-link>
                    </h4>
                    <p class="card-text">Memiliki {{ user.jumlah_artikel }} artikel</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: []
            }
        },
        mounted() {
            this.fetchUsers();
        },
        methods : {
            fetchUsers() {
                axios("api/user").then(({data}) => this.users = data.data)
            }
        }
    }
</script>
