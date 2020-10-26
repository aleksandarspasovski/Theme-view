window.addEventListener('load', () => {
	makeAjax();
	showController();
});

function makeAjax(method, url){
	var xhr = new XMLHttpRequest();
	// console.log(xhr);
	xhr.open(method, url);
	xhr.onreadystatechange = () =>{
		if (xhr.readyState === 4 && xhr.status === 200) {
			if (xhr.responseText == false) {
				var response = JSON.parse(xhr.responseText);
				// showResult('results', response);
				console.log(response);
			}
		}
	}
	xhr.send();
}
function showController(data){
	var reg = document.querySelector('.reg');
	reg.addEventListener('click', (e) => {
		e.preventDefault();
		location.href = 'register?' +'reg=true'+ '&user_id=2';
		console.log(e.target);

	});
}