<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <?php
		$query = "select * from tbl_footer where id='1'";
		$copyright = $db->select($query);
		if($copyright){
			while($result = $copyright->fetch_assoc()){
    ?>
	<p>
		&copy; <?php echo $result['note']; ?>
		<?php echo date('Y'); ?>
	</p>
	<?php } } ?>
</div>

<div class="fixedicon clear">
<?php
            $query = "select * from tbl_social where id='1'";
            $socialmedia = $db->select($query);
            if($socialmedia){
                while($result = $socialmedia->fetch_assoc()){
        ?>
	<a href="<?php echo $result['fb']; ?>" target="_blank"><img src="images/fb.png" alt="Facebook"/></a>
	<a href="<?php echo $result['tw']; ?>" target="_blank"><img src="images/tw.png" alt="Twitter"/></a>
	<a href="<?php echo $result['ln']; ?>" target="_blank"><img src="images/in.png" alt="LinkedIn"/></a>
	<a href="<?php echo $result['gp']; ?>" target="_blank"><img src="images/gl.png" alt="GooglePlus"/></a>
	<?php } } ?>
</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>