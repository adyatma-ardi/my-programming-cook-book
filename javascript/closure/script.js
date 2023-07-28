// function ucapkanSalam(waktu) {
//     return function (nama) {
//         console.log(`Halo ${nama}, Selamat ${waktu}, semoga harimu menyenagkan!`);
//     }
// }

// let selamatPagi = ucapkanSalam('Pagi');
// let selamatSiang = ucapkanSalam('Siang');
// let selamatMalam = ucapkanSalam('Malam');

// selamatPagi('Achmad');
// console.dir(selamatPagi);

let add = (function () {
    let counter = 0;
    return function () {
        return ++counter;
    }
})();

counter = 100;

console.log(add());
console.log(add());
console.log(add());

console.dir(add);