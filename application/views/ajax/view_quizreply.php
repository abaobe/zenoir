<!--view quiz reply for student-->
<?php
$quiz_response = $page['reply'];
$files = $page['files'];
?>
<div id="modal_header">
<h4>View Quiz Reply - <?php echo $quiz_response['res_title']; ?></h4>
</div>
<div class="container">


<p>
Quiz: <?php echo $quiz_response['quiz_title']; ?>
</p>
<p>
Submitted by: <?php echo strtoupper($quiz_response['lname']) . ', ' . ucwords($quiz_response['fname']) . ' ' . ucwords($quiz_response['mname']); ?>
</p>
<p>
Time submitted: <?php echo date('Y-m-d g:i:s A', strtotime($quiz_response['datetime'])); ?>
</p>
<p>
<pre>
<?php echo $quiz_response['body']; ?>
</pre>
</p>

<div id="quizresponse_files">
	<?php if(!empty($files)){ ?>
		Attached Files:
		<?php foreach($files as $row){ ?>
			<li><a href="/zenoir/index.php/ajax_loader/view/view_file?fid=<?php echo $row['file_id']; ?>" class="lightbox"><?php echo $row['filename']; ?></a></li>
		<?php } ?>
	<?php } ?>	
</div><!--end of quizresponse_files-->
</div><!--end of container-->