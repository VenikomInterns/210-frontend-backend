<template>
    <div class="container mt-3">
        <div class="row">
            <div class="col col-5 mx-auto">
                <form @submit.prevent="createProduct">
                    <h1 class="display-3 text-center mb-3">Create Product</h1>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" v-model="form.name"
                               placeholder="Enter name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" v-model="form.price"
                               placeholder="Enter price">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"
                                  placeholder="Enter description" v-model="form.description" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="me-3" for="category_id">SELECT A CATEGORY</label>
                        <select type="text" id="category_id" name="category_id" v-model="form.category_id">
                            <option v-for="category in categories" :value="category.id">
                                {{ category.name }}
                            </option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <br>
                    <div class="text-center mx-auto text-success">
                        {{ message }}
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",
    props: {
        categories: Array
    },
    data() {
        return {
            form: this.$inertia.form({
                name: '',
                price: 0,
                description: '',
                category_id: ''
            }),
            message: ''
        }
    },
    methods: {
        createProduct() {
            this.$inertia.post(route('products.store'), this.form, {
                onSuccess: () => {
                    this.form.reset();
                    this.message = 'Successfully created product'
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
