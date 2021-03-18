// Carousel cycle

$(document).ready(function() {
    $("#myCarousel").carousel("cycle");
})

// collapsible
var coll = document.getElementById("button");
var content = document.getElementById("profil-lengkap")
coll.addEventListener("click", function(){
    if(content.style.display === "block"){
        content.style.display = "none";
        content.style.maxHeight = null;
        coll.innerHTML = "Lihat Selengkapnya...";
    } else {
        content.style.display = "block";
        content.style.maxHeight = content.scrollHeight + "px";
        coll.innerHTML = "Kembali";
    }
});
