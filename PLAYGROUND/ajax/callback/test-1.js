
// fullName() holds firstname & lastname, Then lastname is passed in to greeting()
//
function fullName(firstName, lastName, greeting) {
  console.log("My name is " + firstName + " " + lastName);
  greeting(lastName);

}

var heilsa = function(eftirnafn) {
  console.log("Welcome Herra. " + eftirnafn);
};

fullName("Johann", "ingi", heilsa);

