document.addEventListener( 'DOMContentLoaded', function() {
	var questions = document.querySelectorAll( '.faq-question' );

	questions.forEach( function( question ) {
		question.addEventListener( 'click', function() {
			var item = question.closest( '.faq-item' );
			var isActive = item.classList.contains( 'active' );

			questions.forEach( function( currentQuestion ) {
				var currentItem = currentQuestion.closest( '.faq-item' );
				var answer = document.getElementById( currentQuestion.getAttribute( 'aria-controls' ) );

				currentItem.classList.remove( 'active' );
				currentQuestion.setAttribute( 'aria-expanded', 'false' );
				answer.setAttribute( 'aria-hidden', 'true' );
			} );

			if ( ! isActive ) {
				var activeAnswer = document.getElementById( question.getAttribute( 'aria-controls' ) );

				item.classList.add( 'active' );
				question.setAttribute( 'aria-expanded', 'true' );
				activeAnswer.setAttribute( 'aria-hidden', 'false' );
			}
		} );
	} );
} );
