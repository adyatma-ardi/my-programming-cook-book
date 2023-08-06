// multi-line string
const multiLineString =
    `Ini adalah contoh penggunaan
multi-line string`;
// console.log(multiLineString);

// Embedded expression
const nama = "Achmad";
const age = 26;
// console.log(`Halo nama saya ${nama} dan saya berumur ${age} tahun.`);

//  Expression interpolation
let a = 10;
let b = 15;
// console.log(`Jika a = ${a} dan b = ${b}, maka hasil penjumlahannya adalah : ${a + b}`);

// HTML fragments
const mhs = {
    nama: 'Achmad Adyatma Ardi',
    umur: 33,
    nrp: '072001710001',
    email: 'adyatmaardi@gmail.com'
};

let el =
    `<div class="mhs">
    <h2>${mhs.nama}</h2>
    <span class="nrp">${mhs.nrp}</span>
</div>
`;
// console.log(el);

const mhsLoop = [
    {
        nama: 'Achmad Adyatma Ardi',
        email: 'adyatmaardi@gmail.com'
    },
    {
        nama: 'Qonita Wulandari',
        email: 'wulan@gmail.com'
    },
    {
        nama: 'Nafisah Khumaira',
        email: 'nafisah@gmail.com'
    },
    {
        nama: 'Laiba Nur',
        email: 'laiba@gmail.com'
    },
    {
        nama: 'Maryam',
        email: 'maryam@gmail.com'
    }
];

const elem = `<div class="mhs">
        ${mhsLoop.map(m => `<ul>
            <li>${m.nama}</li>
            <li>${m.email}</li>
        </ul>`).join('')}
    </div>`;

// document.body.innerHTML = elem;

// pengkondisian
const lagu = [
    {
        judul: 'Kau Adalah',
        penyanyi: 'Isyana Sarasvati',
        feat: 'Rayi Putra'
    },
    {
        judul: 'Tetap Dalam Jiwa',
        penyanyi: 'Isyana Sarasvati'
    }
];

const elLagu = `<div class="lagu">
        ${lagu.map(l => `<ul>
        <li>${l.judul}</li>
        <li>${l.penyanyi} ${l.feat ? `(feat. ${l.feat})` : ''}</li>
    </ul>`).join('')}
</div>`;

// document.body.innerHTML = elLagu;

const siswa = {
    nama: 'Achmad Adyatma Ardi',
    semester: 7,
    mataKuliah: [
        'Rekayasa Web',
        'Algoritma Pemrograman',
        'Perencanaan Sistem Berorientasi Object',
        'Closure'
    ]
};

const cetakMataKuliah = function (mataKuliah) {
    return `
    <ol>
        ${mataKuliah.map(mk => `<li>${mk}</li>`).join('')}
    </ol>
    `;
};

// function cetakMataKuliah(mataKuliah) {
//     return `
//     <ol>
//         ${mataKuliah.map(mk => `<li>${mk}</li>`).join('')}
//     </ol>
//     `;
// }

const elSiswa =
    `<div class="mhs">
        <h2>${siswa.nama}</h2>
        <span class="semester">Semester : ${siswa.semester}</span>
        <h4>Mata Kuliah :</h4>
        ${cetakMataKuliah(siswa.mataKuliah)}
    </div>`;

// document.body.innerHTML = elSiswa;

// Tagged tempalate literals
// (1) Pendahuluan
const namaTagged = 'Achmad Adyatma Ardi';
const umur = 26;

function coba(stringses, ...args) {
    // dengan looping forEach
    let result = '';
    stringses.forEach((str, i) => {
        result += `${str}${args[i] || ''}`;
    });
    // return result;

    // menggunakan higher order function 
    // return strings.reduce((result, str, i) => `${result}${str}${args[i] || ''}`)

    // return strings;
    // return args;
}

const str = coba`Halo, nama saya ${namaTagged}, saya berumur ${umur} tahun.`;
// console.log(str);
// console.log(coba.strings);
// console.log(args);

function coba2(stringses, ...args) {
    // return stringses;
    return args;
}
const str2 = coba2`Halo, nama saya ${namaTagged}, saya berumur ${umur} tahun.`;
console.log(str2);
