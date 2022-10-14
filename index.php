<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Outgoing</title>
  <link rel="icon" href="dist/img/clock.png" type="image/x-icon" />
</head>

 <p id='realtime' style="display: none;"></p>
 <?php
 include 'process/conn.php'; 
 echo '<input type="hidden" name="" id="day" value="'.$day.'">';
 ?>

<body id="body" style="background: #FFFFFF;">



<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   
        setInterval(realtime, 1000);
       
    });
    const realtime =()=>{
        var real = "real";
        $.ajax({
            type: "GET",
            url: "process/conn.php",
            cache:false,
            data: {real:real},
            success: (response)=>{
                $('#realtime').html(response);
                check();
            }
        });
    }

  const check =()=>{
    var check = document.querySelector('#realtime').innerHTML;
    var day = document.getElementById('day').value;
    var fcolor1 = "background: #FF4AFF;"; //pink
    var fcolor2 = "background: linear-gradient(to right, black 50%, #7807DC 0%);"; // black violet
    var fcolor3 = "background: #0417F5;"; // blue
    var fcolor4 = "background: #FFFFFF;"; // white
    var fcolor5 = "background: linear-gradient(to right, #FD6310 50%, #168714 0%);"; // orange green
    var fcolor6 = "background: #959595;"; // gray


    if (day == 'Friday') {
      // 1st sequence
      //ns
      if (check > '05:00:00' && check < '05:03:59') {
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '06:00:00' && check < '06:03:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      else if(check > '07:00:00' && check < '07:03:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      else if(check > '08:00:00' && check < '08:03:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      //ds
      else if (check > '17:00:00' && check < '17:03:59') {
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '18:00:00' && check < '18:03:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      else if(check > '19:00:00' && check < '19:03:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      else if(check > '20:00:00' && check < '20:03:59'){
        var out = $('#body').attr('style',fcolor1);
      }

      //2nd sequence
      //ns
      else if(check > '05:04:00' && check < '05:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '06:04:00' && check < '06:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '07:04:00' && check < '07:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '08:04:00' && check < '08:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }
      //ds
      else if(check > '17:04:00' && check < '17:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '18:04:00' && check < '18:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '19:04:00' && check < '19:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '20:04:00' && check < '20:05:59'){
        var out = $('#body').attr('style',fcolor2);
      }

      //3rd sequence
      //ns
      else if(check > '05:06:00' && check < '05:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '06:06:00' && check < '06:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '07:06:00' && check < '07:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '08:06:00' && check < '08:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }
      //ds
      else if(check > '17:06:00' && check < '17:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '18:06:00' && check < '18:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '19:06:00' && check < '19:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '20:06:00' && check < '20:07:59'){
        var out = $('#body').attr('style',fcolor3);
      }

      //4th sequence
      //ns
      else if(check > '05:08:00' && check < '05:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '06:08:00' && check < '06:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '07:08:00' && check < '07:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '08:08:00' && check < '08:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }
      //ds
      else if(check > '17:08:00' && check < '17:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '18:08:00' && check < '18:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '19:08:00' && check < '19:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '20:08:00' && check < '20:09:59'){
        var out = $('#body').attr('style',fcolor4);
      }

      //5th sequence
      //ns
      else if(check > '05:10:00' && check < '05:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '06:10:00' && check < '06:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '07:10:00' && check < '07:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '08:10:00' && check < '08:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      //ds
      else if(check > '17:10:00' && check < '17:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '18:10:00' && check < '18:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '19:10:00' && check < '19:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '20:10:00' && check < '20:11:59'){
        var out = $('#body').attr('style',fcolor5);
      }

      //6th sequence
      //ns
      else if(check > '05:12:00' && check < '05:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '06:12:00' && check < '06:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '07:12:00' && check < '07:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '08:12:00' && check < '08:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }
      //ds
      else if(check > '17:12:00' && check < '17:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '18:12:00' && check < '18:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '19:12:00' && check < '19:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '20:12:00' && check < '20:13:59'){
        var out = $('#body').attr('style',fcolor6);
      }      
  }
  else if(day == 'Saturday'){
      //1st sequence
      //ns
      if(check > '05:00:00' && check < '05:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '06:00:00' && check < '06:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '07:00:00' && check < '07:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '08:00:00' && check < '08:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }
      //ds
      else if(check > '17:00:00' && check < '17:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '18:00:00' && check < '18:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '19:00:00' && check < '19:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '20:00:00' && check < '20:03:59'){
        var out = $('#body').attr('style',fcolor2);
      }

      //2nd sequence
      //ns
      else if(check > '05:04:00' && check < '05:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '06:04:00' && check < '06:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '07:04:00' && check < '07:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '08:04:00' && check < '08:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }
      //ds
      else if(check > '17:04:00' && check < '17:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '18:04:00' && check < '18:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '19:04:00' && check < '19:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '20:04:00' && check < '20:05:59'){
        var out = $('#body').attr('style',fcolor3);
      }

      //3rd sequence
      //ns
      else if(check > '05:06:00' && check < '05:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '06:06:00' && check < '06:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '07:06:00' && check < '07:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '08:06:00' && check < '08:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }
      //ds
      else if(check > '17:06:00' && check < '17:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '18:06:00' && check < '18:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '19:06:00' && check < '19:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '20:06:00' && check < '20:07:59'){
        var out = $('#body').attr('style',fcolor4);
      }

      //4th sequence
      //ns
      else if(check > '05:08:00' && check < '05:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '06:08:00' && check < '06:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '07:08:00' && check < '07:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '08:08:00' && check < '08:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      //ds
      else if(check > '17:08:00' && check < '17:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '18:08:00' && check < '18:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '19:08:00' && check < '19:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '20:08:00' && check < '20:09:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      
      //5th sequence
      //ns
      else if(check > '05:10:00' && check < '05:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '06:10:00' && check < '06:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '07:10:00' && check < '07:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '08:10:00' && check < '08:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }
      //ds
      else if(check > '17:10:00' && check < '17:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '18:10:00' && check < '18:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '19:10:00' && check < '19:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '20:10:00' && check < '20:11:59'){
        var out = $('#body').attr('style',fcolor6);
      }

      //6th sequence
      //ns
      else if(check > '05:12:00' && check < '05:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '06:12:00' && check < '06:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '07:12:00' && check < '07:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '08:12:00' && check < '08:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      //ds
      else if(check > '17:12:00' && check < '17:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '18:12:00' && check < '18:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '19:12:00' && check < '19:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '20:12:00' && check < '20:13:59'){
        var out = $('#body').attr('style',fcolor1);
      }
  }
  else if(day == 'Monday'){
      //1st sequence
      //ns
      if(check > '05:00:00' && check < '05:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '06:00:00' && check < '06:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '07:00:00' && check < '07:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '08:00:00' && check < '08:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }
      //ds
      else if(check > '17:00:00' && check < '17:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '18:00:00' && check < '18:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '19:00:00' && check < '19:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '20:00:00' && check < '20:03:59'){
        var out = $('#body').attr('style',fcolor3);
      }

      //2nd sequence
      //ns
      else if(check > '05:04:00' && check < '05:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '06:04:00' && check < '06:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '07:04:00' && check < '07:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '08:04:00' && check < '08:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }
      //ds
      else if(check > '17:04:00' && check < '17:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '18:04:00' && check < '18:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '19:04:00' && check < '19:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '20:04:00' && check < '20:05:59'){
        var out = $('#body').attr('style',fcolor4);
      }

      //3rd sequence
      //ns
      else if(check > '05:06:00' && check < '05:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '06:06:00' && check < '06:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '07:06:00' && check < '07:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '08:06:00' && check < '08:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      //ds
      else if(check > '17:06:00' && check < '17:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '18:06:00' && check < '18:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '19:06:00' && check < '19:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '20:06:00' && check < '20:07:59'){
        var out = $('#body').attr('style',fcolor5);
      }

      //4th sequence
      //ns
      else if(check > '05:08:00' && check < '05:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '06:08:00' && check < '06:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '07:08:00' && check < '07:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '08:08:00' && check < '08:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }
      //ds
      else if(check > '17:08:00' && check < '17:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '18:08:00' && check < '18:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '19:08:00' && check < '19:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '20:08:00' && check < '20:09:59'){
        var out = $('#body').attr('style',fcolor6);
      }

      //5th sequence
      //ns
      else if(check > '05:10:00' && check < '05:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '06:10:00' && check < '06:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '07:10:00' && check < '07:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '08:10:00' && check < '08:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      //ds
      else if(check > '17:10:00' && check < '17:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '18:10:00' && check < '18:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '19:10:00' && check < '19:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '20:10:00' && check < '20:11:59'){
        var out = $('#body').attr('style',fcolor1);
      }

      //6th sequence
      //ns
      else if(check > '05:12:00' && check < '05:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '06:12:00' && check < '06:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '07:12:00' && check < '07:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '08:12:00' && check < '08:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }
      //ds
      else if(check > '17:12:00' && check < '17:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '18:12:00' && check < '18:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '19:12:00' && check < '19:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '20:12:00' && check < '20:13:59'){
        var out = $('#body').attr('style',fcolor2);
      }
  }
  else if(day == 'Tuesday'){
      //1st sequence
      //ns
      if(check > '05:00:00' && check < '05:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '06:00:00' && check < '06:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '07:00:00' && check < '07:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '08:00:00' && check < '08:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }
      //ds
      else if(check > '17:00:00' && check < '17:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '18:00:00' && check < '18:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '19:00:00' && check < '19:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '20:00:00' && check < '20:03:59'){
        var out = $('#body').attr('style',fcolor4);
      }

      //2nd sequence
      //ns
      else if(check > '05:04:00' && check < '05:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '06:04:00' && check < '06:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '07:04:00' && check < '07:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '08:04:00' && check < '08:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      //ds
      else if(check > '17:04:00' && check < '17:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '18:04:00' && check < '18:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '19:04:00' && check < '19:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '20:04:00' && check < '20:05:59'){
        var out = $('#body').attr('style',fcolor5);
      }

      //3rd sequence
      //ns
      else if(check > '05:06:00' && check < '05:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '06:06:00' && check < '06:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '07:06:00' && check < '07:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '08:06:00' && check < '08:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }
      //ds
      else if(check > '17:06:00' && check < '17:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '18:06:00' && check < '18:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '19:06:00' && check < '19:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '20:06:00' && check < '20:07:59'){
        var out = $('#body').attr('style',fcolor6);
      }

      //4th sequence
      //ns
      else if(check > '05:08:00' && check < '05:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '06:08:00' && check < '06:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '07:08:00' && check < '07:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '08:08:00' && check < '08:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      //ds
      else if(check > '17:08:00' && check < '17:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '18:08:00' && check < '18:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '19:08:00' && check < '19:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '20:08:00' && check < '20:09:59'){
        var out = $('#body').attr('style',fcolor1);
      }

      //5th sequence
      //ns
      else if(check > '05:10:00' && check < '05:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '06:10:00' && check < '06:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '07:10:00' && check < '07:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '08:10:00' && check < '08:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }
      //ds
      else if(check > '17:10:00' && check < '17:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '18:10:00' && check < '18:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '19:10:00' && check < '19:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '20:10:00' && check < '20:11:59'){
        var out = $('#body').attr('style',fcolor2);
      }

      //6th sequence
      //ns
      else if(check > '05:12:00' && check < '05:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '06:12:00' && check < '06:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '07:12:00' && check < '07:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '08:12:00' && check < '08:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }
      //ds
      else if(check > '17:12:00' && check < '17:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '18:12:00' && check < '18:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '19:12:00' && check < '19:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '20:12:00' && check < '20:13:59'){
        var out = $('#body').attr('style',fcolor3);
      }
  }
  else if(day == 'Wednesday'){
      //1st sequence
      //ns
      if(check > '05:00:00' && check < '05:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '06:00:00' && check < '06:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '07:00:00' && check < '07:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '08:00:00' && check < '08:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      //ds
      else if(check > '17:00:00' && check < '17:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '18:00:00' && check < '18:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '19:00:00' && check < '19:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '20:00:00' && check < '20:03:59'){
        var out = $('#body').attr('style',fcolor5);
      }

      //2nd sequence
      //ns
      else if(check > '05:04:00' && check < '05:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '06:04:00' && check < '06:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '07:04:00' && check < '07:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '08:04:00' && check < '08:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }
      //ds
      else if(check > '17:04:00' && check < '17:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '18:04:00' && check < '18:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '19:04:00' && check < '19:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '20:04:00' && check < '20:05:59'){
        var out = $('#body').attr('style',fcolor6);
      }

      //3rd sequence
      //ns
      else if(check > '05:06:00' && check < '05:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '06:06:00' && check < '06:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '07:06:00' && check < '07:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '08:06:00' && check < '08:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      //ds
      else if(check > '17:06:00' && check < '17:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '18:06:00' && check < '18:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '19:06:00' && check < '19:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '20:06:00' && check < '20:07:59'){
        var out = $('#body').attr('style',fcolor1);
      }

      //4th sequence
      //ns
      else if(check > '05:08:00' && check < '05:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '06:08:00' && check < '06:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '07:08:00' && check < '07:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '08:08:00' && check < '08:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }
      //ds
      else if(check > '17:08:00' && check < '17:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '18:08:00' && check < '18:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '19:08:00' && check < '19:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '20:08:00' && check < '20:09:59'){
        var out = $('#body').attr('style',fcolor2);
      }

      //5th sequence
      //ns
      else if(check > '05:10:00' && check < '05:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '06:10:00' && check < '06:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '07:10:00' && check < '07:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '08:10:00' && check < '08:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }
      //ds
      else if(check > '17:10:00' && check < '17:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '18:10:00' && check < '18:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '19:10:00' && check < '19:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '20:10:00' && check < '20:11:59'){
        var out = $('#body').attr('style',fcolor3);
      }

      //6th sequence
      //ns
      else if(check > '05:12:00' && check < '05:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '06:12:00' && check < '06:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '07:12:00' && check < '07:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '08:12:00' && check < '08:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }
      //ds
      else if(check > '17:12:00' && check < '17:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '18:12:00' && check < '18:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '19:12:00' && check < '19:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '20:12:00' && check < '20:13:59'){
        var out = $('#body').attr('style',fcolor4);
      }
  }
  else if(day == 'Thursday'){
      //1st sequence
      //ns
      if(check > '05:00:00' && check < '05:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '06:00:00' && check < '06:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '07:00:00' && check < '07:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '08:00:00' && check < '08:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }
      //ds
      else if(check > '17:00:00' && check < '17:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '18:00:00' && check < '18:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '19:00:00' && check < '19:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }else if(check > '20:00:00' && check < '20:03:59'){
        var out = $('#body').attr('style',fcolor6);
      }

      //2nd sequence
      //ns
      else if(check > '05:04:00' && check < '05:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '06:04:00' && check < '06:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '07:04:00' && check < '07:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '08:04:00' && check < '08:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }
      //ds
      else if(check > '17:04:00' && check < '17:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '18:04:00' && check < '18:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '19:04:00' && check < '19:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }else if(check > '20:04:00' && check < '20:05:59'){
        var out = $('#body').attr('style',fcolor1);
      }

      //3rd sequence
      //ns
      else if(check > '05:06:00' && check < '05:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '06:06:00' && check < '06:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '07:06:00' && check < '07:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '08:06:00' && check < '08:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }
      //ds
      else if(check > '17:06:00' && check < '17:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '18:06:00' && check < '18:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '19:06:00' && check < '19:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }else if(check > '20:06:00' && check < '20:07:59'){
        var out = $('#body').attr('style',fcolor2);
      }

      //4th sequence
      //ns
      else if(check > '05:08:00' && check < '05:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '06:08:00' && check < '06:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '07:08:00' && check < '07:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '08:08:00' && check < '08:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }
      //ds
      else if(check > '17:08:00' && check < '17:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '18:08:00' && check < '18:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '19:08:00' && check < '19:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }else if(check > '20:08:00' && check < '20:09:59'){
        var out = $('#body').attr('style',fcolor3);
      }

      //5th sequence
      //ns
      else if(check > '05:10:00' && check < '05:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '06:10:00' && check < '06:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '07:10:00' && check < '07:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '08:10:00' && check < '08:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }
      //ds
      else if(check > '17:10:00' && check < '17:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '18:10:00' && check < '18:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '19:10:00' && check < '19:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }else if(check > '20:10:00' && check < '20:11:59'){
        var out = $('#body').attr('style',fcolor4);
      }

      //6th sequence
      //ns
      else if(check > '05:12:00' && check < '05:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '06:12:00' && check < '06:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '07:12:00' && check < '07:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '08:12:00' && check < '08:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }
      //ds
      else if(check > '17:12:00' && check < '17:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '18:12:00' && check < '18:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '19:12:00' && check < '19:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }else if(check > '20:12:00' && check < '20:13:59'){
        var out = $('#body').attr('style',fcolor5);
      }
  }
}


</script>
</body>
</html>