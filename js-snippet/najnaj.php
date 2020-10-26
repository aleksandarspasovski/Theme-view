<script type="text/javascript">

	var menu_list = document.querySelectorAll('.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.has-sub');
	for (let i = 0; i < menu_list.length; i++) {
		menu_list[i].children[0].addEventListener('click', (e) => {
			e.preventDefault();

			if (!menu_list[i].classList.contains('open')) {
				menu_list[i].classList.add('open');
				menu_list[i].lastChild.style.display = 'block';
			} else{
				menu_list[i].classList.remove('open');
				menu_list[i].lastChild.style.display = 'none';
			}
		});
	}

</script>