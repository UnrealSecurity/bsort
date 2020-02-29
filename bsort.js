function bsort(array, comparer) {
    var flag = true;
    while (flag) {
        flag = false;
        for (let i=0; i<array.length-1; i++) {
            var temp = array[i+1];
            if (comparer(array[i], temp) === true) {
                flag = true;
                array[i+1] = array[i];
                array[i] = temp;
            }
        }
    }
    return array;
}
