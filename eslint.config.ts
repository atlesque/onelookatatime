import type { FlatConfig } from '@nuxt/eslint'
import withNuxt from './.nuxt/eslint.config.mjs'

export default withNuxt({
  ignores: [
    '.nuxt/**',
    '.output/**',
    'node_modules/**',
    'public/**',
    'legacy-archive/**',
    'dist/**'
  ]
} as FlatConfig)
