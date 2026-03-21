/* global $, localStorage */
$(function () {
  $(document).ready(() => {
    setupResponsiveImageMap()

    // Fix for mobile devices having URL bar which hides on scroll down and breaks layout
    $(window).on('resize orientationchange', () => {
      setupResponsiveImageMap()
    })

    if (localStorage.getItem('language') == null) {
      localStorage.setItem('language', 'nl')
    }

    $('[data-set-language]').click((e) => {
      const language = $(e.currentTarget).attr('data-set-language')
      if (language != null && language.length > 0) {
        localStorage.setItem('language', language)
      }
      updateLanguageHTML()
    })

    updateLanguageHTML()

    $('.look-info__other-language').click(() => {
      const lookDetailId = $('.look-info__description.active').attr('data-look-detail-id')
      $('#look-info__description-list p').hide().removeClass('active')
      $(`#look-info__description-list p[data-look-detail-id=${lookDetailId}][data-language=${localStorage.getItem('language')}]`).show().addClass('active')
    })

    $('.look__map area').click((e) => {
      $('#look-info__description-list p').hide().removeClass('active')
      // set image
      const lookId = $(e.currentTarget).parent().attr('data-look-id')
      const lookDetailId = $(e.currentTarget).attr('data-look-detail-id')
      const detailImageSrc = `/img/details/${lookId}/${lookDetailId}.jpg`
      $('#look-info__detail-image').attr('src', detailImageSrc)
      // set text
      $(`#look-info__description-list p[data-look-detail-id=${lookDetailId}][data-language=${localStorage.getItem('language')}]`).show().addClass('active')
      // show info bar
      $('#look-info, .look-info__close-wrapper').show()
      // reset scroll
      $('#look-info').scrollTop(0)
    })

    $('body').click((e) => {
      if ($(e.target).closest('.look-info').length === 0 && // not look-info
      $(e.target).is('area') === false && // not area
      $(e.target).closest('nav').length === 0) { // not menu
        $('#look-info, .look-info__close-wrapper').hide()
      }
    })

    $('.look-info__close-wrapper').click(() => {
      $('#look-info, .look-info__close-wrapper').hide()
    })

    $('.chevron-wrapper--left').click(() => {
       // go to previous detail shot
      const prevCandidates = $('#look-info__description-list p.active').prev()
      let prevDescription
      if (prevCandidates.length === 0) { // at last element
        prevDescription = $('#look-info__description-list p')[$('#look-info__description-list p').length - 1] // start from beginning
      } else {
        prevDescription = $('#look-info__description-list p.active').prev()
      }
      const prevLookId = $('map').attr('data-look-id')
      const prevLookDetailId = $(prevDescription).attr('data-look-detail-id')
      const detailImageSrc = `/img/details/${prevLookId}/${prevLookDetailId}.jpg`
      $('#look-info__detail-image').attr('src', detailImageSrc)
      $('#look-info__description-list p').hide().removeClass('active')
      $(`#look-info__description-list p[data-look-detail-id=${prevLookDetailId}][data-language=${localStorage.getItem('language')}]`).show().addClass('active')
    })

    $('.chevron-wrapper--right').click(() => {
       // go to next detail shot
      const nextCandidates = $('#look-info__description-list p.active').next()
      let nextDescription
      if (nextCandidates.length === 0) { // at last element
        nextDescription = $('#look-info__description-list p')[0] // start from beginning
      } else {
        nextDescription = $('#look-info__description-list p.active').next()
      }
      const nextLookId = $('map').attr('data-look-id')
      const nextLookDetailId = $(nextDescription).attr('data-look-detail-id')
      const detailImageSrc = `/img/details/${nextLookId}/${nextLookDetailId}.jpg`
      // debugger
      $('#look-info__detail-image').attr('src', detailImageSrc)
      $('#look-info__description-list p').hide().removeClass('active')
      $(`#look-info__description-list p[data-look-detail-id=${nextLookDetailId}][data-language=${localStorage.getItem('language')}]`).show().addClass('active')
    })
  })

  function setupResponsiveImageMap () {
    $('map').imageMapResize()
    $('img[usemap]').maphilight({
      alwaysOn: true,
      strokeWidth: 2,
      strokeOpacity: 0.5,
      strokeColor: '3366ff',
      fillOpacity: 0.4,
      fillColor: 'b3d1ff'
    })
  }

  function updateLanguageHTML () {
    if (localStorage.getItem('language') === 'nl') {
      $('#pills-nl-tab, #pills-nl').addClass('active show')
      $('#pills-eng-tab, #pills-eng').removeClass('active show')
      $('.look-info__other-language').html('ENG')
      $('.look-info__other-language').attr('data-set-language', 'eng')
    } else {
      $('#pills-nl-tab, #pills-nl').removeClass('active show')
      $('#pills-eng-tab, #pills-eng').addClass('active show')
      $('.look-info__other-language').html('NL')
      $('.look-info__other-language').attr('data-set-language', 'nl')
    }
  }
})
