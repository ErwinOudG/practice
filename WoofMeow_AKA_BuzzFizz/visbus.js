var text = "";
for (var i = 1; i < 101; i++) {
    if (i%3==0) { text += " fizz" }
    if (i%5==0) { text += " buzz" }
    if ((i%3>0) && (i%5>0)) { text += i }
    text += "<br>" }

document.getElementById("visbus").innerHTML = text;
