document.addEventListener('DOMContentLoaded', function () {

	const questions = document.querySelectorAll('.faq-question');

	questions.forEach(function (question) {

		question.addEventListener('click', function () {

			const item = this.parentElement;

			const answer = item.querySelector('.faq-answer');

			document.querySelectorAll('.faq-item').forEach(function (faq) {

				if (faq !== item) {

					faq.classList.remove('active');

				}

			});

			item.classList.toggle('active');

		});

	});

});