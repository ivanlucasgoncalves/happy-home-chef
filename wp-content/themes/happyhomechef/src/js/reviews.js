
export default class Reviews {

	constructor() {
		this.reviews = document.querySelector( '.block-component--reviews' );
		this.btns = this.reviews.querySelectorAll( '.button-review' );
		this.reviewBlk = this.reviews.querySelectorAll( '.review-blk' );
		this.init();
	}

	init() {

		this.btns.forEach(btn => {
			const btnId = btn.dataset.id;

			btn.addEventListener( 'click', (e) => {

				let selected = document.getElementsByClassName( 'current-btn-review' );
				selected[0].className = selected[0].className.replace( ' current-btn-review', '' );
				btn.className += ' current-btn-review';

				this.reviewBlk.forEach(review => {
					const reviewId = review.dataset.id;
	
					if( btnId === reviewId) {
						review.style.display = 'block';
					} else {
						review.style.display = 'none';
					}
					
				});
				

			} );

			
		});

	}

}