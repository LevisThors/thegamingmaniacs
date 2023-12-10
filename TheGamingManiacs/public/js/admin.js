var select = document.getElementById("multi-select");

if(select){
  select.addEventListener("mousedown", (event) => {
    event.preventDefault();
    
    var option = event.target;
    
    if (option.tagName == "OPTION") {
      option.selected = !option.selected;
    }
  }); 
}


