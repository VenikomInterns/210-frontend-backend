<template>
    <section>
        <div class="container">
            <div class="row">
                <!---This will output raw json -->
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
        category: Array // category but array?
    }
}
</script>

<style scoped>

</style>
