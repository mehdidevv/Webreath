<script>
  import { onMount } from "svelte";
  export let dates, mesures;
  export const lineChart = {
    destroyLinechart() {
      line.destroy();
    },
    createLinechart,
  };
  let line;
  function createLinechart() {
    var ctx = document.getElementById("Linechart");
    const data = {
      labels: dates,
      datasets: [
        {
          label: "Les mesures du Modules en fonction du temps",
          data: mesures,
          fill: false,
          borderColor: "rgb(75, 192, 192)",
          tension: 0.1,
        },
      ],
    };
    line = new Chart(ctx, {
      type: "line",
      data: data,
      options: {
        maintainAspectRatio: false,
        animation: {
          duration: 0,
        },
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  }

  onMount(createLinechart);
</script>

<div id="LinechartContainer">
  <canvas id="Linechart" width="200px" height="200px" />
</div>
