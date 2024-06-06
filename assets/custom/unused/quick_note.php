<?php if (!defined('main')) {
	exit();
} ?>
<style type="text/css">
	.quick_note {
		margin-top: 80px;
		padding: 10px;
		font-style: bold;
		overflow: auto;
		white-space: nowrap;
		align-items: center;
		position: relative;
	}

	.quick_note span {
		font-size: 18px;
		font-weight: bold;
		padding: 10px;
		background: red;
		position: absolute;
		color: white;
		top: 0;
		right: 0;



	}

	.quick_note a {
		color: white;
	}

	.quick_note h4 {
		font-size: 18px;
		text-align: center;
		margin: 0;
		padding: 0;
	}

	.quick_note span:hover {
		cursor: pointer;

	}

	.midSaleBg {
		background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
		background-size: 400% 400%;
		animation: gradient 15s ease infinite;
	}

	@keyframes gradient {
		0% {
			background-position: 0% 50%;
		}

		50% {
			background-position: 100% 50%;
		}

		100% {
			background-position: 0% 50%;
		}
	}
</style>
<?php
$s_notification = $con->query("SELECT * FROM `notification` ORDER BY `id` DESC");
while ($row_notification = $s_notification->fetch_assoc()) {

?>
	<div class="quick_note quick_note<?= $row_notification['id']; ?> midSaleBg">
		<h4><a href="<?php echo $row_notification['link']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(192, 230, 4, 1);transform: ;msFilter:;">
					<path d="m5.705 3.71-1.41-1.42C1 5.563 1 7.935 1 11h1l1-.063C3 8.009 3 6.396 5.705 3.71zm13.999-1.42-1.408 1.42C21 6.396 21 8.009 21 11l2-.063c0-3.002 0-5.374-3.296-8.647zM12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.184 4.073 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z"></path>
				</svg>&nbsp;<?php echo $row_notification['name']; ?></a> <span class="float-end" onclick="quick_note<?= $row_notification['id']; ?>()">x</span></h4>
	</div>
	<script type="text/javascript">
		function quick_note<?= $row_notification['id']; ?>() {
			document.querySelector('.quick_note<?= $row_notification['id']; ?>').style.display = 'none';
		}
	</script>
<?php } ?>