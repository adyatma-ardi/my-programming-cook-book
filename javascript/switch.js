// var angka = prompt('masukkan angka!');

// switch (angka) {
//     case '1':
//         alert('anda memasukkan angka 1');
//         break;
//     case '2':
//         alert('anda memasukkan angka 2');
//         break;
//     case '3':
//         alert('anda memasukkan angka 3');
//         break;
//     default:
//         alert('anda memasukkan angka yang salah');
//         break;
// }

var item = prompt('masukkan nama makanan / minuman : \n (nasi, daging, susu, hamburger, softdrink)');

switch (item) {
    case 'nasi':
    case 'daging':
    case 'susu':
        alert('makanan / minuman yang SEHAT!');
        break;
    case 'hamburger':
    case 'softdrink':
        alert('makanan / minuman yang TIDAK SEHAT!');
        break;
    default:
        alert('nama makanan / minuman yang anda masukkan salah');

}