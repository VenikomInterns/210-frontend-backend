<template>
    <div class="container mt-3">
        <div class="row">
            <div class="col col-5 mx-auto">
                <form @submit.prevent="editProduct">
                    <h1 class="display-3 text-center mb-3">Edit Product</h1>
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
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Edit",
    props: {
        product: Object
    },
    data() {
        return {
            //why not: form: this.$inertia.form({...this.product})
            form: this.$inertia.form({
                name: this.product.name,
                price: this.product.price,
                description: this.product.description
                //missing category id
            })
        }
    },
    methods: {
        editProduct() {
            //same about this.form.put()...
            this.$inertia.put(route('products.update', this.product), this.form,{
                onSuccess: () => {
                    this.form.reset();
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
