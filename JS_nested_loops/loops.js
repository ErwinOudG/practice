var a = [
  [4,2,0],
  [8,11,9],
  [7,0,7],
  [7,4,28],
  [3,10,26],
];
var result = "";
for (var i = 0; i < a.length; i++) {
  result += "row " + i + "<br>";
  var aa = a[i];
  for (var x = 0; x < aa.length; x++) {
    result += aa[x] + "<br>";
  }
}
document.getElementById("demo").innerHTML = result;
