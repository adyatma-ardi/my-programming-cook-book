// pre - refactoring

function jmlVolumKubus1(a, b) {
    var volumeA,
        volumeB;

    volumeA = a * a * a;
    volumeB = b * b * b;

    total = volumeA + volumeB;

    return total;
}

console.log(jmlVolumKubus1(3, 8));

// pasca - refactoring

function jmlVolumKubus2(a, b) {
    return a * a * a + b * b * b;
}

console.log(jmlVolumKubus2(3, 8));


