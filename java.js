               function Refresh(){

                   if(confirm("Are You you, want to refresh the page?")){

                       location.reload();
                   }
               }

               
                function renderTime(){
                    var mydate = new Date();
                    var year = mydate.getFullYear();
                    if(year < 1000){
                        year +=1900
                    }
                    var day = mydate.getDay();
                    var month = mydate.getMonth();
                    var daym = mydate.getDate();
                    var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                    var montharray = new Array("January", "Feburary", "March", "April", "May", "June", "July", "August", " September", "October", "November", "December");
              

                //Time
                var currectTime = new Date();
                var h = currectTime.getHours();
                var m = currectTime.getMinutes();
                var s = currectTime.getSeconds();

                if(h == 24){
                    h = 0;

                }else if(h > 12){
                    h = h - 0;
                }

                if(h < 10){
                    h = "0" + h;

                }
                if(m < 10){
                    m = "0" + m;
                }
                if(s < 10){
                    s = "0" + s;

                }
                var myClock = document.getElementById("clockDisplay");
                myClock.textContent = "" +dayarray[day]+ " " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
                myClock.innerText = "" +dayarray[day]+ " " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;

                setTimeout("renderTime(), 1000");
                }
                renderTime();