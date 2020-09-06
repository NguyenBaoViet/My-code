function bubble_sort(arr) {
    var swapp,
        n = arr.length;

    do {
        swapp = false;
        for (var i = 0; i < n; i++) {
            if (arr[i] < arr[i + 1]) {
                var temp = arr[i];
                arr[i] = arr[i + 1];
                arr[i + 1] = temp;
                swapp = true;
            }
        }
        n--;
    } while (swapp);
    return arr;
}
console.log(bubble_sort([12, 345, 4, 546, 122, 84, 98, 64, 9, 1, 3223, 455, 23, 234, 213]));