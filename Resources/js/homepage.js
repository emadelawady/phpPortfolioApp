// main javascript file
(function() {
    "use strict";


    // sticky Navbar
    function stickyElement(e) {
  
        var header = document.querySelector('.hero');
        var headerHeight = getComputedStyle(header).height.split('px')[0];
        var navbar = document.querySelector('.navigation');  
        var hideOneSticky = document.querySelector('.on_sticky');  
        var scrollTop = document.querySelector('.scroll-top');  
        var scrollValue = window.scrollY;
        
        if (scrollValue > headerHeight){
          navbar.classList.add('is-fixed');
          hideOneSticky.classList.add('notVisible');
          scrollTop.classList.remove('hidden');

          
        } else if (scrollValue < headerHeight){
          navbar.classList.remove('is-fixed');
          scrollTop.classList.add('hidden');
          
        }
      
      }
      
      window.addEventListener('scroll', stickyElement);


      // scroll spy
      const makeNavLinksSmooth = ( ) => {
        const navLinks = document.querySelectorAll( '.nav-link' );
      
        for ( let n in navLinks ) {
          if ( navLinks.hasOwnProperty( n ) ) {
            navLinks[ n ].addEventListener( 'click', e => {
              e.preventDefault( );
              document.querySelector( navLinks[ n ].hash )
                .scrollIntoView( {
                  behavior: "smooth"
                } );
            } );
          }
        }
      }
      
      const spyScrolling = ( ) => {
        const sections = document.querySelectorAll( '.scroll-spy' );
      
        window.onscroll = ( ) => {
          const scrollPos = document.documentElement.scrollTop || document.body.scrollTop;
      
          for ( let s in sections )
            if ( sections.hasOwnProperty( s ) && sections[ s ].offsetTop <= scrollPos ) {
              console.log(sections.hasOwnProperty( s ) +" "+ sections[ s ].offsetTop + " "+scrollPos);
              const id = sections[ s ].id;
              document.querySelector( '.active' ).classList.remove( 'active' );
              document.querySelector( `a[href*=${ id }]` ).parentNode.classList.add( 'active' );
            }
        }  
      }
      
      makeNavLinksSmooth( );
      spyScrolling( );


      // counter

})()

