<?php 
 $connection = mysqli_connect("localhost","root","","banner");

function ApproveCommentAccordingtoPost($PostId){

 $sqlApprove ="SELECT COUNT(*) FROM comment WHERE post_id='$PostId' AND status='ON'";
 $stmtApprove=$connectingDB->query($sqlApprove);
 $RowsTotal=$stmtApprove->fetch();
 $Total= array_shift($RowsTotal);
 return $Total;

}

function DisApproveCommentAccordingtoPost($PostId){

  $sqlDisApprove ="SELECT COUNT(*) FROM comment WHERE post_id='$PostId' AND status='OFF'";
  $stmtDisApprove=$connectingDB->query($sqlDisApprove);
  $RowsTotal=$stmtDisApprove->fetch();
  $Total= array_shift($RowsTotal);
  return $Total;
}

?>