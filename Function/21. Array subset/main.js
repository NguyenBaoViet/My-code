function array_subset(arr, arr_size) {
    var result_set = [],
        result;

    for (var x = 0; x < Math.pow(2, arr.length); x++) {
        result = [];
        for (i = arr.length - 1; i >= 0; i--) {
            if ((x & (1 << i)) !== 0) {
                result.push(arr[i]);
            }
        }
        if (result.length === arr_size) {
            result_set.push(result);
        }
    }
    return result_set;
}
console.log(array_subset([1, 2, 3], 2));