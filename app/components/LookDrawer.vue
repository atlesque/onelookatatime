<script setup>
defineProps({
  detail: {
    type: Object,
    default: null
  },
  detailIndex: {
    type: Number,
    default: -1
  },
  totalDetails: {
    type: Number,
    required: true
  },
  language: {
    type: String,
    required: true
  },
  alternateLanguage: {
    type: String,
    required: true
  }
})

defineEmits(['close', 'next', 'previous', 'toggleLanguage'])
</script>

<template>
  <Transition name="drawer">
    <div v-if="detail" class="look-drawer__backdrop" @click.self="$emit('close')">
      <button type="button" class="look-drawer__close" aria-label="Close detail" @click="$emit('close')">
        <span class="chevron chevron--down" />
      </button>

      <section class="look-drawer" aria-live="polite">
        <div class="look-drawer__toolbar">
          <button type="button" class="look-drawer__language" @click="$emit('toggleLanguage')">
            {{ alternateLanguage.toUpperCase() }}
          </button>
        </div>

        <div class="look-drawer__content">
          <div class="look-drawer__media">
            <button
              type="button"
              class="look-drawer__arrow"
              aria-label="Previous detail"
              @click="$emit('previous')"
            >
              <span class="chevron chevron--left" />
            </button>

            <img :src="detail.image" :alt="detail.title" class="look-drawer__image">

            <button
              type="button"
              class="look-drawer__arrow"
              aria-label="Next detail"
              @click="$emit('next')"
            >
              <span class="chevron chevron--right" />
            </button>
          </div>

          <div class="look-drawer__copy">
            <p class="look-drawer__eyebrow">Detail {{ detailIndex + 1 }} / {{ totalDetails }}</p>
            <h2 class="look-drawer__title">{{ detail.title }}</h2>
            <p class="look-drawer__description">{{ detail.description[language] }}</p>
          </div>
        </div>
      </section>
    </div>
  </Transition>
</template>