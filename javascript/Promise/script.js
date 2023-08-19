// // Pengantar Promise 1
let ditepati1 = true; //kalo nilai variabel ditepati digantik dengan false maka catch akan mengambil alih
const janji1 = new Promise((resolve, reject) => {
    if (ditepati1) {
        resolve('Janji telah ditepati');
    } else {
        reject('Ingkar janji');
    }
});

// janji1
// .then(response => console.log(`Ok! ${response}`))
// .catch(response => console.log(`Not ok! ${response}`));

// Pengantar Promise 2
let ditepati2 = true;
const janji2 = new Promise((resolve, reject) => {
    if (ditepati2) {
        setTimeout(() => {
            resolve('Ditepati setelah beberapa waktu');
        }, 5000);
    } else {
        setTimeout(() => {
            reject('Tidak ditepati setelah beberapa waktu');
        }, 5000);
    }
});

// console.log('mulai');
// console.log(janji2.then(() => console.log(janji2)));
// janji2
// .finally(() => console.log('selesai menunggu'))
// .then((response) => console.log(`Ok! ${response}`))
// .catch((response) => console.log(`Not ok! ${response}`));
// console.log('selesai');

// Promise.all
// API 1 (film)
const film = new Promise(resolve => {
    setTimeout(() => {
        resolve([{
            judul: 'Avengers',
            sutradara: 'Adyatma Ardi',
            pameran: 'Doddy, Erik'
        }]);
    }, 1000);
});

// API 2 (cuaca)
const cuaca = new Promise(resolve => {
    setTimeout(() => {
        resolve([{
            kota: 'Bandung',
            temp: 26,
            kondisi: 'Cerah berawan'
        }]);
    }, 500);
});

// film.then(response => console.log(response));
// cuaca.then(response => console.log(response));

Promise.all([film, cuaca])
    // .then(response => console.log(response));
    .then(response => {
        const [film, cuaca] = response;
        console.log(film);
        console.log(cuaca);
    });
