<script lang="ts" setup>
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
import { Bar } from 'vue-chartjs'

// Register
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)


const chartData = ref({
  labels: ['January', 'February', 'March', 'April', 'May'],
  datasets: [
    {
      label: 'Data One',
      backgroundColor: '#f87979',
      data: [40, 20, 12, 50, 10],
    },
  ],
})
const chartOptions = ref({
  responsive: true,
  maintainAspectRatio: false,
})

</script>
<template>
  <div>
    <Bar
      :data="chartData"
      :options="chartOptions"
    />
  </div>
</template>
<style scoped lang="css"></style>