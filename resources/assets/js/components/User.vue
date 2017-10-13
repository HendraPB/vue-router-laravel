<template>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" v-for="user in users">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" :src="user.user_foto" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Nama : {{ user.user_nama }}</a>
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
