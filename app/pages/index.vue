<script setup>
import { introCopy, looks } from '../data/looks'

const { language, setLanguage } = useLanguage()

const paragraphs = computed(() => introCopy[language.value])

function updateLanguage(nextLanguage) {
  setLanguage(nextLanguage)
}

useSeoMeta({
  title: 'Home'
})
</script>

<template>
  <div>
    <SiteHeader />

    <main>
      <section class="hero" aria-label="Cover image">
        <img class="hero__image" src="/img/covers/front.jpg" alt="One Look At A Time cover">
      </section>

      <section class="intro">
        <LanguageTabs :model-value="language" @update:model-value="updateLanguage" />

        <div class="intro__copy">
          <p v-for="paragraph in paragraphs" :key="paragraph">
            {{ paragraph }}
          </p>

          <p class="intro__tagline">ONE LOOK AT A TIME</p>
          <p class="intro__prompt">
            {{ language === 'nl' ? 'Klik om meer te ontdekken:' : 'Click to discover more:' }}
          </p>
        </div>
      </section>

      <section class="gallery" aria-label="Looks gallery">
        <NuxtLink
          v-for="look in looks"
          :key="look.number"
          :to="`/look/${look.number}`"
          class="gallery__item"
        >
          <img :src="look.cover" :alt="`Look ${look.number}`" class="gallery__image">
        </NuxtLink>
      </section>
    </main>

    <SiteFooter />
  </div>
</template>