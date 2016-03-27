<?php
	include("sql_connect.php");
	
	include("menu.php");

	include("footer.php");
?>
<script type='text/javascript' src='js/highstock.js'></script>
<script type='text/javascript' src='js/exporting.js'></script>
<style>
	.btext{
		text-align: justify;
		text-justify: inter-word;
		padding:50px;
		font-size:1.2em;
		line-height:2em;
		font-family:"Times New Roman";
	}
	td > img {
	  height: 200px;
	  width: 200px;
	  -o-object-fit: contain;
	  
	}
</style>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
	  <h1>Component</h1>
	  <p>These are the different modules involved in the project.</p>
	  <div class="row">
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Part</th>
						<th>Name</th>
						<th>Description</th>
						<th>Specifications</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img class="img-thumbnail" src="img/telosb.jpg" alt="telosb" width="260" height="150" align="middle"></td>
						<td>TelosB Mote</td>
						<td><p>The CM5000 TelosB sensors is IEEE 802.15.4 compliant wireless sensor 
						node based on the original open-source TelosB / Tmote Sky platform design 
						developed and published by the University of California, Berkeley. The included 
						sensors measure temperature, relative humidity and light. 
						<a href="http://www.advanticsys.com/shop/mtmcm5000msp-p-14.html">Source</a></p></td>
						<td><a href="pdf/TelosB_Datasheet.pdf">Telosb_Datasheet.pdf</a></td>
					</tr>
					<tr>
						<td><img  class="img-thumbnail" class="img-thumbnail" src="img/tivac.jpg" alt="tivac" width="200" height="260" align="middle"></td>
						<td>TivaC Launchpad Microcontroller</td>
						<td><p>The TM4C123G LaunchPad Evaluation Kit is a low-cost evaluation platform 
						for ARM Cortex-M4F based microcontrollers from Texas Instruments. The design of 
						the TM4C123G LaunchPad highlights the TM4C123GH6PM microcontroller with a USB 2.0 
						device interface and hibernation module.</p>
						<p>The EK-TM4C123GXL also features programmable user buttons and an RGB LED 
						for custom applications. The stackable headers of the TM4C123G LaunchPad 
						BoosterPack� XL Interface make it easy and simple to expand the functionality 
						of the TM4C123G LaunchPad when interfacing to other peripherals with Texas Instruments 
						MCU BoosterPack.
						<a href="http://www.ti.com/tool/ek-tm4c123gxl">Source</a></p></td>
						<td><a href="pdf/tivac.pdf">TivaC_Datasheet.pdf</a></td>
					</tr>
					<tr>
						<td><img class="img-thumbnail" src="img/rpi.jpg" alt="rpi" width="260" height="200" align="middle"></td>
						<td>Raspberry Pi</td>
						<td><p>The Raspberry Pi is a low cost, credit-card sized computer that plugs into
						a computer monitor or TV, and uses a standard keyboard and mouse. It is a capable 
						little device that enables people of all ages to explore computing, and to learn how 
						to program in languages like Scratch and Python. It's capable of doing everything you'd 
						expect a desktop computer to do, from browsing the internet and playing high-definition 
						video, to making spreadsheets, word-processing, and playing games.</p>
						<p>What's more, the Raspberry Pi  has the ability to interact with the outside world, 
						and has been used in a wide array of digital maker projects, from music machines and parent 
						detectors to weather stations and tweeting birdhouses with infra-red cameras. We want to 
						see the Raspberry Pi being used by kids all over the world to learn to program and understand 
						how computers work. 
						<a href="https://www.raspberrypi.org/help/what-is-a-raspberry-pi/">Source</a></p></td>
						<td><a href="pdf/rpi.pdf">RaspberryPi_Datasheet.pdf</a></td>
					</tr>
					<tr>
						<td><img class="img-thumbnail" src="img/voltage.jpg" alt="voltage" width="260" height="200" align="middle"></td>
						<td>Voltage Sensor</td>
						<td><p>This is a lab-assembled AC/AC Adapter composed of stepdown transformer 220VAC~12VAC, black box casing, and DC wire 
						output.</p></td>
						<td><p> Input: 220VAC ~ 60Hz</p>
						<p> Output: 12VAC ~ 500mA</p></td>
					</tr>
					<tr>
						<td><img src="img/current.jpg" alt="current" width="260" height="200" align="middle"></td>
						<td>Current Transducer Sensor</td>
						<td><p>Current transformers (CTs) are sensors that are used for measuring alternating current. 
						They are particularly useful for measuring whole building electricity consumption (or generation 
						for that matter).</p>
						<p>The split core type such as the CT in the picture above, is particularly suitable for
						DIY use it can be clipped straight on to either the live or neutral wire coming into the
						building without having to do any high voltage electrical work. 
						<a href="http://www.circuit-help.com.ph/product/non-invasive-ac-current-sensor-70a-max/">Source</a></p></td>
						<td><a href="pdf/ctsensor.pdf">CTSensor_Datasheet.pdf</a></td>
					</tr>
				</tbody>
			</table>
                            <!-- /.table-responsive -->
		</div>
	  </div>
	</div>
</div>