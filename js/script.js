function copy(){
    var copyText = document.getElementById("campo");
    copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("IP Copiado: " + copyText.value);
}