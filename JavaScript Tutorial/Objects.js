
var person = {
  name:"David",
  age: 27,
  isMale: true,
  occupation: "Tech support",
  printName: function(){
    document.write("<h1>"+this.occupation+"</h1>")
  }
};
person.printName();
