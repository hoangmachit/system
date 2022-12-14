<template>
  <div>
    <Head>
      <Title>{{ mountain.title }}</Title>
      <Meta name="description" :content="mountain.description" />
      <Meta name="keyword" :content="mountain.title" />
    </Head>
    <h1>Slug Index Page</h1>
    <div class="d-flex">
      <img v-bind:src="mountain.image" v-bind:alt="mountain.title" />
      <h1>{{ mountain.title }}</h1>
      <div class="desc" v-html="mountain.description"></div>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: "admin",
});
const route = useRoute();
const { data: mountain } = await useFetch(
  `https://api.nuxtjs.dev/mountains/${route.params.slug}`
);
</script>

<style>
</style>