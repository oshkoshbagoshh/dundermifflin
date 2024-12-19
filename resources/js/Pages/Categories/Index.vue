<template>
  <div>
    <h1>Categories</h1>
    <ul>
      <li v-for="category in categories.data" :key="category.id">
        {{ category.name }}
      </li>
    </ul>
    <pagination :links="categories.links"/>
  </div>
</template>

<script>
import { Inertia } from '@inertiajs/vue3'
export default {
  props: {
    categories: Object,
  },
};
</script>