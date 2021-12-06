<script>
  export let histories;
</script>

<div>
  <table class="content-table">
    <thead>
      <tr>
        <th scope="col">Problem's title</th>
        <th scope="col">description</th>
        <th scope="col">Created at</th>
        <th scope="col">Solved at</th>
      </tr>
    </thead>
    <tbody>
      {#each histories as history}
        <tr>
          <th scope="row">{history.title}</th>
          <td>{history.description}</td>
          <td>{history.created_at}</td>
          <td>{history.updated_at}</td>
        </tr>
      {/each}
    </tbody>
  </table>
</div>

<style>
  .content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }

  .content-table thead tr {
    background-color: #1998e2;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
  }

  .content-table th,
  .content-table td {
    padding: 12px 15px;
  }

  .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }

  .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }

  .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
  }
</style>
