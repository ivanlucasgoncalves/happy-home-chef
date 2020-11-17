/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */

class Reviews {
    constructor( el ) {
        this.reviews = el;
        this.btns = this.reviews.querySelectorAll( '.button-review' );
        this.reviewBlk = this.reviews.querySelectorAll( '.review-blk' );
        this.init();
    }

    init() {
        if ( null !== this.reviews ) {
            this.btns.forEach( ( btn ) => {
                const btnId = btn.dataset.id;

                btn.addEventListener( 'click', ( e ) => {
                    const selected = document.getElementsByClassName( 'current-btn-review' );
                    selected[ 0 ].className = selected[ 0 ].className.replace( ' current-btn-review', '' );
                    btn.className += ' current-btn-review';

                    this.reviewBlk.forEach( ( review ) => {
                        const reviewId = review.dataset.id;

                        if ( btnId === reviewId ) {
                            review.style.display = 'block';
                        } else {
                            review.style.display = 'none';
                        }
                    } );
                } );
            } );
        }
    }
}

const reviews = document.querySelector( '.block-component--reviews' );
if ( null !== reviews ) {
    new Reviews( reviews );
}
