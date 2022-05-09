function multipli(nr1,nr2){
  var sum = 0;
  for(nr1; nr1>0; --nr1){
    sum = sum + nr2;
    console.log(sum);
  }
  return sum;
}
console.log(multipli(359,128));