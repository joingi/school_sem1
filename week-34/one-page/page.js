var aProducts = [];
var aProductsPrice = [];

var btnAddProduct = document.querySelector('btnAddProduct');
btnAddProduct.addEventListener("click", function() {
  var txtProductName = document.querySelector("#txtProductName");
  var sProductName = txtProductName.value;
  console.log(sProductName);
  aProducts.push(sProductName);
  console.log(aProducts);
});

var btnAddPrice = document.querySelector('btnAddPrice');
btnAddPrice.addEventListener("click", function() {
  var txtProductPrice = document.querySelector("#txtProductPrice");
  var sProductPrice = txtProductPrice.value;
  //    console.log(sProductPrice);
  aProductsPrice.push(sProductPrice);
  console.log(aProductsPrice);
});

// VIEW PRODUCTS
var btnViewProducts = document.querySelector("btnViewProducts");
btnViewProducts.addEventListener("click", function() {
  // console.log('click');
  var productList = document.querySelector("#productList");
  for (var i = 0; i < aProducts.length; i++) {
    // productList.insertAdjacentHTML('afterend', aProducts[i]);

    for (var j = 0; j < aProductsPrice.length; j++) {
      // productList.insertAdjacentHTML('beforeend', aProductsPrice[j]);
    }
    var aProductInfo = aProducts.concat(aProductsPrice);
    // console.log(aProductInfo);
    productList.insertAdjacentHTML("beforeend", aProductInfo);
  }

  console.log(aProductInfo);
});

var btnShowPages = document.getElementsByClassName(".btnShowPages");
// this is an array
for (var i = 0; i < btnShowPages.length; i++) {
  // console.log("x");
  btnShowPages[i].addEventListener("click", function() {
    // console.log("x");
    // Hide the pages
    var aPages = document.getElementsByClassName("page");
    for (var j = 0; j < aPages.length; j++) {
      // console.log("x");
      aPages[j].style.display = "none";
    }

    var sDataAttibute = this.getAttribute("data-showThisPage");
    // pageOne or pageTwo
    console.log(sDataAttibute);
    document.getElementById(sDataAttibute).style.display = "flex";
  });
}

/*
            var aPages = document.getElementsByClassName( "page" );
            // console.log( aPages );
            for(var i = 0; i < aPages.length; i++)
            {
                // console.log("x");
                aPages[i].style.display = "none";
            }

            // Show pageOne
            var btnShowPageOne = document.getElementById("testMe");
            btnShowPageOne.addEventListener("click",function(){
                console.log("clicked");
                // how do I get the data-showThisPage from the bottom
                console.log( this ); // is the button itself
                var sDataAttibute = this.getAttribute("data-showThisPage");
                console.log(sDataAttibute);
            });
            */

/*
            var btnShowPageOne = document.getElementById("btnShowPageOne");
            // addEventListener
            btnShowPageOne.addEventListener( "click" , function(){
                console.log("button ONE has been clicked");
                // select the page main menu
                var pageMainMenu = document.getElementById("pageMainMenu");
                pageMainMenu.style.display = "none";
                var pageOne = document.getElementById("pageOne");
                pageOne.classList.add("moveToFront");
            } );
            */
