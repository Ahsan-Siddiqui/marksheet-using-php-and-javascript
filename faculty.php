\<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- <script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script> -->
<script type="text/javascript">
    $(document).ready(function(e){
      
      var markup = "<tr id='marksheet_row'><td class='data'><input type='text' maxlength='30'/></td><td class='data'><input type='number' onchange='fixmarks(this)' name='num1' id='num1' maxlength='3' placeholder='100'/></td><td class='data'><input type='number' onchange='handleChange(this)' name='num2' id='num2' maxlength='3' placeholder='out of 100'/></td><td class='readonly'><input type='text' name='subt1' readonly /></td><td class='data'></td></tr>";  
      var remove = "<tr id='remove_row'><td class='delete'><input type='button' class='remove' value='Remove' id='rem'></td></tr>";
            var maxrow = 3;
            var x = 1;
        $(".add-row").click(function(e){
          if(x<=maxrow)
          { 
           $("form table").append(markup,remove);
           x++;

          
          
          //  $(remove).on("click","#remove .data",function(e){
          //    e.parentDefault();
          //    $(this).parent('#remove').remove();
          //  });

           $(".delete").click(function(){
            //  $(this).find('#marksheet_row').remove(); 
            //  $(this).after('#marksheet_row').find('#remove_row').remove();
                    $("#marksheet_row").remove();
        $("#remove_row .readonly").remove();
       $("#rem").remove();      
    });
    }
  });
});    
    $(function() {
    $("#num1, #num2,#num3,#num4,#num5,#num6,#num7,#num8,#num9,#num10,#result").on("keydown keyup", sum);
 function sum() {
    
//  $("#sum").val(Number($("#num1").val()) + Number($("#num2").val()));
 $("#subt1").val(Number($("#num1").val()) - Number($("#num2").val()));
// if($("#subt1").val(Number($("#num2").val()))>60, $("#subt1").val("YES"), $("#subt1").val("A"));
$("#subt2").val(Number($("#num3").val()) - Number($("#num4").val()));
$("#subt3").val(Number($("#num5").val()) - Number($("#num6").val()));
 $("#subt4").val(Number($("#num7").val()) - Number($("#num8").val()));
 $("#subt5").val(Number($("#num9").val()) - Number($("#num10").val()));
 $("#total").val(Number($("#num2").val()));
//  $("#total").val(Number($("#num2").val()) + Number($("#num4").val()) + Number($("#num6").val()) + Number($("#num8").val()) + Number($("#num10").val()));
 }
});

function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }

  function fixmarks(input) {
    if (input.value < 100) input.value = 100;
    if (input.value > 100) input.value = 100;
  }

</script>
    <title>Faculty</title>
    
</head>

