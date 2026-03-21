<script setup>
defineProps({
  prevHref: {
    type: [String, Object],
    default: undefined
  },
  nextHref: {
    type: [String, Object],
    default: undefined
  }
})
</script>

<template>
  <header class="site-header">
    <nav class="site-nav" aria-label="Primary">
      <div class="site-nav__side">
        <NuxtLink
          v-if="prevHref"
          :to="prevHref"
          class="site-nav__arrow"
          aria-label="Previous look"
        >
          <span class="chevron chevron--left" />
        </NuxtLink>
      </div>

      <NuxtLink to="/" class="site-nav__home">ONE LOOK AT A TIME</NuxtLink>

      <div class="site-nav__side">
        <NuxtLink
          v-if="nextHref"
          :to="nextHref"
          class="site-nav__arrow"
          aria-label="Next look"
        >
          <span class="chevron chevron--right" />
        </NuxtLink>
      </div>
    </nav>
  </header>
</template>
