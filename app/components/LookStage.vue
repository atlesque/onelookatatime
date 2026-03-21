<script setup>
defineProps({
  look: {
    type: Object,
    required: true
  },
  selectedDetailId: {
    type: String,
    default: null
  }
})

const emit = defineEmits(['select'])

function selectDetail(detailId) {
  emit('select', detailId)
}
</script>

<template>
  <section class="look-stage" aria-label="Look detail map">
    <div class="look-stage__frame">
      <img
        :src="look.image.src"
        :alt="look.image.alt"
        class="look-stage__image"
      >

      <svg
        class="look-stage__overlay"
        :viewBox="`0 0 ${look.image.width} ${look.image.height}`"
        preserveAspectRatio="xMidYMid meet"
        aria-hidden="true"
      >
        <g v-for="(hotspot, index) in look.hotspots" :key="`${hotspot.detailId}-${index}`">
          <title>{{ hotspot.title }}</title>
          <polygon
            :points="hotspot.points"
            :class="['look-stage__hotspot', { 'look-stage__hotspot--active': selectedDetailId === hotspot.detailId }]"
            tabindex="0"
            role="button"
            @click="selectDetail(hotspot.detailId)"
            @keydown.enter.prevent="selectDetail(hotspot.detailId)"
            @keydown.space.prevent="selectDetail(hotspot.detailId)"
          />
        </g>
      </svg>
    </div>

    <p class="look-stage__hint">Select a highlighted area to reveal the detail.</p>
  </section>
</template>