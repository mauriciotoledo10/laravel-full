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
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {}
            }
        },
        methods: {
            addFurniture() {
                this.axios
                    .post('http://signup.localhost:8000/api/furnitures', this.product)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>