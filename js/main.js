let x = getCorrectInput('Введите x:');
let n = getCorrectInput('Введите n:');
let res = pow(x, n);

console.log(res);

function pow(x, n) {
    if (n == 0) return 1;
    let res = x;

    for (let i = 1; i < Math.abs(n); i++) {
        res = res * x;
    }
    return (n < 0) ? (1 / res) : res;
}

function getCorrectInput(message) {
    let str = prompt(message);
    // let res = parseInt(str);
    let res = parseFloat(str);
    
    while (isNaN(res)) {
        str = prompt(message);
        // res = parseInt(str);
        res = parseFloat(str);
    }
    return res;
}