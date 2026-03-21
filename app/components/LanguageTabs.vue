<script setup>
const props = defineProps({
  modelValue: {
    type: String,
    required: true
  }
})

const emit = defineEmits(['update:modelValue'])

const items = [
  { label: 'NL', value: 'nl' },
  { label: 'ENG', value: 'eng' }
]

function selectLanguage(language) {
  if (language !== props.modelValue) {
    emit('update:modelValue', language)
  }
}
</script>

<template>
  <div class="language-tabs" role="tablist" aria-label="Language selector">
    <button
      v-for="item in items"
      :key="item.value"
      :class="['language-tabs__button', { 'language-tabs__button--active': props.modelValue === item.value }]"
      type="button"
      role="tab"
      :aria-selected="props.modelValue === item.value"
      @click="selectLanguage(item.value)"
    >
      {{ item.label }}
    </button>
  </div>
</template>