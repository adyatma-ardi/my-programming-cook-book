// Higher order function - pendahuluan
// 1
// function kerjakanTugas(matakuliah, selesai) {
//     console.log(`Mulai mengerjakan tugas ${matakuliah}`);
//     selesai();
// }

// function selesai() {
//     console.log('Selesai mengerjakan tugas');
// }
// // kerjakanTugas('Software Engineering', selesai);

// // 2
// function repeat(n, action) {
//     for (let i = 1; i <= n; i++) {
//         action(i);
//     }
// }
// repeat(10, console.log);

// // Filter, map & reduce
// const angka = [-1, 8, 9, 1, 4, -5, -4, 3, 2, 9];

// // 1. filter
// // const newAngka = [];
// // for (let i = 0; i < angka.length; i++) {
// //     if (angka[i] >= 3) {
// //         newAngka.push(angka[i]);
// //     }
// // }

// // console.log(newAngka);

// const newAngka = angka.filter(a => a >= 3);
// console.log(newAngka);

