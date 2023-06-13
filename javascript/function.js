function jmlVolumKubus(a, b) {
    var volumeA,
        volumeB;

    volumeA = a * a * a;
    volumeB = b * b * b;

    total = volumeA + volumeB;

    return total;
}

console.log(jmlVolumKubus(3, 8));