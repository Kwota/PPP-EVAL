
                    // AVERAGING FUNCTIONS

function calcMe(){
  document.getElementById("artimidtotal").value=
  (parseInt(document.getElementById("midexcoor").value)
  +parseInt(document.getElementById("midmove").value)
  +parseInt(document.getElementById("midpresence").value)
  +parseInt(document.getElementById("midinterp").value)
  +parseInt(document.getElementById("midact").value))/5;
}

function artFinal(){
  document.getElementById("artifinaltotal").value=
  (parseInt(document.getElementById("finalexcoor").value)
  +parseInt(document.getElementById("finalmove").value)
  +parseInt(document.getElementById("finalpresence").value)
  +parseInt(document.getElementById("finalinterp").value)
  +parseInt(document.getElementById("finalact").value))/5;
}

function acromid(){
  document.getElementById("acromidtotal").value=
  (parseInt(document.getElementById("midtech").value)
  +parseInt(document.getElementById("midexecute").value)
  +parseInt(document.getElementById("midwell").value)
  +parseInt(document.getElementById("midauto").value)
  +parseInt(document.getElementById("midvirt").value))/5;
}

function acrofinal(){
  document.getElementById("acrofinaltotal").value=
  (parseInt(document.getElementById("finaltech").value)
  +parseInt(document.getElementById("finalexecute").value)
  +parseInt(document.getElementById("finalwell").value)
  +parseInt(document.getElementById("finalauto").value)
  +parseInt(document.getElementById("finalvirt").value))/5;
}
