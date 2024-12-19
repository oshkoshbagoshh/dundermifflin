<script>
import { Inertia } from '@inertiajs'

export default {
  props: {
    tasks: Object,
  },
  methods: {
    fetchTasks(url) {
      Inertia.visit(url);
    },
    editTask(id) {
      // handle edit logic
      Inertia.visit(`/tasks/${id}/edit`);
    },
    deleteTask(id) {
      if (confirm('Are you sure you want to delete this task?')) {
        Inertia.delete(`/tasks/${id}`);
      }
    },
  },
};
</script>

<template>
  <div>
    <h1>Tasks</h1>
    <table>
      <thead>
      <tr>
        <th>Task</th>
        <th>Category</th>
        <th>User</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="task in tasks.data" :key="task.id">
        <td>{{ task.name }}</td>
        <td>{{ task.category.name }}</td>
        <td>{{ task.user.name }}</td>
        <td>
          <!--     Add Action Buttons Here     -->
          <button @click="editTask(task.id)">Edit</button>
          <button @click="deleteTask(task.id)">Delete</button>

        </td>
      </tr>
      </tbody>
    </table>

    <!--    Pagination -->
    <div>
      <button
          :disabled="!tasks.prev_page_url"
          @click="fetchTasks(tasks.prev_page_url)"
      >
        Previous
      </button>
      <button
          :disabled="!tasks.next_page_url"
          @click="fetchTasks(tasks.next_page_url)"
      >
        Next
      </button>
    </div>
  </div>

</template>

<style scoped>

</style>