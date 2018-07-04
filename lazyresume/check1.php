<?php 
include "review.php";
?>
<html>
<style>
#review{
	border-style:solid;
	margin:0px 200px;
}
.nm{
	font-family:timesnewroman;
	font-size:30px;
	text-align:left;
  text-indent: 90px;
	text-transform:uppercase;
}
#ml{
font-family:timesnewroman;
font-size:20px;
text-align:left;
text-indent: 90px;
}

.head
{
	font-family:timesnewroman;
	font-size:20px;
	font-weight:bold;
	margin-left:50px;
	text-transform:uppercase;
  text-indent: 40px;
}
#car{
font-size:20px;
margin-left:90px;
font-family:timesnewroman;
text-align:justified;
margin-right: 95px;
}

.xp{
	font-size:20px;
	margin-left:100px;
	font-family:timesnewroman;
}
@media print{
	#print,#edit{
		display: none;
	}
}
</style>
<div id="review">
<p class="nm">
	<?php echo  $name."<br>"; ?>
</p><hr style="margin:0px 90px;">

<p id="ml">
	<?php echo $address.","."|".$cnumber."|".$email."<br>"; ?>
</p> 
</p>
<p class="head" >professional summary</p>
	<p id="car" >
	<?php echo $carobj."<br>" ; ?>
    </p>

<p class="head" >education</p>
<table border="1px" style="border-collapse:collapse;width:80%;" class="xp">
<tr>
<th>board/university name</th>
<th>year of passing</th>
<th>percentage</th>
</tr>
<tr>
<td><?php echo $edu00; ?></td>
<td><?php echo $edu01; ?></td>
<td><?php echo $edu02; ?></td>
</tr>
<tr>
<td><?php echo $edu10; ?></td>
<td><?php echo $edu11; ?></td>
<td><?php echo $edu12; ?></td>
</tr>
<tr>
<td><?php echo $edu20; ?></td>
<td><?php echo $edu21; ?></td>
<td><?php echo $edu22; ?></td>
</tr>
</table>

<!-- starting of experience -->

 <?php for($i=0;$i<$max;$i++) { 
if($new[$i]=='')
{
	continue;
}
  else{
  	$ex2[$i]=$new[$i];
  }
}
  ?>
  

<?php
$c=0;
for($i=0;$i<$max;$i++) { 
if(isset($ex2[$i])){ 
$ex3[$i]=$ex2[$i];
$c++;}
  continue; 
  }
  ?>
 <?php if($c!=0) {?>
<p class="head" >experience</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c;$i++){ ?>
<li><?php echo $ex3[$i]; } ?></li>
</ul>

<!-- ending for experience -->

 <!-- starting of skill -->

<?php for($i=0;$i<$max1;$i++) { 
if($new1[$i]=='')
{
	continue;
}
  else{
  	$tec2[$i]=$new1[$i];
  }
}
  ?>
  

<?php
$c1=0;
for($i=0;$i<$max1;$i++) { 
if(isset($tec2[$i])){ 
$tec3[$i]=$tec2[$i];
$c1++;}
  continue; 
  }
  ?>
 <?php if($c1!=0) {?>
<p class="head" >technical skills</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c1;$i++){ ?>
<li><?php echo $tec3[$i]; } ?></li>
</ul>

<!-- ending for skills -->

<!-- starting of languages -->

<?php for($i=0;$i<$max5;$i++) { 
if($new5[$i]=='')
{
	continue;
}
  else{
  	$lang2[$i]=$new5[$i];
  }
}
  ?>
  

<?php
$c5=0;
for($i=0;$i<$max5;$i++) { 
if(isset($lang2[$i])){ 
$lang3[$i]=$lang2[$i];
$c5++;}
  continue; 
  }
  ?>
 <?php if($c5!=0) {?>
<p class="head" >languages known</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c5;$i++){ ?>
<li><?php echo $lang3[$i]; } ?></li>
</ul>

<!-- ending for languages -->


<!-- starting of hobbies -->

<?php for($i=0;$i<$max6;$i++) { 
if($new6[$i]=='')
{
	continue;
}
  else{
  	$hobby2[$i]=$new6[$i];
  }
}
  ?>
  

<?php
$c6=0;
for($i=0;$i<$max6;$i++) { 
if(isset($hobby2[$i])){ 
$hobby3[$i]=$hobby2[$i];
$c6++;}
  continue; 
  }
  ?>
 <?php if($c6!=0) {?>
<p class="head" >hobbies</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c6;$i++){ ?>
<li><?php echo $hobby3[$i]; } ?></li>
</ul>

<!-- ending for hobbies -->




<!-- starting of project -->

<?php for($i=0;$i<$max2;$i++) { 
if($new2[$i]=='')
{
	continue;
}
  else{
  	$pro2[$i]=$new2[$i];
  }
}
  ?>
  

<?php
$c2=0;
for($i=0;$i<$max2;$i++) { 
if(isset($pro2[$i])){ 
$pro3[$i]=$pro2[$i];
$c2++;}
  continue; 
  }
  ?>
 <?php if($c2!=0) {?>
<p class="head" >projects</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c2;$i++){ ?>
<li><?php echo $pro3[$i]; } ?></li>
</ul>

<!-- ending for projects -->

<!-- starting of awards -->

 <?php for($i=0;$i<$max3;$i++) { 
if($new3[$i]=='')
{
	continue;
}
  else{
  	$ac2[$i]=$new3[$i];
  }
}
  ?>
  

<?php
$c3=0;
for($i=0;$i<$max3;$i++) { 
if(isset($ac2[$i])){ 
$ac3[$i]=$ac2[$i];
$c3++;}
  continue; 
  }
  ?>
 <?php if($c3!=0) {?>
<p class="head" >achievements and awards</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c3;$i++){ ?>
<li><?php echo $ac3[$i]; } ?></li>
</ul>

<!-- ending for awards -->

  <!-- starting of activities -->
 <?php for($i=0;$i<$max4;$i++) { 
if($new4[$i]=='')
{
	continue;
}
  else{
  	$act2[$i]=$new4[$i];
  }
}
  ?>
  

<?php
$c4=0;
for($i=0;$i<$max4;$i++) { 
if(isset($act2[$i])){ 
$act3[$i]=$act2[$i];
$c4++;}
  continue; 
  }
  ?>
 <?php if($c4!=0) {?>
<p class="head" >activities and participations</p>
<ul class="xp"> <?php } ?>
<?php for($i=0;$i<$c4;$i++){ ?>
<li><?php echo $act3[$i]; } ?></li>
</ul>

<!-- ending for activities -->
<p class="head" >declaration</p>
	<p id="car" >
	<?php echo $declaration."<br>"; ?>
    </p>

  <p style="font-weight:bold;font-size:25px;">
  	<!--Place:<?php echo $place."<br>"; ?>-->
  	Date:<?php echo $date; ?>
  </p>
    
 <p class="nm" style="text-align:right;padding-right:35px;font-size:23px;">
 <?php echo "(".$name.")" ."<br>"; ?>
    </p>

</div>
<br>

<a id="edit" href="update.php" style="padding:15px 40px;text-decoration:none;float:left;font-size:20px;border-radius:10px;background-color:#330033;color:white;cursor:pointer;">Edit</a>
<button id="print" onclick="myFunction()" style="padding:15px 40px;float:right;font-size:20px;border-radius:10px;background-color:#330033;color:white;cursor:pointer;">Print</button>
</html>

<script type="text/javascript">
function myFunction() {
    window.print();
}
</script>

