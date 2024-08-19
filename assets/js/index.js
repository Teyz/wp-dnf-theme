$(document).ready(function(){
	$('#nav-icon3').click(function(){
    $(this).toggleClass('open');
		$('.mobileMenu').toggleClass('open');
    $('body').toggleClass('open');
	});

	const textContainers = document.querySelectorAll('.partner-details-container');

    textContainers.forEach(container => {
        const content = container.querySelector('.content');
        const voirPlusButton = container.querySelector('.showMore');

        voirPlusButton.addEventListener('click', function() {
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                voirPlusButton.textContent = 'Voir plus';
            } else {
                content.classList.add('hidden');
                voirPlusButton.textContent = 'Voir moins';
            }
        });
    });
});