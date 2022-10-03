<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 text-center">Table</h1>
                    <div class="text-center my-3">
                        <button class="btn btn-success me-2">
                            <Link :href="route('categories.create')">Create category</Link>
                        </button>
                        <button class="btn btn-success">
                            <Link :href="route('products.create')">Create product</Link>
                        </button>
                    </div>
                    <table class="table-responsive table-bordered table-dark text-center text-dark mx-auto mt-4">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="product in products.data"> <!---missing :key="" attribute-->
                            <td>
                                {{ product.id }}
                            </td>
                            <td>
                                {{ product.name }}
                            </td>
                            <td>
                                {{ product.price }}
                            </td>
                            <td>
                                {{ product.description }}
                            </td>
                            <td>
                                <button class="btn btn-primary">
                                    <Link :href="route('products.edit', product)">
                                        Edit
                                    </Link>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger">
                                    <Link :href="route('products.destroy', product)" method="DELETE">
                                        Delete
                                    </Link>
                                </button>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Index",
    props: {
        products: Array
    }
}
</script>

<style scoped>

</style>
