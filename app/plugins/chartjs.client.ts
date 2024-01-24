import { Chart, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
import "aos/dist/aos.css";

export default defineNuxtPlugin(() => {
    Chart.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend)
})