// Scroll Top animated
$(window).on('scroll',function () {
	if ($(this).scrollTop() > 600) {
		$('.scroll-to-top').fadeIn();
	} else {
		$('.scroll-to-top').fadeOut();
	}
});
$('.scroll-to-top').on('click',function(){
		$('html, body').animate({
		scrollTop: 0
	}, 1500);
	return false;
});


// //Modal

// const exampleModal = document.getElementById('exampleModal');
// exampleModal.addEventListener('show.mdb.modal', (e) => {
//   // Button that triggered the modal
//   const button = e.relatedTarget;
//   // Extract info from data-mdb-* attributes
//   const recipient = button.getAttribute('data-mdb-whatever');
//   // If necessary, you could initiate an AJAX request here
//   // and then do the updating in a callback.
//   //
//   // Update the modal's content.
//   const modalTitle = exampleModal.querySelector('.modal-title');
//   modalTitle.textContent = `${recipient}`;
//   modalBodyInput.value = recipient;
// })

//End Modal

// fillter pluging
	var mixer = mixitup('.product-itmes');

// icone click
	 $('.bg').click(function(){
	 	$('.bg').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg2').click(function(){
	 	$('.bg2').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg3').click(function(){
	 	$('.bg3').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg3').click(function(){
	 	$('.bg3').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg4').click(function(){
	 	$('.bg4').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg5').click(function(){
	 	$('.bg5').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg6').click(function(){
	 	$('.bg6').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg7').click(function(){
	 	$('.bg7').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg8').click(function(){
	 	$('.bg8').css({"color":"#fff","background":"#e13ed7"});
	 });

	 $('.bg , .bg2 ,.bg3,.bg3,.bg4,.bg5,.bg6,.bg7,.bg8').dblclick(function(){
	 	$('.bg , .bg2 , .bg3,.bg4,.bg5,.bg6,.bg7,.bg8').css({"color":"#c5c3c5","background":"#fff"});
	 });
// Search button
	const searchInputDropdown = document.getElementById('search-input-dropdown');
	const dropdownOptions = document.querySelectorAll('.input-group-dropdown-item');

	searchInputDropdown.addEventListener('input', () => {
	const filter = searchInputDropdown.value.toLowerCase();
	showOptions();
	const valueExist = !!filter.length;

	if (valueExist) {
		dropdownOptions.forEach((el) => {
		const elText = el.textContent.trim().toLowerCase();
		const isIncluded = elText.includes(filter);
		if (!isIncluded) {
			el.style.display = 'none';
		}
		});
	}
	});

	const showOptions = () => {
	dropdownOptions.forEach((el) => {
		el.style.display = 'flex';
	})
	}
	
