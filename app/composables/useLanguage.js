export const supportedLanguages = ['nl', 'eng']

export function useLanguage() {
  const language = useCookie('language', {
    default: () => 'nl',
    sameSite: 'lax',
    maxAge: 60 * 60 * 24 * 365
  })

  if (!supportedLanguages.includes(language.value)) {
    language.value = 'nl'
  }

  const alternateLanguage = computed(() =>
    language.value === 'nl' ? 'eng' : 'nl'
  )

  function setLanguage(nextLanguage) {
    language.value = nextLanguage
  }

  function toggleLanguage() {
    language.value = alternateLanguage.value
  }

  return {
    language,
    alternateLanguage,
    setLanguage,
    toggleLanguage
  }
}