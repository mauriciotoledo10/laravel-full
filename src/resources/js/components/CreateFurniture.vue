<template>
    <div>
        <h3 class="text-center">Add Furniture</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addFurniture">
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
                        <input type="text" class="form-control" v-model="furniture.brand">
                    </div>
                    <div class="form-group">
                        <label>Tension</label>
                        <input type="text" class="form-control" v-model="furniture.tension">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

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
        methods: {
            addFurniture() {
                this.axios
                    .post('http://signup.localhost:8000/api/furnitures', this.furniture)
                    .then(response => (
                        this.$router.push({ name: 'home', params: { msg: 'The furniture ' + this.furniture.title + ' was succesfully added!', class: 'alert alert-success' } })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>