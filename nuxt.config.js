export default defineNuxtConfig({
  compatibilityDate: '2026-03-21',
  devtools: { enabled: true },
  modules: ['@nuxt/eslint'],
  css: ['~/assets/css/main.css'],
  app: {
    head: {
      htmlAttrs: {
        lang: 'en'
      },
      title: 'ONE LOOK AT A TIME',
      titleTemplate: (titleChunk) =>
        titleChunk ? `${titleChunk} | ONE LOOK AT A TIME` : 'ONE LOOK AT A TIME',
      meta: [
        {
          name: 'viewport',
          content: 'width=device-width, initial-scale=1'
        },
        {
          name: 'description',
          content:
            'Discover the looks of a post-fossil future by Alexander Atlesque and Elias Gubbels.'
        },
        {
          property: 'og:title',
          content: 'ONE LOOK AT A TIME'
        },
        {
          property: 'og:type',
          content: 'website'
        },
        {
          property: 'og:image',
          content: 'https://onelookatatime.com/img/og/og-image.jpg'
        },
        {
          property: 'og:url',
          content: 'https://onelookatatime.com/'
        },
        {
          property: 'og:description',
          content:
            'Discover the looks of a post-fossil future! By Alexander Atlesque and Elias Gubbels.'
        },
        {
          name: 'msapplication-TileColor',
          content: '#ffc40d'
        },
        {
          name: 'theme-color',
          content: '#ffffff'
        }
      ],
      link: [
        {
          rel: 'preconnect',
          href: 'https://fonts.googleapis.com'
        },
        {
          rel: 'preconnect',
          href: 'https://fonts.gstatic.com',
          crossorigin: ''
        },
        {
          rel: 'stylesheet',
          href: 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Nunito:wght@600;700;800&display=swap'
        },
        {
          rel: 'apple-touch-icon',
          sizes: '180x180',
          href: '/apple-touch-icon.png'
        },
        {
          rel: 'icon',
          type: 'image/png',
          sizes: '32x32',
          href: '/favicon-32x32.png'
        },
        {
          rel: 'icon',
          type: 'image/png',
          sizes: '16x16',
          href: '/favicon-16x16.png'
        },
        {
          rel: 'manifest',
          href: '/site.webmanifest'
        }
      ],
      script: [
        {
          src: 'https://www.googletagmanager.com/gtag/js?id=G-BJXB65HLRG',
          async: true
        },
        {
          children:
            "window.dataLayer = window.dataLayer || []; function gtag(){ dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-BJXB65HLRG');"
        }
      ]
    }
  }
})