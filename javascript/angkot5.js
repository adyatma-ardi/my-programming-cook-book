var noAngkot = 1,
    jmlAngkot = 10,
    angkotBeroperasi = 6;

// angkot
// 1, 2, 3, 4, 6 beroperasi dengan baik (for)
// 7, 9 sedang tidak beroperasi (for)
// 5, 8, 10 sedang lembur
// gunakan else if

for (noAngkot; noAngkot <= jmlAngkot; noAngkot++) {

    if (noAngkot <= 6 && noAngkot !== 5) {
        console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik');
    } else if (noAngkot === 8 || noAngkot === 10 || noAngkot === 5) {
        console.log('Angkot No. ' + noAngkot + ' sedang lembur');
    } else {
        console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi');
    }

}