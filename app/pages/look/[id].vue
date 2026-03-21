<script setup>
import { getLookByNumber, getWrappedLookNumber } from '../../data/looks'

const route = useRoute()
const { language, alternateLanguage, toggleLanguage } = useLanguage()

const routeId = Array.isArray(route.params.id) ? route.params.id[0] : route.params.id
const lookNumber = Number.parseInt(routeId ?? '', 10)
const look = getLookByNumber(lookNumber)

if (!look) {
  throw createError({
    statusCode: 404,
    statusMessage: 'Look not found'
  })
}

const previousLookHref = `/look/${getWrappedLookNumber(look.number - 1)}`
const nextLookHref = `/look/${getWrappedLookNumber(look.number + 1)}`
const selectedDetailId = ref(null)

const selectedDetail = computed(
  () => look.details.find((detail) => detail.id === selectedDetailId.value) ?? null
)

const selectedDetailIndex = computed(() =>
  selectedDetail.value
    ? look.details.findIndex((detail) => detail.id === selectedDetail.value?.id)
    : -1
)

function openDetail(detailId) {
  selectedDetailId.value = detailId
}

function closeDetail() {
  selectedDetailId.value = null
}

function openRelativeDetail(offset) {
  if (!selectedDetail.value) {
    return
  }

  const currentIndex = selectedDetailIndex.value
  const totalDetails = look.details.length
  const nextIndex = (currentIndex + offset + totalDetails) % totalDetails

  selectedDetailId.value = look.details[nextIndex].id
}

function handleKeydown(event) {
  if (!selectedDetail.value) {
    return
  }

  if (event.key === 'Escape') {
    closeDetail()
  }

  if (event.key === 'ArrowLeft') {
    openRelativeDetail(-1)
  }

  if (event.key === 'ArrowRight') {
    openRelativeDetail(1)
  }
}

useSeoMeta({
  title: `Look ${look.number}`,
  ogTitle: `Look ${look.number} | ONE LOOK AT A TIME`,
  ogImage: look.image.src,
  description: `Discover look ${look.number} in the One Look At A Time exhibition.`
})

onMounted(() => {
  window.addEventListener('keydown', handleKeydown)
})

onBeforeUnmount(() => {
  window.removeEventListener('keydown', handleKeydown)
})
</script>

<template>
  <div>
    <SiteHeader :prev-href="previousLookHref" :next-href="nextLookHref" />

    <main class="look-page">
      <LookStage :look="look" :selected-detail-id="selectedDetailId" @select="openDetail" />

      <div class="look-page__details">
        <button
          v-for="detail in look.details"
          :key="detail.id"
          type="button"
          class="look-page__detail-chip"
          @click="openDetail(detail.id)"
        >
          {{ detail.title }}
        </button>
      </div>
    </main>

    <LookDrawer
      :detail="selectedDetail"
      :detail-index="selectedDetailIndex"
      :total-details="look.details.length"
      :language="language"
      :alternate-language="alternateLanguage"
      @close="closeDetail"
      @next="openRelativeDetail(1)"
      @previous="openRelativeDetail(-1)"
      @toggle-language="toggleLanguage"
    />

    <SiteFooter />
  </div>
</template>