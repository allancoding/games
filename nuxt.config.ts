export default defineNuxtConfig({
  compatibilityDate: '2024-11-01',

  app: {
    head: {
      htmlAttrs: {
        lang: 'en',
      },
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      meta: [
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: 'Allancoding Games' },
        { property: 'og:description', content: 'My games site!' },
        { property: 'og:url', content: 'https://games.allancoding.dev/' },
        { property: 'og:image', content: 'https://allancoding.dev/img/icon.png' },
        { name: 'description', content: 'My games site!' },
        { name: 'theme-color', content: '#ff1100' },
      ]
    }
  },
  plugins: [
    '~/plugins/jquery.client.js',
    '~/plugins/webpack.client.js',
    '~/plugins/title.js'
  ],
  devtools: { enabled: true },
  modules: ['@nuxt/fonts'],
  fonts: {
    families: [
      { name: 'Press Start 2P', provider: 'google' },
    ]
  }
})