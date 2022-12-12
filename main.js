window.addEventListener("scroll",function() { 
    const header=document.querySelector('header');
    header.classList.toggle("sticky",window.scrollY>0);
})

var toggle = document.getElementById("toggle");
var container = document.getElementById("container");

toggle.onclick = function(){
	container.classList.toggle('active');
}

