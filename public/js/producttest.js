for (var i = 0; i <= modal.length; i++) {
var img = document.getElementById("myImg"+i);
var modalImg = document.getElementById("img"+i);
var captionText = document.getElementById("caption");
img.onclick = function(){
 modal.style.display = "block";
 modalImg.src = this.src;
 captionText.innerHTML = this.alt;
}
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
debugger;
