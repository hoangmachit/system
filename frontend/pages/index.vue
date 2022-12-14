
<template>
  <section id="page-index">
    <Head>
      <Title>Index Page</Title>
      <Meta name="description" content="Des index page" />
    </Head>
    <header>
      <div class="title-page">
        <h1>Index Page</h1>
      </div>
    </header>
    <main>
      <ul>
        <li v-for="item in data" :key="item.id" class="item-page">
          <h3>
            <NuxtLink to="/detail">{{ item.title }}</NuxtLink>
          </h3>
          <p v-html="item.description"></p>
        </li>
      </ul>
    </main>
    <footer>
      <small>Index copyright</small>
    </footer>
  </section>
</template>
<script setup>
definePageMeta({
  layout: "admin",
});
const { data, pending, error, refresh } = await useAsyncData("mountains", () =>
  $fetch("https://api.nuxtjs.dev/mountains")
);
</script>
<style scoped>
body {
  padding: 10%;
  background: #bebebe;
}
#page-index {
  background: #fff;
  padding: 20px;
}
</style>