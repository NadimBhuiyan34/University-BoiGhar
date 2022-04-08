<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Event Calender
                 </div>
                 <div class="col-md-3 text-right">
                 	<!--<a href="#" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Events</a>-->
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
            <div class="cal-area" style="width: 100%;height: 100%;background: linear-gradient(45deg,#6ac1c5,#bda5ff);">
 <div id="calendar" style="width: 80%;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);"></div>
</div>

<script>
  $(document).ready(function() {
       $('#calendar').evoCalendar({
         theme: "Royal Navy",
         calendarEvents: [{
    id: 'event1', // Event's ID (required)
    name: "New Year", // Event name (required)
    date: "January/1/2020", // Event date (required)
    description:"Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
    type: "holiday", // Event type (required)
    everyYear: true // Same event every year (optional)
  },
{
  id: 'event3',
  name: "My Birthday",
  date: "February/25/2020",
description: "My Birthday wish for you is that you continue to love life and never stop dreaming. May beauty and happiness surround you not only on your special day but always. Words alone are not enough to express how happy I am you are celebrating another year of your life. Happy birthday dear.",
  type: "birthday",
  everyYear: true,
color: "#ff0066"
},
{
    id: 'event2', // Event's ID (required)
    name: "Labor Day", // Event name (required)
    date: "March/1/2020", // Event date (required)
    description:"Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
    type: "holiday", // Event type (required)
    everyYear: true ,// Same event every year (optional)
color: "#63d867"
  },
  {
    name: "Vacation Leave",
    badge: "02/13 - 02/15", // Event badge (optional)
    date: ["February/13/2020", "February/15/2020"], // Date range
    description: "Vacation leave for 3 days.", // Event description (optional)
    type: "event",
    //color: "#63d867" // Event custom color (optional)
  }
]

       });
   })
</script>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
              <button onclick="window.print()" class="btn btn-sm btn-primary" type="button">PDF</button>
              <button onclick="window.print()" class="btn btn-sm btn-success" type="button">PRINT</button>
              <a href="#" class="btn btn-sm btn-danger">SVG</a>
            </div>
            <div class="col-md-4">
            </div>
            <!--<div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>-->
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
  }else{
      echo "Access Denied! You have no permission access this page.";
  }
?>
