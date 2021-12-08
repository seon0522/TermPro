<template>
    <div>
        <button type="button" class="btn btn-secondary btn-lg" @click="previous" >앞</button>
        <button type="button" class="btn btn-secondary btn-lg">{{this.year}}</button>
        <button type="button" class="btn btn-secondary btn-lg" @click="adds">뒤</button>
        <book-chart
        :dateYear="year"></book-chart>
    </div>
</template>

<script>
import BookChart from "./BookChart";

export default {
    name: "vuechart",
    components:{
        BookChart,
    },
    data() {
        return {
            year:""
        }
    },
    mounted() {
        var now = new Date();
        this.year = now.getFullYear();
    },
    methods:{
        previous(){

            this.year = this.year-1

            console.log(this.year)
        },
        adds(){
            this.year = this.year + 1

            console.log(this.year)
        }
    }

}
</script>

<style scoped>

</style>
