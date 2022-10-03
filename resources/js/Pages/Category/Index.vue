<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    {{ category }}
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Index",
    props: {
        category: Array
    }
}
</script>

<style scoped>

</style>
