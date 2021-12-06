<script>
  import { onMount } from "svelte";
  import { goto } from "@sapper/app.mjs";

  let types = [],
    name = "",
    description = "",
    type_id;
  const submit = async () => {
    const response = await fetch("http://localhost:8000/api/module", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        name,
        description,
        type_id,
      }),
    });
    const content = await response.json();
    localStorage.setItem("token", content.acessToken);
    await goto("/");
  };
  onMount(async () => {
    const response = await fetch("http://localhost:8000/api/type", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });
    const content = await response.json();
    types = await content;
  });
</script>

<form on:submit|preventDefault={submit}>
  <div class="form-group">
    <label for="name">Module Name</label>
    <input type="text" class="form-control" id="name" bind:value={name} />
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea
      name="description"
      class="form-control"
      bind:value={description}
      id="description"
      cols="30"
      rows="3"
    />
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <select class="form-control form-control-lg" bind:value={type_id}>
      {#each types as type}
        <option value={type.id}> {type.name}</option>
      {/each}
    </select>
  </div>
  <button type="submit" class="btn btn-primary mt-5">Create Module</button>
</form>
