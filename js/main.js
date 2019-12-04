// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

function showFlags() {
    document.getElementById("btn__before").style.display = 'none';
    document.getElementById("btn__after").style.display = 'block';
}
function download__cv(lang){
    window.open('cv/CV-Tristan-Glotin-'+lang+'.pdf','_blank');
}
