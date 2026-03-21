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
      <section class="look-drawer" aria-live="polite">
        <button type="button" class="look-drawer__close-wrapper" aria-label="Close detail" @click="$emit('close')">
          <svg
            class="look-drawer__close-flap"
            width="192"
            height="61"
            version="1.1"
            viewBox="0 0 160.7 61.5"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
          >
            <path
              fill="currentColor"
              d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"
            />
          </svg>

          <span class="look-drawer__close-icon-wrapper" aria-hidden="true">
            <span class="chevron-light" />
          </span>
        </button>

        <div class="look-drawer__scroll">
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

              <img :src="detail.image" :alt="detail.title[language]" class="look-drawer__image">

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
              <h2 class="look-drawer__title">{{ detail.title[language] }}</h2>
              <p class="look-drawer__description">{{ detail.description[language] }}</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </Transition>
</template>
