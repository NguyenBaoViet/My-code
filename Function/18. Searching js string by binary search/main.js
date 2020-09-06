function search_binary(array, delement) {
    array.sort((x,y) => {return x-y;});

    var high = array.length,
        mid = Math.floor(high / 2);

    console.log(`Array = ${array}`);
    console.log(`Delement = ${delement}`);
    console.log(`Array.length = ${array.length}`);

    if (array[mid] === delement) {
        return mid;
    } else if (high === 1) {
        return null;
    } else if (array[mid] < delement) {
        var arr = array.slice(mid + 1);
        var res = search_binary(arr, delement);
        if (res === null) {
            return null;
        } else {
            return mid + 1 + res;
        }
    } else {
        var arr1 = array.slice(0, mid);
        return search_binary(arr1, delement);
    }

}

console.log(search_binary([5, 7, 1, 6, 17, 15, 14, 12, 11, 49], 17));