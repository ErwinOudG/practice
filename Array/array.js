var array1 = [5,6,7,8,9,10,11,12,13,14];
var array2 = [0,2,4,6,8,10,12,14,16,18];
var array3 = arrsum(array1,array2)
document.getElementById("demo").innerHTML = array3;

function arrsum(ar1,ar2) {
  var ar3 = [];
  for (var i = 0; i < ar1.length; i++) {
    ar3[i] = ar1[i] + ar2[i];
  }
  return ar3
}
