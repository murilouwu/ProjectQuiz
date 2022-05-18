function ocultarA(el, el2, el3, el4, a) {
  var dis = document.getElementById(el).style.display;

  if (dis == "none"){
    document.getElementById(el).style.display = 'flex';
    document.getElementById(el2).style.display = 'none';
    document.getElementById(el3).style.display = 'none';
    document.getElementById(el4).style.display = 'none';
    document.getElementById(a).style.display = 'none';
  }else{
    document.getElementById(el).style.display = 'none';
    document.getElementById(a).style.display = 'flex';
  };
};
function desasparecer(a,b,c,d){
  document.getElementById(a).style.display = 'none';
  document.getElementById(b).style.display = 'none';
  document.getElementById(c).style.display = 'none';
  document.getElementById(d).style.display = 'none';
  document.getElementById('des').style.display = 'flex';
};