<script>
import { Bar } from 'vue-chartjs'
import axios from 'axios';

export default {
    extends: Bar,
    props:['dateYear'],
    data: () => ({
        chartdata: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [
                {
                    label: '독서량',
                    backgroundColor: '#f87979',
                    data: [],
                },
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        },
        year : '',
    }),

    mounted () {
        console.log(this.dateYear);
        // console.log(year)

        axios.get('/bookYear/'+ this.dateYear).then(response=>{
            // console.log(response.data);
            // console.log("전 " + this.chartdata.datasets[0].data);
            this.chartdata.datasets[0].data = response.data;

            // console.log(this.chartdata.datasets[0].data);
            this.renderChart(this.chartdata, this.options)

        }).catch(err=>{
            console.log(err);
        })
    },
    watch : {
        dateYear : function (newVal, oldVal) {
            axios.get('/bookYear/'+ newVal).then(response=>{
                // console.log(response.data);
                // console.log("전 " + this.chartdata.datasets[0].data);
                this.chartdata.datasets[0].data = response.data;

                // console.log(this.chartdata.datasets[0].data);
                this.renderChart(this.chartdata, this.options)

            }).catch(err=>{
                console.log(err);
            })
        }
    }
}
</script>

<style scoped>

</style>
