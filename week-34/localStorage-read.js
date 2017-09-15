

  // Read from localstorage
    var sProducts = localStorage.sProducts;
    console.log(sProducts);

    // convert the string to an object
    var aProducts = JSON.parse( sProducts );
    console.log(aProducts);
    aProducts.push("x");
    console.log(aProducts);

