$( document ).ready(function() {
		/*if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
		alert("Celular");
		} else {
		alert("PC");
		}*/
		});

		function printData2()
		{
		  newWin= window.open("");
		  newWin.print();
		  newWin.close();
		  console.log(divToPrint);
		}

		function printData(){
		  var mywindow = window.open('');
		  mywindow.document.write('<html><head><title>' + document.title  + '</title>');
		  mywindow.document.write('<link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">');
		  mywindow.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">');
		  mywindow.document.write('</head><body >');
		  mywindow.document.write('<h1>' + document.title  + '</h1>');
		  mywindow.document.write(document.getElementById("contenido").innerHTML);
		  mywindow.document.write('</body></html>');

		mywindow.document.close(); // necessary for IE >= 10
		mywindow.focus(); // necessary for IE >= 10*/

		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
		  setTimeout(function () {
		    mywindow.print();
		  }, 500);
		} else {
		  setTimeout(function () {
		    mywindow.print();
		    mywindow.close();
		  }, 500);
		}

		return true;
		}