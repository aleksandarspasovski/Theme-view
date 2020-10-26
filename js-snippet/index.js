/*TODO: Make if button is already clicked you cannot click on it again*/
var cs_list =  document.querySelectorAll('.cs-shopping-list');
var clo_all =  document.querySelectorAll('.clo-all');
var counter = 0;
// by default firs div Hats is selected
clo_all[0].classList.add('show-dd');
cs_list[0].style.pointerEvents = "none";

for (let i = 0; i < cs_list.length; i++){
	console.log(cs_list[i]);
	cs_list[i].addEventListener('click', (e) => {
		counter = 1;
		var tar = e.target.parentElement;
		console.log(tar);
		for (let u = 0; u < clo_all.length; u++) {
			clo_all[u].classList.remove('show-dd');
			clo_all[i].classList.add('show-dd');
			cs_list[i].style.pointerEvents = "visible";
		}
	});
}

