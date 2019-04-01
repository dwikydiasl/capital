// search
function myFunction() {
  var x = document.getElementById("myDIV");
 if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function close_search() {
  var element = document.getElementById("myDIV");
  element.classList.remove("myDIV");
}

// owl-carousel
$('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:3
})

// header

