// membuat function dengan rest parameter (1)
function myFunc(a, b, ...args) {
    // return `a = ${a}, b = ${b}, other = ${args}`;

    // return arguments;
    // return args;
    // return Array.from(arguments);
    // return [...arguments];
}

// console.log(myFunc(1, 2, 3, 4, 5));

// melakukan operasi (+) pada argumen yang dimasukkan secara dinamis dalam rest parameter (2)
function jumlahkan(...args) {
    let result = 0;
    // menggunakan for...of (1)
    for (const arg of args) {
        result += arg;
    }
    // return result;

    // menggunakan 
    return args.reduce((a, b) => a + b);
}

// console.log(jumlahkan(1, 2, 3, 4, 5));

// array destructuring (3)
const kelompok = ['Adyatma', 'Nafisah', 'Qonita', 'Doddy', 'Bejo'];
const [ketua, wakil, ...anggota] = kelompok;
// console.log(ketua);
// console.log(wakil);
// console.log(anggota);

// object destructuring (4)
const team = {
    pm: 'Adyatma',
    frontEnd1: 'Doddy',
    frontEnd2: 'Fajar',
    backEnd1: 'Qonita',
    backEnd2: 'Nafisah',
    ux: 'Hendra',
    devops: 'Ferry'
};

const { pm, ...myTeam } = team;
// console.log(pm);
// console.log(myTeam);

// filtering (5)
function filterBy(type, ...args) {
    return args.filter(v => typeof v === type);
}

// string
console.log(filterBy('string', 1, 2, 'Adyatma', false, 10, true, 'Doddy'));

// number
console.log(filterBy('number', 1, 2, 'Adyatma', false, 10, true, 'Doddy'));

// boolean
console.log(filterBy('boolean', 1, 2, 'Adyatma', false, 10, true, 'Doddy'));

