import Filterizr from 'filterizr';

(function() {

    // Default options
    const options = {
      animationDuration: 0.5, // in seconds
      callbacks: {
        onFilteringStart: function() { },
        onFilteringEnd: function() { },
        onShufflingStart: function() { },
        onShufflingEnd: function() { },
        onSortingStart: function() { },
        onSortingEnd: function() { }
      },
      controlsSelector: '', // Selector for custom controls
      delay: 0, // Transition delay in ms
      delayMode: 'progressive', // 'progressive' or 'alternate'
      easing: 'ease-out',
      filter: 'all', // Initial filter
      filterOutCss: { // Filtering out animation
        opacity: 1,
        transform: 'scale(0.5)'
      },
      filterInCss: { // Filtering in animation
        opacity: 1,
        transform: 'scale(1)'
      },
      // gridItemsSelector: '.filtr-item',
      gutterPixels: 0, // Items spacing in pixels
      layout: 'sameSize', // See layouts
      multifilterLogicalOperator: 'or',
      searchTerm: '',
      setupControls: true, // Should be false if controlsSelector is set
      spinner: { // Configuration for built-in spinner
        enabled: false,
        fillColor: '#2184D0',
        styles: {
          height: '75px',
          margin: '0 auto',
          width: '75px',
          'z-index': 2,
        },
      },
    }

// Adjust the CSS selector to match the container where
// you set up your image gallery
const filterizr = new Filterizr('.filtr-container', options);


})();
