<script>
  import { goto } from "@sapper/app.mjs";
  import { onMount } from "svelte";
  import Card from "../components/Card.svelte";
  let modules = [];
  function getModule(id) {
    goto(`/modules/${id}`);
  }
  onMount(async () => {
    const response = await fetch("http://localhost:8000/api/module", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });
    const content = await response.json();
    modules = await content;
  });
</script>

<div class="container mt-5">
  <div class="row">
    {#each modules as module}
      <div class="col-4" on:click={getModule(module.id)}>
        <Card
          name={module.name}
          description={module.description}
          created_at={module.created_at}
        />
      </div>
    {/each}
  </div>
</div>
