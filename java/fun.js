function ocultar(el, el2) {
  var display = document.getElementById(el).style.display;
  var display2 = document.getElementById(el2).style.display;
  if (display == "none")
    if (display2  == "none") {
      document.getElementById(el).style.display = 'flex';
    }else{
      document.getElementById(el).style.display = 'flex';
      document.getElementById(el2).style.display = 'none';
    }
  else{
    document.getElementById(el).style.display = 'none';
  };
};