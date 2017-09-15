// if (localStorage.sProducts) {
//     console.log('Yes - Prod in local');
// }


// document.getElementById("id_of_textbox")
// .addEventListener("keyup", function(event) {
// event.preventDefault();
// if (event.keyCode == 13) {
//     document.getElementById("id_of_button").click();
// }
// });


// SHOW PAGES
var aBtnShowPages = document.getElementsByClassName('btnShowPage')

    for (var i = 0; i < aBtnShowPages.length; i++) {
        // console.log('X'); //X*3

        aBtnShowPages[i].addEventListener('click', function () {
            // console.log('X');
            // Hide pages
            var aPages = document.getElementsByClassName( 'main-page' );
            for(var j = 0; j < aPages.length; j++) {
            // console.log('J');
            aPages[j].style.display = 'none';
        }
        // Show page
        var sDataAttribute = this.getAttribute('data-showThisPage');
        // console.log(sDataAttribute);
        document.getElementById(sDataAttribute).style.display = 'flex';

        });
    }