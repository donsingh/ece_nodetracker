var aircon = [8,28,49,52,53,54,1,10,19,20];
var lights = [27,18,2,4,7,36,32];
var outlet = [12,15,26,50,51,3,6,22,13];
var updateTime = 5000;
var timeOut = 5;
var floor_3_node_list = [1,2,3,4,6,7,10,13,19,20,22,32,36];
var floor_4_node_list = [8,12,15,26,27,28];
var floor_5_node_list = [18,49,50,51,52,53,54];
$(document).ready(function(){
	
	var path = window.location.pathname;
	var node_list;
	path = path.split("/");
	
	if(path[2]=="third.php"){
		node_list = "floor_3_node_list";
	}else if(path[2]=="fourth.php"){
		node_list = "floor_4_node_list";
	}else if(path[2]=="fifth.php"){
		node_list = "floor_5_node_list";
	}
	
	$.each(eval(node_list),function(key,val){
		start_loop(val);
	});
	
	
	$(".panel").click(function(){
		var node = $(this).find(".badge").html();
		var tbl = (node>25)?'single_phase':'three_phase';
		window.location.href = 'chart.php?table='+tbl+'&node='+node;
	});
	$(".type").click(function(){
		$(".panel").hide();
		$(".type").removeClass("active");
		if($(this).hasClass("gAll")){
			$(".panel").show();
		}else if($(this).hasClass("gAir")){
			$.each(aircon,function(key,val){
				$(".node-"+val+"-data").closest(".panel").show();
			});
		}else if($(this).hasClass("gLit")){
			$.each(lights,function(key,val){
				$(".node-"+val+"-data").closest(".panel").show();
			});
		}else if($(this).hasClass("gOut")){
			$.each(outlet,function(key,val){
				$(".node-"+val+"-data").closest(".panel").show();
			});
		}
	});
});
function start_loop(id){
	blink(id);
	setInterval(function(){blink(id)},updateTime);
}
function blink(tar)
{
   $.ajax({
		url: 'live.php',
		type: 'GET',
		data: {
		  node: tar
		},
		dataType: 'json',
		success: function(data) {
			
			var life;
			
			if(data===null){
				life = false;
			}else{
				life = compareGap(data[2],data[3],data[11]);
				
			}
			
			if(life){

				if(tar>25){
					$(".node-"+tar+"-data").text(parseFloat(data[8]).toFixed(2));
				}else{
					$(".node-"+tar+"-data").text(parseFloat(data[10]).toFixed(2));
				}

				$(".node-"+tar+"-data").next().text(" W");
				$(".pane-"+tar).removeClass("panel-danger");
				$(".pane-"+tar).addClass("panel-success");
				$(".node-"+tar+"-time").parent().html("Read Time: <span class='node-"+tar+"-time'> </span>");

			}else{

				$(".node-"+tar+"-data").text("x_x");
				$(".node-"+tar+"-data").next().text("");
				$(".pane-"+tar).removeClass("panel-success");
				$(".pane-"+tar).addClass("panel-danger");
				$(".node-"+tar+"-time").parent().html("last packet: <span class='node-"+tar+"-time'> </span>");
				
			}
			if(data===null){
				$(".node-"+tar+"-time").parent().html("NO DATA<span class='node-"+tar+"-time'> </span>");
			}else{
				$(".node-"+tar+"-time").parent().html("Read Time: <span class='node-"+tar+"-time'> </span>");
				$(".node-"+tar+"-time").text(data[3]);
				$(".this-time").text(data[11]);
			}
		}
	});
}
function compareGap(dayThen, timeThen, now)
{
	var d = new Date();

	var month = d.getMonth()+1;
	var day = d.getDate();

	var output = d.getFullYear() + '-' +
		((''+month).length<2 ? '0' : '') + month + '-' +
		((''+day).length<2 ? '0' : '') + day;
	
	if(output!=dayThen){
		return false;
	}else{
		var t1 = timeThen.split(":");
		var t2 = now.split(":");
		if(t1[0]!=t2[0]){
			return false;
		}else if((t2[1]-t1[1])>=timeOut){
			return false;
		}else{
			return true;
		}
	}
}