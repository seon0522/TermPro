<template>
    <div>
        <button class="p-2 pl-5 pr-5 bg-transparent border-2 border-gray-500 text-gray-500 text-lg
         rounded-lg hover:bg-gray-500 hover:text-gray-100
        focus:border-4 focus:border-gray-300">Secondary</button>
        <book-chart></book-chart>
    </div>
</template>

<script>
import BookChart from "./BookChart";

export default {
    name: "vuechart",
    components:{
        BookChart,
    }
}
</script>

<style scoped>

</style>
