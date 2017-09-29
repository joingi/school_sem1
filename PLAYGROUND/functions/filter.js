var animals = [
    { name: 'Fluffykins',   species: 'rabbit' },
    { name: 'Hamilton',     species: 'dog' },
    { name: 'Harold',       species: 'fish' },
    { name: 'Caro',         species: 'dog' },
    { name: 'Ursula',       species: 'cat' },
    { name: 'Jimmy',        species: 'fish' }
];

// Filters takes 1 argument!, another function.
// functions that are sent into another functions are called "callback function"
// .filter() will loop through each item in the callback and return true or false
// Then it will retun new filtered version of the array in bellow example it returns the dogs

var animalsName = function (animalName) {
    return animalName.name;
};

var isDog = function (animal) {
    return animal.species == 'dog';
};
var dog = animals.filter(isDog);
var names = animals.filter(animalsName);
// console.log(dog);
console.log(names);

// var dogs = [];
// for (var i = 0; i < animals.length; i++) {
//     if (animals[i].species === 'dog') {
//         dogs.push(animals[i]);
//     }
// }
// console.log(dogs);