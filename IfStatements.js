var isMale = false;
var isTall = false;

if(isMale && isTall){
  document.write("You are a tall man");
} else if (isMale&& !isTall) {
  document.write("You are a short man");
} else if (!isMale&& isTall){
  document.write("You are a tall woman");
} else {
  document.write("You are a short woman")
}
