function getPercentage(){
        var mytotal = getRadio();
        var mypercentage = (mytotal / 20) * 100;

        document.getElementById("mytotal").value = mytotal;
        document.getElementById("mypercentage").value = mypercentage;

        

      }



      function getRadio(){
        
        var grade = 0;

        var result1 = document.getElementsByName("rad1");
        for (var i = 0; i < result1.length; i++){
          if (result1[i].checked) {
            var selected = result1[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }
       

        var result2 = document.getElementsByName("rad2");
        for (var i = 0; i < result2.length; i++){
          if (result2[i].checked) {
            var selected = result2[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }


        var result3 = document.getElementsByName("rad3");
        for (var i = 0; i < result3.length; i++){
          if (result3[i].checked) {
            var selected = result3[i].value;
            if (selected == 'c') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result4 = document.getElementsByName("rad4");
        for (var i = 0; i < result4.length; i++){
          if (result4[i].checked) {
            var selected = result4[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result5 = document.getElementsByName("rad5");
        for (var i = 0; i < result5.length; i++){
          if (result5[i].checked) {
            var selected = result5[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result6 = document.getElementsByName("rad6");
        for (var i = 0; i < result6.length; i++){
          if (result6[i].checked) {
            var selected = result6[i].value;
            if (selected == 'c') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result7 = document.getElementsByName("rad7");
        for (var i = 0; i < result7.length; i++){
          if (result7[i].checked) {
            var selected = result7[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result8 = document.getElementsByName("rad8");
        for (var i = 0; i < result8.length; i++){
          if (result8[i].checked) {
            var selected = result8[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result9 = document.getElementsByName("rad9");
        for (var i = 0; i < result9.length; i++){
          if (result9[i].checked) {
            var selected = result9[i].value;
            if (selected == 'c') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result10 = document.getElementsByName("rad10");
        for (var i = 0; i < result10.length; i++){
          if (result10[i].checked) {
            var selected = result10[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result11 = document.getElementsByName("rad11");
        for (var i = 0; i < result11.length; i++){
          if (result11[i].checked) {
            var selected = result11[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result12 = document.getElementsByName("rad12");
        for (var i = 0; i < result12.length; i++){
          if (result12[i].checked) {
            var selected = result12[i].value;
            if (selected == 'c') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result13 = document.getElementsByName("rad13");
        for (var i = 0; i < result13.length; i++){
          if (result13[i].checked) {
            var selected = result13[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result14 = document.getElementsByName("rad14");
        for (var i = 0; i < result14.length; i++){
          if (result14[i].checked) {
            var selected = result14[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result15 = document.getElementsByName("rad15");
        for (var i = 0; i < result15.length; i++){
          if (result15[i].checked) {
            var selected = result15[i].value;
            if (selected == 'c') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result16 = document.getElementsByName("rad16");
        for (var i = 0; i < result16.length; i++){
          if (result16[i].checked) {
            var selected = result16[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result17 = document.getElementsByName("rad17");
        for (var i = 0; i < result17.length; i++){
          if (result17[i].checked) {
            var selected = result17[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result18 = document.getElementsByName("rad18");
        for (var i = 0; i < result18.length; i++){
          if (result18[i].checked) {
            var selected = result18[i].value;
            if (selected == 'c') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result19 = document.getElementsByName("rad19");
        for (var i = 0; i < result19.length; i++){
          if (result19[i].checked) {
            var selected = result19[i].value;
            if (selected == 'a') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

        var result20 = document.getElementsByName("rad20");
        for (var i = 0; i < result20.length; i++){
          if (result20[i].checked) {
            var selected = result20[i].value;
            if (selected == 'b') {
              grade += 1; 
            }else {
              grade += 0;
            }
          }
        }

          return grade;
         

      }

      function alertMessage() {
        alert('Form Submitted Successfully');
      }
