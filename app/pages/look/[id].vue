<script setup>
import { getLookByNumber, getWrappedLookNumber } from '../../data/looks'

const route = useRoute()
const router = useRouter()
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

const selectedDetailId = computed(() => {
  const detailId = Array.isArray(route.query.detail) ? route.query.detail[0] : route.query.detail

  if (typeof detailId !== 'string') {
    return null
  }

  return look.details.some((detail) => detail.id === detailId) ? detailId : null
})

const previousLookHref = computed(() => ({
  path: `/look/${getWrappedLookNumber(look.number - 1)}`,
  query: route.query
}))

const nextLookHref = computed(() => ({
  path: `/look/${getWrappedLookNumber(look.number + 1)}`,
  query: route.query
}))

const selectedDetail = computed(
  () => look.details.find((detail) => detail.id === selectedDetailId.value) ?? null
)

const previewDetailId = ref(null)

const activeDetailId = computed(() => previewDetailId.value ?? selectedDetailId.value)

const selectedDetailIndex = computed(() =>
  selectedDetail.value
    ? look.details.findIndex((detail) => detail.id === selectedDetail.value?.id)
    : -1
)

function updateDetailQuery(detailId) {
  const nextQuery = { ...route.query }

  if (detailId) {
    nextQuery.detail = detailId
  }
  else {
    delete nextQuery.detail
  }

  router.replace({
    query: nextQuery
  })
}

function openDetail(detailId) {
  updateDetailQuery(detailId)
}

function closeDetail() {
  previewDetailId.value = null
  updateDetailQuery(null)
}

function previewDetail(detailId) {
  previewDetailId.value = detailId
}

function openRelativeDetail(offset) {
  if (!selectedDetail.value) {
    return
  }

  const currentIndex = selectedDetailIndex.value
  const totalDetails = look.details.length
  const nextIndex = (currentIndex + offset + totalDetails) % totalDetails

  updateDetailQuery(look.details[nextIndex].id)
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
      <LookStage
        :look="look"
        :language="language"
        :selected-detail-id="activeDetailId"
        @select="openDetail"
        @hover="previewDetail"
      />

      <div class="look-page__details">
        <button
          v-for="detail in look.details"
          :key="detail.id"
          :class="['look-page__detail-chip', { 'look-page__detail-chip--active': activeDetailId === detail.id }]"
          type="button"
          @click="openDetail(detail.id)"
          @mouseenter="previewDetail(detail.id)"
          @mouseleave="previewDetail(null)"
          @focus="previewDetail(detail.id)"
          @blur="previewDetail(null)"
        >
          {{ detail.title[language] }}
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
