let output=document.getElementById("output");
function runScript(value) {
	const url = "script.php?var="+encodeURIComponent(value);
	fetch(url, {method:"GET"})
		.then(response => response.text())
		.then(data => {
		    output.textContent += "\n" + data;
		})
	.catch(error => {
	    console.error = 'Error:' + error;
	});
}
