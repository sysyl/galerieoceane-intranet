Nova.booting((Vue, router, store) => {
  Vue.component('index-notes', require('./components/IndexField'))
  Vue.component('read-more', require('./components/ReadMore'))
})