<body>
<div class="wraper">
        <!-- <a href="extra_practice/output.php">Check Teacher Entries</a> -->
        <div class="heading">Create Marksheet</div>
        <div class="mlogo"><img src="img/marksheet/logo.jpg" alt="marksheet logo"></div>
  <!-- <form action="login.php" method="post"> -->
  <form>
  <table  width="100%" cellpadding="10px" border="1px solid" align="center" background-color="red" height="auto">
      <tr height="40px" class="boderHeading">
        <td class="hardcode" colspan="5">Semester-5</td>
      </tr>
      <tr height="40px">
        <td class="hardcode" colspan="5">Year-2018</td>
      </tr>
      <tr height="40px">
        <td class="hardcode" colspan="5">Evening</td>
      </tr>
      <tr class="boderHeading"> 
        <th><font class="font">Student name:</font></th>
        <th><font class="font">S/o, D/o:</font></th>
        <th><font class="font">Seat no:</font></th>
        <th><font class="font">Enrollment no:</font></th>
        <th><font class="font">Department:</font></th>
        
      </tr>
      <tr width="100%">
          <td class="data"><input type="text" maxlength="30"/></td>          
          <td class="data"><input type="text" maxlength="30"/></font></td>          
          <td class="data"><input type="text" maxlength="15"/></td>          
          <td class="data"><input type="text" maxlength="15"/></td>          
          <td class="data"><input type="text" maxlength="30"/></td>          
      </tr>
      <tr>
      <td height="6px"class="gap"></td>
      <td class="gap"></td>
      <td class="gap"></td>
      <td class="gap"></td>
      <td class="gap"></td>
      </tr>
      <tr>
        <th><font class="font">Subject</font></th>
        <th><font class="font">Max marks</font></th>
        <th><font class="font">Marks obtain</font></th>
        <th><font class="font">Grade</font></th>
        <th><font class="font">Pass/Fail</font></th>
      </tr>
      <tr>
      <td class="data"><input type="text" maxlength="30"/></td>          
      <td class="data"><input type="number" onchange="fixmarks(this)" name="num1" id="num1" maxlength="3" placeholder="100"/></td>  
      <td class="data"><input type="number" onchange="handleChange(this)" name="num2" id="num2" maxlength="3" placeholder="out of 100"/></td>          
      <td class="readonly"><input type="text" name="subt1" id="subt1" readonly /></td>                  
      <td class="data"></td>

    </tr>
    <!-- <td class="delete"><input type="button" class="remove" value="Remove" id="remove"></td> -->
   </table>
   <!-- <input type="button" class="remove-row addmore" value="Remove" id="remove">  -->
    </form>
   <input type="button" class="add-row addmore" value="Add" id="add">   
   
   
      <!-- <tr>
      <td class="data"><input type="text" maxlength="30"/></td>          
      <td class="data"><input type="number" onchange="fixmarks(this)" name="num3" id="num3" maxlength="3" placeholder="100"/></td>  
      <td class="data"><input type="text" onchange="handleChange(this)" name="num4" id="num4" maxlength="3" placeholder="out of 100"/></td>          
      <td class="readonly"><input type="text" name="subt2" id="subt2" readonly /></td>   
      <td class="data"></td>        
      </tr>
      <tr>
      <td class="data"><input type="text" maxlength="30"/></td>          
      <td class="data"><input type="number" onchange="fixmarks(this)" name="num5" id="num5" maxlength="3" placeholder="100"/></td>  
      <td class="data"><input type="number" onchange="handleChange(this)" name="num6" id="num6" maxlength="3" placeholder="out of 100"/></td>          
      <td class="readonly"><input type="text" name="subt3" id="subt3" readonly /></td>     
      <td class="data"></td>            
      </tr>
      <tr>
      <td class="data"><input type="text" maxlength="30"/></td>          
      <td class="data"><input type="number" onchange="fixmarks(this)" name="num7" id="num7" maxlength="3" placeholder="100"/></td>  
      <td class="data"><input type="number" onchange="handleChange(this)" name="num8" id="num8" maxlength="3" placeholder="out of 100"/></td>          
      <td class="readonly"><input type="text" name="subt4" id="subt4" readonly /></td>  
      <td class="data"></td>             
      </tr>
      <tr>
      <td class="data"><input type="text" maxlength="30"/></td>          
      <td class="data"><input type="number" onchange="fixmarks(this)" name="num9" id="num9" maxlength="3" placeholder="100"/></td>  
      <td class="data"><input type="number" onchange="handleChange(this)" name="num10" id="num10" maxlength="3" placeholder="out of 100"/></td>          
      <td class="readonly"><input type="text" name="subt5" id="subt5" readonly /></td>  
      <td class="data"></td>           
      </tr> -->
      <table width="100%" cellpadding="10px" border="1px solid" align="center" background-color="red" height="auto">
      <tr>
      <th class="result" colspan="5">Result</th>
      </tr>
      <tr>
      
      
      <td class="result">Obtain Numbers</td>
      <td class="obtainbox"><input type="text" name="total" id="total" readonly /></td>  
      <td class="result">Percentage</td>
      <td class="font"></td>
      <td class="result"></td>
      </tr>
  </table>
  <button class="click" title="Submit"><a href="#">Submit</a></button>
  

  <!-- <button class="addmore" title="Submit"><a href="#">Add more</a></button> -->
  
  <!-- </form> -->
  
</body>
</html>
<!-- <button class="submit"><a title="print screen" alt="print_screen" onclick="window.print();" target="_blank" style="cursor:pointer;">Print</a></button> -->
<!-- <tr height="40px">
<td class="data">Student name<span><input type="text"></span>
</td>
<tr height="40px">
<td class="data">Student name<input type="text">
</td>
</tr> -->

    <!-- <tr height="40px">
   
    </tr> -->
  
  <!-- <td class="rnum">Roll number</td>
  <td class="maxnum">Student name</td>
  <td class="minnum">Student name</td>
  <td class="pf">Student name</td>
  <td class="total">Student name</td> -->
 
  <!-- <tr height="40px">
  <td class="sname">Student name</td>
  <td class="rnum">Roll number</td>
  <td class="maxnum">Student name</td>
  <td class="minnum">Student name</td>
  <td class="pf">Student name</td>
  <td class="total">Student name</td>
  </tr> -->
  <!-- <div class="rnum">A
  <div class="maxnum">B
  <div class="minnum">C
  <div class="pf">D
  <div class="total">E
  </div>
  </div>
  </div>
  </div>
  </div>
  </div> -->
  
    <!-- <label for="sname">Student Name</label>
    <input type="text" name="sname" placeholder="Student name" maxlenght="20" required>
    </br>
    <label for="rollnum">Roll no</label>
    <input type="text" name="rollnum" placeholder="Roll no" maxlenght="20" >
    </br>
    <label for="age">Age</label>
    <input type="text" name="age" placeholder="Age" maxlenght="2" >

    </br>
    
    <p>Max marks</p> <p>Passing marks</p>
    <table>
    <tr>
    <p>Subject</p> 
    <td>
    a</td>
    </tr>
    </table>
    <label class="container">Web Programming
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Design & Analysis of Algorithm
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Computer Communication_Networks
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Theory of Automata
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
<label class="container">Object Oriented Sofware Engineering
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
    </br>
    
    
    
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="password" maxlenght="20" > 
    </br>
    <label for="password">Conform Password</label>
    <input type="password" name="cpassword" placeholder="Conform password" maxlenght="20" >  -->
    <!-- <input type="submit" name="submit" value="submit">     -->
    <!-- </br> -->
    <!-- <button class="submit" title="submit">Submit</button> -->





    <!-- <button class="submit"><a title="print screen" alt="print_screen" onclick="window.print();" target="_blank" style="cursor:pointer;">Print</a></button> -->
<!--     
    </div>
    
    </div> -->
    <!--<div class="record">
    </div>-->
    
