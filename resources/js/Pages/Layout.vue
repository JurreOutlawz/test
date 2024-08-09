<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header class="bg-teal-400 p-4">
      <Link class="hover:text-red-400" href="/">Home</Link>
      <Link class="hover:text-red-400 ml-4" href="/jurre">Jurre</Link>

    </header>
    <div class="p-4">
      <article>
        <slot />
      </article>
    </div>
  </main>
</template>
