<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Category</h3>
                        </div>
                        <div class="card-body">
                            <form >
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Edit Category Name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Edit",
    props: {
        category: Object
    },
    data() {
        return {
            form: this.$inertia.form({
                name: '' //we should have category's name as initally here
            })
        }
    },
}   //missing methods for submitting a form
</script>

<style scoped>

</style>
