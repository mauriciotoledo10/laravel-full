<template>
    <div>
        <h3 class="text-center">Edit Furniture</h3>

        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateFurniture">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="furniture.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="furniture.description">
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-select" v-model="furniture.brand">
                            <option selected>Select the furniture brand</option>
                            <option value="Electrolux">Electrolux</option>
                            <option value="Brastemp">Brastemp</option>
                            <option value="Fischer">Fischer</option>
                            <option value="Samsung">Samsung</option>
                            <option value="LG">LG</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tension</label>
                        <select class="form-select" v-model="furniture.tension">
                            <option selected>Select the furniture tension</option>
                            <option value="110v">110v</option>
                            <option value="220v">220v</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                furniture: {}
            }
        },
        created() {
            this.axios
                .get(`http://signup.localhost:8000/api/furnitures/${this.$route.params.id}`)
                .then((res) => {
                    this.furniture = res.data;
                });
        },
        methods: {
            updateFurniture() {
                this.axios
                    .patch(`http://signup.localhost:8000/api/furnitures/${this.$route.params.id}`, this.furniture)
                    .then((res) => {
                        this.$router.push({ name: 'home', params: { msg: 'The furniture ' + this.furniture.title + ' was succesfully updated!', class: 'alert alert-primary' } });
                    });
            }
        }
    }
</script>