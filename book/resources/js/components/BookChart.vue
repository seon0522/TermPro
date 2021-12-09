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
                    data: [10, 0],
                },
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        },
        year : '',
    }),
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
