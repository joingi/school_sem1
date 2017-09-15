/*
var jUser = {};

jUser.name = "X";
jUser.lastName = "Y";
console.log(jUser);

jUser.name = "K";
console.log(jUser);

delete jUser.lastName;
console.log(jUser);
 */




// ARRAYS and JSON
var ajUsers = [
                {
                    "name":"A" ,
                    "phones":[1,2,3]
                },
                {
                    "name":"B",
                    "siblings":[
                        {"name":"AA"},
                                    {
                                        "name":"BB",
                                        "pets":[{"name":"Tobi"}]
                                    }
                                ]
                }
            ];



var aa = ajUsers[1].siblings[0].name;
var bb = ajUsers[1].siblings[1].name;

ajUsers[1].siblings[1].pets[0].message = "message";
ajUsers[1].siblings[1].pets[0].message = bb;
// console.log(bb);

// ajUsers[1].siblings[1].pets[1].message = bb;
ajUsers[1].siblings[1].pets[0].name = aa;

    console.log(ajUsers);
