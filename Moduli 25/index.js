var programmingLanguages =["Javascript","Php","Python"]

console.log(programmingLanguages)
console.log(programmingLanguages[0])
 

//Array method--(e shton nje element ne fund te array)
programmingLanguages.push("Java")
console.log(programmingLanguages)

///Array method--(e largon elementin e fundit ne array)
programmingLanguages.pop()
console.log(programmingLanguages)

//Array method-- unshift(e shton nje element ne filllim te array)
programmingLanguages.unshift("C#")
console.log(programmingLanguages)

/////array method--shift(e largon nje element ne fillim te nje array)
programmingLanguages.shift()
console.log(programmingLanguages)

programmingLanguages.splice(0,2, "Rubby")
console.log(programmingLanguages)

console.log(Math.random()*5)
console.log(Math.floor(Math.random())*6)

var students = ["John","Mike"]
var [s1,s2] = students;

console.log(s1)
console.log(s2)

var places =("London","Paris","New York","Berlin")
var [first,second] = places

console.log(first)
console.log(second)

var numbers =[1,2,3,4,5,6,7,8,9,10]
var[firstNum,SecondNum,...otherNums]=numbers

console.log(firstNum)
console.log(SecondNum)
console.log(otherNums)