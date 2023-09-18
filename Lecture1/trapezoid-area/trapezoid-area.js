/* 
The Law: A = ( (a+b)*h )/2
1. Read the first base (a) value
2. Read the second base (b) value
3. Read the height (h) value
4. Add first base to second base
5. Multiply the result of summation by the height
6. Divide the result of multiplication by 2
7. Display the result
*/

function area(a, b, h) {
    s = a + b;
    return (s * h) / 2;
}

console.log(area(10, 15, 17)); // 212.5
console.log(area(12, 9, 13)); // 136.5