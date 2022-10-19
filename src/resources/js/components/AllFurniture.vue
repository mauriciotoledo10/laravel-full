<template>
    <div>
        <h2 class="text-center">Furnitures List</h2>

        <button class="btn btn-success" @click="$router.push('create')">NEW Furniture</button>

        <div v-if="showMessage" :class="alertMessageClass" role="alert">
            {{alertMessage}}
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Brand</th>
                <th>Tension</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="furniture in furnitures" :key="furniture.id">
                <td>{{ furniture.id }}</td>
                <td>{{ furniture.title }}</td>
                <td>{{ furniture.description }}</td>
                <td>{{ furniture.brand }}</td>
                <td>{{ furniture.tension }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: furniture.id }}" class="btn btn-primary">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteFurniture(furniture.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {

            this.showMessage = false;
            this.alertMessage = '';
            this.alertMessageClass = '';

            return {
                furnitures: []
            }
        },
        created() {

            if (this.$route.params.msg) {
                this.showMessage = true;
                this.alertMessage = this.$route.params.msg;
                this.alertMessageClass = this.$route.params.class;
            }

            this.axios
                .get('http://signup.localhost:8000/api/furnitures/')
                .then(response => {
                    this.furnitures = response.data;
                });
        },
        methods: {
            deleteFurniture(id) {
                this.axios
                    .delete(`http://signup.localhost:8000/api/furnitures/${id}`)
                    .then(response => {
                        let i = this.furnitures.map(data => data.id).indexOf(id);
                        this.furnitures.splice(i, 1);
                        this.showMessage = true;
                        this.alertMessage = 'The furniture was succesfully removed!';
                        this.alertMessageClass = 'alert alert-danger';
                    });
            }
        }
    }
</script>