<!DOCTYPE html>
<html>
<body>

<h1>HOur Glass in PHP</h1>

<?php
/*
I did not get to finish 
*/
echo "Input number greater than 1";
$handle = fopen ("php://stdin","r");
$Height = fgets($handle);


echo "Input number between 0-100";
$handle = fopen ("php://stdin","r");
$Time = fgets($handle);

$Area = Height*Height;
$Count = 0;
$Count2 = 0;
$Count3 = 0;
$TopStars = (Time/100)*Area;
$BottomStars = Area-Topstars;

for($i=Height*2-1;i>0;-=2){
	$Stars = 0;
	if(Count==0){
		Echo" ";
			for($T=1;Height*2+2;T==){
				Echo"_";
			}
			Echo"";
	}

	for($j=0;j<(Height-i/2);j++){
		echo" ";
	}
	Echo"\\"

	for ($j=0; $j <=i-1 ; $j++) { 
		if(TopStars>Count){
			echo " ";
			Count++;
		} else {
			Stars++;
		}
	}
	if(Stars ==0){

		}else if (Stars==1){
			echo "*";
			} else {
				$left = Stars / 2;
				$right = (Stars/2) + (Stars%2);
				for($ii = 0; ii < left; ii++){
					echo"*";
				}
				}
	for($iii = 0; iii < right; iii++){
		echo"*";
	}
	Echo"/"; 
}	


for ($ i=1; i<Height*2; i += 2){

	for ($j=0; j < (Height- i / 2); j++)
		{
			echo" ";
		}
	$StringBuilder out = new StringBuilder();
	$blanks = 0;
	$space = " ";
	echo"/";
	Count3++;
	for (int j=0; j<i; j++){
		if(BottomStars>Count2){
			if(Height==Count3){
				space = "_";
				}else{
					space = " ";
				}
				blanks++;
				Count2=Count2++;
				}else{
					out.append("*");
				}
	}
				
	if (Count2==0){
		echo" ");
		for($T=1; T<Height*2+2;T++){
			echo"_";
		}
	echo("")
	}
	if(blanks == 0){
	}else if (blanks == 1){
		out.insert(0,space);
		}else{
			$left = blanks / 2;
			$right = (blanks/2) + (blanks%2);
			for($ii = 0; ii < left; ii++){
				out.insert(0, space);
			}
			for($iii = 0; iii < right; iii++){
				out.append(space);
			}
			}

			echo(out.toString()+"\\");
		}
?>
</body>
</html>
