<template>
  <div>
    <h1>Product Index Page</h1>
    <div class="d-flex justify-content-center">
      <ul>
        <li v-for="item in mountain" v-bind:key="item.slug">
          <div class="info">
            <h3>
              <NuxtLink :to="`/product/${item.slug}`">{{
                item.title
              }}</NuxtLink>
            </h3>
            <p v-html="item.description"></p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: "admin",
});
const { data: mountain } = await useFetch(`https://api.nuxtjs.dev/mountains`);
</script>

<style>
</style>