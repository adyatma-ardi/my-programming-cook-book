console.log('ok');
function faktorial(n) {
    // if (n === 0) {
    //     return 1;
    // }

    if (n === 0) return 1;

    return n * faktorial(n - 1);
}

console.log(faktorial(5));