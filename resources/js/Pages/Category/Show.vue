<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">{{ category }}</h1>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Show",
    props: {
        category: Object
    }
}
</script>

<style scoped>

</style>
