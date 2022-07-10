function copy(){
    var copyText = document.getElementById("campo").value;
   
  copyText.setSelectionRange(0, 99999); /* For mobile devices */
  navigator.clipboard.writeText(copyText);
  
  /* Alert the copied text */
  alert("IP Copiado: " + copyText.value);
}