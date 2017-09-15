
    // var name = 'Johann';
    // var lastname = 'ingi';

    // console.log(name);
    // console.log(lastname);
    // console.log(name + ' ' + lastname);

    // var price = '10';
    // var tax = '11';

    // var newPrice = parseInt(price);
    // var newTax = parseInt(tax)

    // var newPrice = Number(price);
    // var newTax = Number(tax)

    // var total = newPrice + newTax;
    // console.log(parseInt(total));


    // var price = "10.95";

    // var newPrice = Number(price);
    // console.log(newPrice);

    // var newPrice = parseInt(price);
    // console.log(newPrice);

    // var newPrice = parseFloat(price);
    // console.log(newPrice);

    // var price = "10.90";
    // var newPrice = Number(price).toFixed(2);
    // newPrice = Number(newPrice);
    // console.log(newPrice);

    // var correctEmail = 'a@a.com';
    // var correctPhone = '12345'
    // var correctPassword = 'SECRET'

    // var userEmail = 'a@a.is';
    // var userPhone = '12345';
    // var userPassword = 'SECRET';

    // if ((userEmail == correctEmail || userPhone == correctPhone) && userPassword == correctPassword ) {
    //     console.log('YES');
    // } else{
    //     console.log('No');
    // }

//   var aData = ['A', 'B', 'C', 'D', 'E'];
//   var iIndex = 2;
//   var iNumberofElementToDelete = 2;

//   aData.splice(iIndex,iNumberofElementToDelete);

//   console.log(aData);

  // var aData = ['A', 'B', 'C', 'D', 'E'];

  // for (var i = 0; i < aData.length; i++) {
  //    console.log(aData[i]);

  // }


  // var aData = ['A', 'B', 'NO', 'D'];

  // var correctUserName = 'A';
  // var correctPassword = 'B';

  // var sUserName = 'A';
  // var sPassword = 'B'

  // var findPosition = aData.indexOf('NO');

  // if (sUserName == correctUserName && sPassword == correctPassword) {
  //   aData[findPosition] = 'Yes';
  // } else {
  //   aData[findPosition] = '--';
  // }
  // console.log(aData);

  // var aData = ['A', 'NO', 'C', 'NO'];

  // for (var i = 0; i < aData.length; i++) {
  //   if (aData[i] == 'NO') {
  //     aData[i] = 'YES';
  //   }

  // }

  // var aData = ['A', 'A', 'A', 'B', 'C', 'D', 'E'];

  //   for (var i = 0; i < aData.length; i++) {
  //     if (aData[i] == 'A') {
  //       aData.splice(i, 1);
  //       i--;
  //     }
  //   }

  //   console.log(aData);


  // var aData = [
  //   ["A",["B"]],
  //   ["C",
  //   [["D",["XX",[["YY"]]]],["E"]]],
  //   ["X"]
  // ];
  // console.log(aData[1][1][0][1][1][0]);

  // var aData = [ [1,"A"],[2,"B"] ];
  // Price 1 for product A
  // Price 2 for product
  // for (var i = 0; i < aData.length; i++) {
  //   console.log('Product ' + aData[i][0] + ' for product ' + aData[i][1]);

  // }

 /*  var aData = [ [1,"A"],[2,"B"],[1,"C"],[3,"D"] ];

  for (var i = 0; i < aData.length; i++) {
     for (var j = 0; j < aData[i][0]; j++) {
      console.log(aData[i]);
     }
  } */

// Solution 2
var aData = [[1, "A"], [2, "B"], [1, "C"], [3, "D"]];
for (var i = 0; i < aData.length; i++) {
  console.log(aData[i]);
  // aData[i] contains [1,"A"],[2,"B"],[1,"C"],[3,"D"]
  var iNumber = aData[i][0];
  console.log("The number is: " + iNumber);
  var sLetter = aData[i][1];
  console.log("The letter is: " + sLetter);
  for (var j = 0; j < iNumber; j) {
    console.log(sLetter);
  }
}
  /*
  A
  B
  B
  C
  D
  D
  D
  */
