var password ="Monkeys2000";
var response;
var entryCount = 0;
var entryLimit = 3;
var error = false;


while(response!=password && !error){
  if(entryCount<entryLimit){
    response = window.prompt("Enter Password");
    entryCount++;
  } else {
    error = true;
  }
}
if (error){
  alert("Incorrect password, please try later.")
} else{
  alert("You got it!")
}
