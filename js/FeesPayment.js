var getDate = document.getElementById("date");
var currentDate = new Date();
var day = currentDate.getDate();
var month = currentDate.getMonth()+1;
var year = currentDate.getFullYear();

getDate.innerText = `${day}/${month}/${year}`;