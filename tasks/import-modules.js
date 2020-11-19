'use strict';

let fileName = process.argv[2];

//Scss
let fs = require('fs');
fs.readFile('src/blocks/_modules.scss', 'utf8', (err, data)=>{
  if (err) throw err;
  let result = data + "\r\n" + `@import \"modules/${fileName}/${fileName}\";`;
  console.log(result);
  fs.writeFile('src/blocks/_modules.scss', result, err =>{
    if(err) throw err;
  });
});

//JS
fs.readFile('src/js/import/modules.js', 'utf8', (err, data)=>{
  if (err) throw err;
  let result = data + "\r\n" + `import \"%modules%/${fileName}/${fileName}\";`;
  console.log(result);
  fs.writeFile('src/js/import/modules.js', result, err =>{
    if(err) throw err;
  });
});

//Html
fs.readFile('src/views/modules.php', 'utf8', (err, data)=>{
  if (err) throw err;
  
  let result = data + "\r\n" + `@@include("../blocks/modules/${fileName}/${fileName}.php")`;
  console.log(result);
  fs.writeFile('src/views/modules.php', result, err =>{
    if(err) throw err;
  });
});

