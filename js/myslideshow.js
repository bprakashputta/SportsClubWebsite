// var myIndex = 0;
// carousel();

// function carousel() {
//   var i;
//   var x = document.getElementsByClassName("mySlides");
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   myIndex++;
//   if (myIndex > x.length) {myIndex = 1}    
//   x[myIndex-1].style.display = "block";  
//   setTimeout(carousel, 2000); // Change image every 2 seconds
// }


$(function() { 
  setTimeout(function(){
    //display the first image
    $('#slideshow > div:first')
      .setDivSize(30, 40)
      .center(false)
      .fadeIn(1000);
    
    //loop through the remaining images
    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .setDivSize(30,40)
        .center(false)
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    },  5000);
  }, 500 );
});