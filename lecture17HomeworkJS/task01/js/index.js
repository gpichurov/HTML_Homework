var arr1=[3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];

 function mostCommonChar(array) {
     var char = array[0];
     var max = 1;
     var curMax = 1;
     var i = 0;
     var j = 1;

     for	(i = 0; i < array.length; i++) {
         for (j = i + 1; j < array.length; j++){
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

