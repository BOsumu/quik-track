
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://esalesdesk.co/kelsey/css/style.css" type="text/css" />


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://esalesdesk.co/kelsey/js/jquery-1.9.1.js"></script>



</head>

<body>





        <div id="wrapper">
            <div class="container bodywidth">

                <link rel="stylesheet" href="https://esalesdesk.co/kelsey/js/selectformat/select2.css" type="text/css" />
<!-- <script src="https://esalesdesk.co/kelsey/js/highcharts/js/highcharts.js"></script>
<script src="https://esalesdesk.co/kelsey/js/highcharts/js/modules/exporting.js"></script>
<script src="https://esalesdesk.co/kelsey/js/highcharts/js/modules/data.js"></script>
<script src="https://esalesdesk.co/kelsey/js/highcharts/js/modules/drilldown.js"></script> -->


<div class="dashboard-right">
			            <!-- <div class="sale_notification" style="background:#2b3740;">
                <h2 class="nodata"><marquee>Welcome to Sales Desk v3.0
                <span style="color:#EEE; font-weight:bold;"> Dushmantha </span> from the Department of
                <span style="color:#EEE; font-weight:bold;">Top Administration</span></marquee></h2>
            </div> -->

	<div class="searchbox">
		        <form action="https://esalesdesk.co/kelsey/dashboard/search" id="searchform" method="post" accept-charset="utf-8">
			<select id="select_sales" name="select_sales">
                <option value="-1">Search for Customer Sales</option>
                                                             <!-- Remove Disabled Customer -->
                            <option value="3">
                                <column>W.G.R.Rajadurai</column>
                                <column>&nbsp; ( Lot 143 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="4">
                                <column>T.K.G.U.Kumara</column>
                                <column>&nbsp; ( Lot 144 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="5">
                                <column>L.M.P.Dharmaratne</column>
                                <column>&nbsp; ( Lot 145 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="6">
                                <column>S.I.Abeysiriwardena</column>
                                <column>&nbsp; ( Lot 146 @ Central Park - Landed House )</column>
                            </option>

                                             <!-- Remove Disabled Customer -->
                            <option value="7">
                                <column>S.S.Sivashankar</column>
                                <column>&nbsp; ( Lot 147  @ Central Park - Landed House )</column>
                            </option>

            </select>
            <input class="button" type="submit" id="submit" name="submit" value=" " />
        </form>    </div>


<script src="https://esalesdesk.co/kelsey/js/selectformat/select2.js"></script>
<script>
	$(document).ready(function() {
		$("#select_sales").select2();


		$("#select_sales").change(function() {
			window.location = getSiteURL() + "/search/" + $('#select_sales').val();
		});
	});

	function getSiteURL(){
		var pathArray = window.location.pathname.split( '/' );
		var site_location = pathArray[1] + "/" + pathArray[2];
		return window.location.protocol + "//" + window.location.host + "/" + site_location;
	}
</script>
</div>
</div>
</div>
<!-- ============================================================================================================================================= -->
<style>
div.searchable {
    width: 300px;
    float: left;
    margin: 0 15px;
}

.searchable input {
    width: 100%;
    height: 50px;
    font-size: 18px;
    padding: 10px;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box; /* Firefox, other Gecko */
    box-sizing: border-box; /* Opera/IE 8+ */
    display: block;
    font-weight: 400;
    line-height: 1.6;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center/8px 10px;
}

.searchable ul {
    display: none;
    list-style-type: none;
    background-color: #fff;
    border-radius: 0 0 5px 5px;
    border: 1px solid #add8e6;
    border-top: none;
    max-height: 180px;
    margin: 0;
    overflow-y: scroll;
    overflow-x: hidden;
    padding: 0;
}

.searchable ul li {
    padding: 7px 9px;
    border-bottom: 1px solid #e1e1e1;
    cursor: pointer;
    color: #6e6e6e;
}

.searchable ul li.selected {
    background-color: #e8e8e8;
    color: #333;
}
</style>

<div class="searchable">
    <input id="searchInput" type="text" placeholder="search countries" onkeyup="filterFunction(this,event)">
    <button onclick="performSearch()">Search</button>
    <ul>
        <li>Algeria</li>
        <li>Bulgaria</li>
        <li>Canada</li>
        <li>Egypt</li>
        <li>Fiji</li>
        <li>India</li>
        <li>Japan</li>
        <li>Iran (Islamic Republic of)</li>
        <li>Lao People's Democratic Republic</li>
        <li>Micronesia (Federated States of)</li>
        <li>Nicaragua</li>
        <li>Senegal</li>
        <li>Tajikistan</li>
        <li>Yemen</li>
    </ul>
</div>
<script>
function filterFunction(that, event) {
    let container, input, filter, li, input_val;
    container = $(that).closest(".searchable");
    input_val = container.find("input").val().toUpperCase();

    if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
        keyControl(event, container)
    } else {
        li = container.find("ul li");
        li.each(function (i, obj) {
            if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        container.find("ul li").removeClass("selected");
        setTimeout(function () {
            container.find("ul li:visible").first().addClass("selected");
        }, 100)
    }
}

function keyControl(e, container) {
    if (e.key == "ArrowDown") {
        if (container.find("ul li").hasClass("selected")) {
            if (container.find("ul li:visible").index(container.find("ul li.selected")) + 1 < container.find("ul li:visible").length) {
                container.find("ul li.selected").removeClass("selected").nextAll().not('[style*="display: none"]').first().addClass("selected");
            }
        } else {
            container.find("ul li:first-child").addClass("selected");
        }
    } else if (e.key == "ArrowUp") {
        if (container.find("ul li:visible").index(container.find("ul li.selected")) > 0) {
            container.find("ul li.selected").removeClass("selected").prevAll().not('[style*="display: none"]').first().addClass("selected");
        }
    } else if (e.key == "Enter") {
        container.find("input").val(container.find("ul li.selected").text()).blur();
        onSelect(container.find("ul li.selected").text())
    }

    container.find("ul li.selected")[0].scrollIntoView({
        behavior: "smooth",
    });
}

function onSelect(val) {
    // Removed alert
    console.log("Selected:", val);
}

function performSearch() {
    let searchTerm = $("#searchInput").val();
    // Perform search or any other action here
    console.log("Performing search for:", searchTerm);
}

$(".searchable input").focus(function () {
    $(this).closest(".searchable").find("ul").show();
    $(this).closest(".searchable").find("ul li").show();
});
$(".searchable input").blur(function () {
    let that = this;
    setTimeout(function () {
        $(that).closest(".searchable").find("ul").hide();
    }, 300);
});

$(document).on('click', '.searchable ul li', function () {
    $(this).closest(".searchable").find("input").val($(this).text()).blur();
    onSelect($(this).text())
});

$(".searchable ul li").hover(function () {
    $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
    $(this).addClass("selected");
});
</script>
</body>
</html>
