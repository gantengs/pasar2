<script>$('#open-popup').magnificPopup({
    items: [
      {
        src: 'http://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Peter_%26_Paul_fortress_in_SPB_03.jpg/800px-Peter_%26_Paul_fortress_in_SPB_03.jpg',
        title: 'Peter & Paul fortress in SPB'
      },
      {
        src: 'https://vimeo.com/123123',
        type: 'iframe' // this overrides default type
      },
      {
        src: $('<div class="white-popup">Dynamically created element</div>'), // Dynamically created element
        type: 'inline'
      },
      {
        src: '<div class="white-popup">Popup from HTML string</div>', // HTML string
        type: 'inline'
      },
      {
        src: '#my-popup', // CSS selector of an element on page that should be used as a popup
        type: 'inline'
      }
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});


</script>


<button id="open-popup">Open popup</button>

<div id="my-popup" class="mfp-hide white-popup">
  Inline popup
</div>
#open-popup {padding:20px}
.white-popup {
  position: relative;
  background: #FFF;
  padding: 40px;
  width: auto;
  max-width: 200px;
  margin: 20px auto;
  text-align: center;
}