var noAngkot = 1,
    jmlAngkot = 10,
    angkotBeroperasi = 6;

// angkot
// 1 - 6 beroperasi dengan baik (for)
// 7 - 10 sedang tidak beroperasi (for)
// 8 sedang lembur
// gunakan if else

for (noAngkot; noAngkot <= jmlAngkot; noAngkot++) {

    if (noAngkot <= 6) {
        console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik');
    } else if (noAngkot === 8 || noAngkot === 10) {
        console.log('Angkot No. ' + noAngkot + ' sedang lembur');
    } else {
        console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi');
    }

}