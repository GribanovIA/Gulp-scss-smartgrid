'use strict';
const fs = require('fs');

let path = 'src/components/';
let name = process.argv[2];
let fullPath = path+name;
let vueStartTemplate = `<template>
  <h1>{{msg}}</h1>
</template>

<script>
export default {
  data: ()=> ({
    msg: 'Hello from component !!!'
  })
}
</script>`
try {
  if (!fs.existsSync(fullPath)){
    fs.mkdirSync(fullPath);

    //Создаем файл vue
    fs.writeFile(`${fullPath}/${name}.vue`, vueStartTemplate, err =>{
      if(err) throw err;
    });

    //Создаем файл со стилями
    fs.writeFile(`${fullPath}/${name}.scss`, '', err =>{
      if(err) throw err;

      //Если ошибки, то делаем импорт файла в _components.scss
      fs.readFile(`${path}_components.scss`, 'utf8', (err, data)=>{
        if (err) throw err;
        let result = data + "\r\n" + `@import \"./${name}/${name}\";`;
        fs.writeFile(`${path}_components.scss`, result, err =>{
          if(err) throw err;
        });
      });

    });
  }
} catch (err) {
  console.log(err);
}