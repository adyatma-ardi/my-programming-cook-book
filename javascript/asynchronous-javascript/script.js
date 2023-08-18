// asynchronous dan event loop(1)
// console.log('satu');
// setTimeout(() => {
//     console.log('dua');
// }, 5000);
// console.log('tiga');


// =======================

// synchronous callback (2)
// function halo(nama) {
//     alert(`Halo, ${nama}`);
// }

// tampilkanPesan(halo);

// function tampilkanPesan(callback) {
//     const nama = prompt(`Masukkan nama :`);
//     callback(nama);
// }

// tampilkanPesan(nama => alert(`Halo, ${nama}`));

// =======================


// asynchronous callback - Vanilla JS (3)
// function getDataEmployee(url, success, error) {
//     let xhr = new XMLHttpRequest();

//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === 4) {
//             if (xhr.status === 200) {
//                 success(xhr.response);
//             } else if (xhr.status === 404) {
//                 error();
//             }

//         }
//     }

//     xhr.open('get', url);
//     xhr.send();
// }

// console.log('mulai');
// getDataEmployee('data/employee.jsn', results => {
//     const employ = JSON.parse(results);
//     employ.forEach(e => console.log(e.nama));
// }, () => {
//     console.log('error');
// });
// console.log('selesai');


// asynchronous callback - JQuery (4)
console.log('mulai');
$.ajax({
    url: 'data/employee.json',
    success: (employ) => {
        employ.forEach(e => console.log(e.nama));
    },
    error: (err) => {
        console.log(err.responseText);
    }
});
console.log('selesai');