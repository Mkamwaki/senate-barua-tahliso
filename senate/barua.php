<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 
function makepdf(){
  $chuo=strtoupper($_POST["jinalachuo"]);
  $number=$_POST["number"];
  $mkoa=strtoupper($_POST["mkoa"]);
  $nambasimu=$_POST["nambasimu"];
  $cheo=$_POST["cheo"];
  $date=date("d/m/Y");
 
require("fpdf.php");
require('rotation.php');  

class PDF extends PDF_Rotate
{
function Header()
{
    //Put the watermark
    $this->SetFont('Arial','B',50);
    $this->SetTextColor(255,192,203);
    $this->RotatedText(35,190,'W a t e r m a r k   d e m o',45);
}

function RotatedText($x, $y, $txt, $angle)
{
    //Text rotated around its origin
    $this->Rotate($angle,$x,$y);
    $this->Text($x,$y,$txt);
    $this->Rotate(0);
}
}

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","B",13);
$pdf->Cell(0,8,"UNITED REPUBLIC OF TANZANIA" ,0,1,'C');
$pdf->Cell(0,10,"TANZANIA HIGHER LEARNING INSTITUTIONS STUDENTS 
ORGANIZATION" ,0,1,'C');
$pdf->Cell(0,8,"",0,1,'C'); 
$pdf->SetFont("Times","B",13);
$pdf->Cell(0,0,"email: info@tahliso.or.tz",0,1,'L'); 
$pdf->Image("tahliso.jpg",93,26,-210);
$pdf->SetFont("Times","B",12);
$pdf->Cell(0,0,"SENATE OFFICE,",0,1,'R');
$pdf->Cell(0,10,"phone: 07624471030",0,0,'L'); 
$pdf->Cell(0,10,"TAHLISO,",0,1,'R');
$pdf->SetFont("Times","B",12);
$pdf->Cell(0,0,"whatsaapp:0696410801",0,1,'L');
$pdf->SetFont("Times","B",12);
$pdf->Cell(0,0,"P.O BOX 6500",0,1,'R');
$pdf->Cell(0,10,"website:www.tahliso.or.tz",0,1,'L');
$pdf->Cell(0,-9,"DAR ES SALAAM-TANZANIA.",0,1,'R');
$pdf->SetFont("Times","B",13);
$pdf->Line(1000,54,-1000,54);
$pdf->Cell(0,27,"SANATE SECRETARY OFFICE",0,1,'C');
$pdf->Cell(0,-8,"In reply please mention Ref. No 24/25/thls/2006/0003",0,1,'L');

$pdf->Line(1000,65,-1000,65);
$pdf->Cell(0,4,"{$date}",0,1,'R');

$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$pdf->Cell(0,30,"PRESIDENT",0,1,'L');
$pdf->Cell(0,-20,"{$chuo},",0,1,'L');
$pdf->Cell(0,30,"S.L.P  {$number},",0,1,'L');
$pdf->Cell(0,-20,"{$mkoa}.",0,1,'L');
$pdf->Cell(0,40,"Dear Sir/Madam ",0,1,'L');

$pdf->SetFont("Times","B",14);
$pdf->Cell(0,-20,"RE: INVITATION TO 36TH TAHLISO SENATE MEETING TO BE HELD AT ",0,1,'C');
$pdf->Cell(0,33," DODOMA, ON 15TH -16TH JUNE 2024 AS FROM 8:00 A.M ",0,1,'C');
$pdf->Cell(0,-20," ",0,1,'C');
$pdf->SetFont("Times","",13);
$pdf->Cell(10,40,"The heading above is concerned.    ",0,1,'L');
$pdf->Cell(0,-30," ",0,1,'L');
$pdf->Cell(0,40,"",0,1,'L');
$pdf->Cell(0,-30,"2.  Tanzania Higher Learning Institutions Students' Organization (TAHLISO), which had been  ",0,1,'L');
$pdf->Cell(0,40,"     registered  since   2006 under  the  Ministry  of  Home  Affairs  with  registration   number of ",0,1,'L');
$pdf->Cell(0,-30,"     14245/05/06/2006  and  work  cooperatively  with   the   Ministry  of  Education,   Science and ",0,1,'L');
$pdf->Cell(0,40,"     Technology,  as  the  only  Organization   responsible   to defend, Listen and securing students ",0,1,'L');
$pdf->Cell(0,-30,"     interests and  their  welfare  during their  universities studies in Tanzania mainland and Zanzibar.   ",0,1,'L');
$pdf->Cell(0,40,"",0,1,'L');
$pdf->Cell(0,-30,"",0,1,'L');
$pdf->Cell(0,40,"3.	  I am  pleased  to inform  you that you  are cordially  invited to the 36TH TAHLISO SENATE ",0,1,'L');
$pdf->Cell(0,-30,"      MEETING. This Senate Meeting will be held at Dodoma from 15 to 16th  June, 2024. ",0,1,'L');


$pdf->Cell(0,60,"4.   TAHLISO will have its 36TH SENATE Meeting that will be held in DODOMA, from 15th to  ",0,1,'L');
$pdf->Cell(0,-50,"      Students Organization together with the Speaker of University /College /Institution Student's  ",0,1,'L');
$pdf->Cell(0,60,"      Representative Council (U/ISRC) from your University/ college/ Institution, this is as per the  ",0,1,'L');
$pdf->Cell(0,-50,"      TAHLISO Constitution of 2004 as amended 2021.",0,1,'L');
$pdf->Cell(0,60,"",0,1,'L');

$pdf->Image("footer.png",15,270);

$pdf->Cell(0,30,"5.	   As per the importance of this meeting and its Agendas, I cordially request you to come with ",0,1,'L');
$pdf->Cell(0,-20,"       your Minister of Health and Minister of loans and grants as the invited guests of this meeting.  ",0,1,'L');
$pdf->Cell(0,30,"       Apart from members also we shall have Government Leaders, Heads of Private Organizations, ",0,1,'L');
$pdf->Cell(0,-20,"       Government organizations related Partners and other related guests. ",0,1,'L');

$pdf->Cell(0,40,"6.	   You are required to come with Tzs 50,000/= as a conference fee as per the constitution that will  ",0,1,'L');
$pdf->Cell(0,-30,"       cover meals for the day and other conference services during the whole session of the meeting.  ",0,1,'L');
$pdf->Cell(0,40,"      This fee will be paid at the entrance before entering the conference hall. This fee shall not cover ",0,1,'L');
$pdf->Cell(0,-30,"      accommodation and transportation cost from your university/College/Institution.",0,1,'L');




$pdf->Cell(0,60,"MAIN AGENDAS OF THE MEETING  ",0,1,'L');
$pdf->Cell(0,-50,"1. To discuss different challenges which are concerning about Loans, health Insurance,",0,1,'L');
$pdf->Cell(0,60,"    Admission and all other student's challenges for this academic year and planning for next ",0,1,'L');
$pdf->Cell(0,-50,"    academic year of study 2024/2025.  ",0,1,'L');
$pdf->Cell(0,60,"",0,1,'L');

$pdf->Cell(0,-50,"2.	To receive, discuss and approve TAHLISO annual Budget for financial year 2024/2025 ",0,1,'L');
$pdf->Cell(0,60,"",0,1,'L');
$pdf->Cell(0,-50,"3.	To receive and endorse TAHLISO Commissioners for the academic year 2024/2025  ",0,1,'L');
$pdf->Cell(0,60,"",0,1,'L');
$pdf->Cell(0,-50,"4.	To make Agreements and General Action Plans for the coming academic year.  ",0,1,'L');
$pdf->Cell(0,60,"",0,1,'L');
$pdf->Cell(0,-50,"5.	To provide awareness and share experience to new universities and colleges Presidents   ",0,1,'L');
$pdf->Cell(0,60,"     about student's issues tackling.   ",0,1,'L');
$pdf->Cell(0,-50,"",0,1,'L');
$pdf->Cell(0,60,"6.	To present and clarify new policies and instructions to students from government,  ",0,1,'L');
$pdf->Cell(0,-50,"   different stakeholders which we are working together such as HELSB, CRDB Bank Plc.",0,1,'L');
$pdf->Cell(0,60,"   NMB Bank, PCCB, Ministry of Education science and technology, NACTVET, ASAS  ",0,1,'L');
$pdf->Cell(0,-50,"   GROUP OF COMPANY, RITA and TCU. ",0,1,'L');



$pdf->Cell(0,100,"",0,1,'L');
$pdf->Cell(0,-90,"",0,1,'L');
$pdf->Cell(0,75,"On behalf of Executive Committee 2024/2025",0,1,'C');
$pdf->Image("saini.png",75,200);
$pdf->Image("muhuri.png",75,200);

$pdf->SetFont("Times","B",14);

$pdf->Cell(0,10,"MICHAEL MUSA OLLOMI",0,1,'C');
$pdf->Cell(0,0," TAHLISO Senate Secretary",0,1,'C');

$pdf->SetFont("Times","B",13);
$pdf->Cell(0,5,"Copy to:",0,1,'L');

$pdf->SetFont("Times","",13);
$pdf->Cell(0,10,"Dean of Students {$chuo}-{$mkoa}",0,1,'L');
$pdf->Cell(0,5,"",0,1,'L');

$pdf->Image("footer.png",10,270);

$pdf->SetAuthor("FALSE",false);











$pdf->output("",'D');

function test_input($data){
   
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$host = "localhost";  
$user = "root";   
$password = '';  
$db_name = "barua";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
$chuo=test_input($chuo);
$number=test_input($number);
$mkoa=test_input($mkoa);
$nambasimu=test_input($nambasimu);


$input="INSERT INTO barua(Chuo,SLP,mkoa,namba,Cheo,Tarehe)
  VALUES( '$chuo', '$number','$mkoa','$nambasimu','$cheo',' $date');";
     mysqli_query($con,$input);
}




if(makepdf()){
 
}

else{
  $message="Faill to download";
}
}

?>