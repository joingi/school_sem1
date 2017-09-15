function greeting(name) {
    console.log('Hello ' + name);
    // returns = Hello undefined
  }

  function processUserInput(callback) {
    var name = console.log('Please enter your name.');
    callback(name);
  }

  greeting(processUserInput);