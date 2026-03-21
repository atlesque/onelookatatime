<script setup>
const props = defineProps({
  look: {
    type: Object,
    required: true
  },
  language: {
    type: String,
    required: true
  },
  selectedDetailId: {
    type: String,
    default: null
  }
})

const emit = defineEmits(['select', 'hover'])

function selectDetail(detailId) {
  emit('select', detailId)
}

function previewDetail(detailId) {
  emit('hover', detailId)
}

const imageLoaded = ref(false)
const imageRef = ref(null)

function handleImageLoad() {
  imageLoaded.value = true
}

onMounted(() => {
  if (imageRef.value?.complete) {
    handleImageLoad()
  }
})
</script>

<template>
  <section class="look-stage" aria-label="Look detail map">
    <div
      class="look-stage__frame"
      :style="{
        '--look-stage-width': props.look.image.width,
        '--look-stage-height': props.look.image.height
      }"
    >
      <div
        v-if="!imageLoaded"
        class="look-stage__skeleton"
        aria-hidden="true"
      />

      <img
        ref="imageRef"
        :src="look.image.src"
        :alt="look.image.alt"
        :width="look.image.width"
        :height="look.image.height"
        :class="['look-stage__image', { 'look-stage__image--loaded': imageLoaded }]"
        @load="handleImageLoad"
      >

      <svg
        :class="['look-stage__overlay', { 'look-stage__overlay--ready': imageLoaded }]"
        :viewBox="`0 0 ${look.image.width} ${look.image.height}`"
        preserveAspectRatio="xMidYMid meet"
        role="group"
        :aria-label="language === 'nl' ? 'Interactieve detailgebieden' : 'Interactive detail areas'"
      >
        <g v-for="(hotspot, index) in look.hotspots" :key="`${hotspot.detailId}-${index}`">
          <title>{{ hotspot.title }}</title>
          <polygon
            :points="hotspot.points"
            :class="['look-stage__hotspot', { 'look-stage__hotspot--active': selectedDetailId === hotspot.detailId }]"
            tabindex="0"
            role="button"
            :aria-label="hotspot.title"
            @click="selectDetail(hotspot.detailId)"
            @mouseenter="previewDetail(hotspot.detailId)"
            @mouseleave="previewDetail(null)"
            @focus="previewDetail(hotspot.detailId)"
            @blur="previewDetail(null)"
            @keydown.enter.prevent="selectDetail(hotspot.detailId)"
            @keydown.space.prevent="selectDetail(hotspot.detailId)"
          />
        </g>
      </svg>
    </div>

    <p class="look-stage__hint">
      {{ language === 'nl' ? 'Selecteer een gemarkeerd gebied om het detail te tonen.' : 'Select a highlighted area to reveal the detail.' }}
    </p>
  </section>
</template>
