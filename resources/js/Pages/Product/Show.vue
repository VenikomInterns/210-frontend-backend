<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!--This will result as raw json-->
                    <h1 class="text-center">{{ product }}</h1>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Show",
    props: {
        product: Object
    }
}
</script>

<style scoped>

</style>
