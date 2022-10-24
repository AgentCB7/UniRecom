
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 70  || document.documentElement.scrollTop > 20)
  {
    mybutton.style.display = "block";
  } 
  else 
  {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.documentElement.scrollTop = 0;
}

nodiv=document.getElementById('naptha_container0932014_0707');
nodiv.remove();