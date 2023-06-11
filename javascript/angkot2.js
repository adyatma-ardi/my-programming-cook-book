var noAngkot = 1,
    jmlAngkot = 10,
    angkotBeroperasi = 6;

// angkot
// 1 - 6 beroperasi dengan baik (while)
// 7 - 10 sedang tidak beroperasi (for)

while (noAngkot <= angkotBeroperasi) {
    console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik');

    noAngkot++;
}

for (noAngkot = angkotBeroperasi + 1; noAngkot <= jmlAngkot; noAngkot++) {
    console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi');
}