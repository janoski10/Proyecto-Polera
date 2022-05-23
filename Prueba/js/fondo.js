function colorChanger(){
    var selectValue = document.getElementById("mySelection").value;
    document.getElementById("dummy").innerHTML= "Color seleccionado: " + selectValue;
    document.body.style.backgroundColor = selectValue;
}