<template>
    <div>
        <p class="text-center m-4">
            <button type="button" class="btn btn-danger btn-lg mx-auto" @click="previous"><</button>
            <button type="button" class="btn btn-secondary btn-lg mx-auto">{{ this.year }}</button>
            <button type="button" class="btn btn-danger btn-lg mx-auto" @click="next">></button>
        </p>

        <book-chart
            :dateYear="year"></book-chart>
    </div>
</template>

<script>
import BookChart from "./BookChart";

export default {
    name: "vuechart",
    components: {
        BookChart,
    },
    data() {
        return {
            year: ""
        }
    },
    mounted() {
        var now = new Date();
        this.year = now.getFullYear();
    },
    methods: {
        previous() {

            this.year = this.year - 1

            console.log(this.year)
        },
        next() {
            this.year = this.year + 1

            console.log(this.year)
        }
    }

}
</script>

<style scoped>

</style>
