var s = '';

for (var i = 0; i < 5; i++) {

    for (var j = 0; j <= i; j++) {
        // membentuk banyak bintang perbaris
        s += '*';
    }
    // membentuk 5 baris
    s += '\n';
}

console.log(s);