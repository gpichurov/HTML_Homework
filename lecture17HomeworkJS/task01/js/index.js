 //Задача 1:
 //Напишете JavaScript програма, която по даден array да показва най-
 //често срещания символ.
 //var arr1=[3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];
 //Резултат: a ( 5 times )

var arr1=[3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];

 function mostCommonChar(array) {
     var char = array[0];
     var max = 1;
     var curMax = 1;

     for	(var i = 0; i < array.length; i++) {
         for (var j = i + 1; j < array.length; j++){
             if(array[i] === array[j]) {
                 curMax++;
             }
         }
         if(max < curMax){
             max = curMax;
             char = array[i];
         }
         curMax = 1;
     }

     return char + " ( " + max + " times )"
 }
alert(mostCommonChar(arr1));

