'use strict';

const btn = document.querySelector('header a');
const h1 = document.querySelector('header h1');
const h1text = h1.innerHTML;
let counter = 0;
btn.addEventListener('click' , () =>{
    counter++;
//     if(counter % 2 === 0){
//         h1.innerText = h1text;
//     }else{
//     h1.innerText = "będzie Pan Zadowolony :)"
// }
counter % 2 === 0 ? h1.innerText = h1text : h1.innerText = "Będzie Pan Zadowolony :)"

});