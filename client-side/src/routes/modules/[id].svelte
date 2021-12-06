<script context="module">
  export async function preload(page, session) {
    return page.params;
  }
</script>

<script>
  export let id;
  import { onMount } from "svelte";
  import HistoryTable from "../../components/HistoryTable.svelte";
  import LineChart from "../../components/LineChart.svelte";

  let chart,
    name = "";
  let dates = [],
    mesures = [],
    histories = [];
  onMount(() => {
    async function fetchData() {
      const response = await fetch(`http://localhost:8000/api/module/${id}`, {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
        },
      });
      const content = await response.json();
      name = await content.module.name;
      histories = await content.history;
      mesures = await content.mesures;
      dates = await content.mesures_dates;
      await chart.destroyLinechart();
      await chart.createLinechart();
    }
    const interval = setInterval(fetchData, 20000);
    fetchData();
  });
</script>

<h1>{name}</h1>
<LineChart {dates} {mesures} bind:lineChart={chart} />
<HistoryTable {histories} />
