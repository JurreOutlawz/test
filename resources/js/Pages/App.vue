<script>
import Layout from './Layout.vue'

export default {
  // Using a render function...
  layout: (h, page) => h(Layout, [page]),

  // Using shorthand syntax...
  layout: Layout,
}
</script>

<template>

    <H1>Welcome</H1>
    <p>Hello , welcome to your first Inertia app!</p>
</template>