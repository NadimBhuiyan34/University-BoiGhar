<?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
?>
<div class="col-md-12 gray-bg">

	<div class="row">
		<div class="col-md-10">
			<h2>Dashboard</h2>
		</div>
		<div class="col-md-2">
			<div class="float-right mt-2">
				<a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-download"></i><span> Generate Report</span> </a>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row mt-3">
			<!--col-md-3 start-->
			<div class="col-md-3">
				<div class="panel panel1">
					<div class="panel-body">
						<div class="col-md-10">
							<span>EARNINGS (MONTHLY)</span>
							<h4>$40,000</h4>
						</div>
						<div class="col-auto">
							<i class="fa fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
			<!--col-md-3 end-->
			<!--col-md-3 start-->
			<div class="col-md-3">
				<div class="panel panel2">
					<div class="panel-body">
						<div class="col-md-10">
							<span>EARNINGS (Yearly)</span>
							<h4>$540,000</h4>
						</div>
						<div class="col-auto">
							<i class="fa fa-usd fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
			<!--col-md-3 end-->
			<!--col-md-3 start-->
			<div class="col-md-3">
				<div class="panel panel3">
					<div class="panel-body">
						<div class="col-md-10">
							<span>EARNINGS (MONTHLY)</span>
							<h4>$40,000</h4>
						</div>
						<div class="col-auto">
							<i class="fa fa-book fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
			<!--col-md-3 end-->
			<!--col-md-3 start-->
			<div class="col-md-3">
				<div class="panel panel4">
					<div class="panel-body">
						<div class="col-md-10">
							<span>PENDING REQUEST</span>
							<h4>18</h4>
						</div>
						<div class="col-auto">
							<i class="fa fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
			<!--col-md-3 end-->
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel2">
					<div class="panel-heading bg-info">
						<div class="col-md-12 heading_title">
							Customer visiting Percentage
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="chart-bar pt-4">
							<canvas id="mybarChart" width="400" height="150"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel1">
					<div class="panel-heading bg-info">
						<div class="col-md-9 heading_title">
							TIME IS NOW!
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="analog-clock"
							style="height:330px;display: grid;place-items: center;background: #dde1e7;text-align: center;">
							<div class="clock">
								<div class="center-nut"></div>
								<div class="center-nut2"></div>
								<div class="indicators">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
								<div class="sec-hand">
									<div class="sec"></div>
								</div>
								<div class="min-hand">
									<div class="min"></div>
								</div>
								<div class="hr-hand">
									<div class="hr"></div>
								</div>
							</div>
							<script>
							const sec = document.querySelector(".sec");
							const min = document.querySelector(".min");
							const hr = document.querySelector(".hr");
							setInterval(function() {
								let time = new Date();
								let secs = time.getSeconds() * 6;
								let mins = time.getMinutes() * 6;
								let hrs = time.getHours() * 30;
								sec.style.transform = `rotateZ(${secs}deg)`;
								min.style.transform = `rotateZ(${mins}deg)`;
								hr.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
							});
							</script>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--area chart row start-->
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel4">
					<div class="panel-heading bg-info">
						<div class="col-md-9 heading_title">
							Monthly Benefit Analysis
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="chart-line pt-4">
							<canvas id="line-chart" width="400" height="150"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel1">
					<div class="panel-heading bg-info">
						<div class="col-md-12 heading_title">
							Different Categories Selling Rate
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						<div class="chart-pie pt-4">
							<canvas id="myPieChart" width="400" height="320"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--col-md-12 end-->
<script type="text/javascript">
let labels1 = ['Best Sell', 'New Books', 'Old Books'];
let data1 = [45, 30, 15];
let colors1 = ['#ff0066', '#36CAAB', '#49A9EA'];

let mychart1 = document.getElementById("myPieChart").getContext('2d');

let chart1 = new Chart(mychart1, {
	type: 'doughnut',
	data: {
		labels: labels1,
		datasets: [{
			data: data1,
			backgroundColor: colors1
		}]
	},
	options: {
		title: {
			text: "Category via books sell percantage.",
			display: true
		},
		legend: {
			display: true,
			position: "bottom"
		}
	}
});

let labels2 = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
let data2 = [6400, 7000, 7800, 8200, 7700, 7500, 12000, 15000, 3000, 5000, 11000, 16000];
let colors2 = ['#ffe0e6', '#ffecd9', '#fff5dd', '#dbf2f2', '#d7ecfb', '#ebe0ff', '#ffe0e6', '#ffecd9', '#fff5dd',
	'#dbf2f2', '#d7ecfb', '#ebe0ff'
];
let bdcolor2 = ['#ff0033', '#ff8000', '#ffb300', '#44bbbb', '#1791e8', '#5900ff', '#ff0033', '#ff8000', '#ffb300',
	'#44bbbb', '#1791e8', '#5900ff'
];
let mychart2 = document.getElementById("mybarChart").getContext('2d');

let chart2 = new Chart(mychart2, {
	type: 'bar',
	data: {
		labels: labels2,
		datasets: [{
			data: data2,
			backgroundColor: colors2,
			borderColor: bdcolor2,
			borderWidth: 2
		}]
	},
	options: {
		title: {
			text: "Monthly customer rate of University BoiGhar",
			display: true
		},
		legend: {
			display: false
		},
		animation: {
			duration: 5000,
			easing: "easeInOutBounce"
		}
	}
});

let labels3 = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
let data3 = [10, 8, 6, 5, 12, 8, 16, 17, 33, 50, 17, 39];

let mychart3 = document.getElementById("line-chart").getContext('2d');

let chart3 = new Chart(mychart3, {
	type: 'line',
	data: {
		labels: labels3,
		datasets: [{
			label: "2021",
			data: data3,
			//backgroundColor: "#dbf2f2"
			borderColor: "#44bbbb",
			borderWidth: 2
		}]
	},
	options: {
		title: {
			text: "Benefit Via Monthly",
			display: true
		},
		legend: {
			display: true
		},
		animation: {
			duration: 3000,
			easing: "easeInOutBounce"
		}
	}
});
</script>
<?php
    get_footer();
?>