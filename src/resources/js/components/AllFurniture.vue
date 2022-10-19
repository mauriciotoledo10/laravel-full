<template>
    <div>
        <h2 class="text-center">Furnitures List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="furniture in furnitures" :key="furniture.id">
                <td>{{ furniture.id }}</td>
                <td>{{ furniture.title }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: furniture.id }}" class="btn btn-success">Edit</router-link>
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
            return {
                furnitures: []
            }
        },
        created() {
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
                        this.furnitures.splice(i, 1)
                    });
            }
        }
    }
</script>