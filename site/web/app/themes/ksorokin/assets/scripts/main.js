/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
              },
      finalize: function() {
        // Header brand scroll animation
        $(window).scroll(function() {
          if ($(this).scrollTop()>0)
          {
            $('.navbar-brand').fadeOut('fast');
            $('nav.breadcrumb').css('z-index','1031');
          }
          else
          {
            $('.navbar-brand').fadeIn('fast');
          }
          if ($(this).scrollTop()>50)
          {
            $('nav.breadcrumb').css({ "position": "fixed", "margin-top": "-50px", "z-index": "1031" });
          }
          else
          {
            $('nav.breadcrumb').attr('style','');
          }
        });
              }
    },
    // Work post type pages
    'grid': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // Savvior
        savvior.init("main .row", {
          "screen and (max-width: 576px)": { columns: 1 },
          "screen and (min-width: 577px) and (max-width: 720px)": { columns: 2 },
          "screen and (min-width: 721px)": { columns: 3 },
        });

              }
    },
    // Work Lightbox page
    'lightbox': {
      finalize: function() {
        // Bootstrap Lightbox
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
