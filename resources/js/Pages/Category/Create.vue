<template>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col col-5 mx-auto">
                    <form @submit.prevent="createCategory">
                        <h1 class="display-3 text-center mb-3">Create Category</h1>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" v-model="form.name"
                                   placeholder="Enter name">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Create</button><br>
                        <div class="text-center mx-auto text-success">
                            {{ message }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            form: this.$inertia.form({
                name: '',
            }),
            message: ''
        }
    },
    methods: {
        createCategory() {
            // its much better to use form helper method, for ex.:
            //  this.form.post(route('categories.store'), {.... etc})
            this.$inertia.post(route('categories.store'), this.form,{
                onSuccess: () => {
                    this.form.reset();
                    this.message = "Successfully created category";
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
