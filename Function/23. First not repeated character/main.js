function find_FristNotRepeatChar(str) {
    var arr = str.split(''),
        result = '',
        count = 0;

    console.log(arr);

    for (var i = 0; i < arr.length; i++) {
        count = 0;
        console.log(`arr[i] = ${arr[i]}`);
        for (var j = 0; j < arr.length; j++) {
            console.log(`arr[j] = ${arr[j]}`);
            if (arr[i] === arr[j]) {
                count++;
            }
        }
        console.log(`count = ${count}`);
        if (count === 1) {
            result = arr[i];
            break;
        }
    }
    return result;
}
console.log(find_FristNotRepeatChar('abacddbec'));