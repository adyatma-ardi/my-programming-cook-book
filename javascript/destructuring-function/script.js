// destructuring function return value (arr)(1)
// harus runut
function calc(a, b) {
    return [a + b, a - b, a * b, a / b];
}

const [tambah, kurang, kali, bagi] = calc(5, 2);

// console.log(tambah);
// console.log(kurang);
// console.log(kali);
// console.log(bagi);

// destructuring function return value (obj)(2)
// boleh tidak runut (sesuai dengan key value)
function calc2(a, b) {
    return {
        tambah2: a + b,
        kurang2: a - b,
        kali2: a * b,
        bagi2: a / b
    }
}

const { tambah2, kali2, bagi2, kurang2 } = calc2(10, 3);
console.log(tambah2);
console.log(kurang2);
console.log(kali2);
console.log(bagi2);

// destructuring function arguments (3)
person = {
    nama: 'Adyatma Ardi',
    umur: 26,
    role: 'Software Engineer',
    nilai: {
        s1: 80,
        s2: 85,
        s3: 75
    }
}

function cetakPerson({ nama, umur, role, nilai: { s1, s2, s3 } }) {
    return `Halo, nama saya ${nama}, saya berumur ${umur}, saya bekerja sebagai ${role} dan nilai semester 1 saya adalah ${s1}`;
}

console.log(cetakPerson(person));