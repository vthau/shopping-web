<?php include_once "./inc/header.php" ?>
<?php include_once "./inc/setting.php" ?>

<?php
if (isset($_GET["deleteID"])) {
	$ID = $_GET["deleteID"];
	$deleteSlider = $slider->deleteSlider($ID);
}
?>

<div class="app-main">
	<!-- add slidebar -->
	<?php include_once "./inc/slidebar.php" ?>

	<div class="app-main__outer">

		<div class="app-main__inner">

			<div class="app-page-title">

				<!-- content -->
				<div class="page-title-wrapper">
					<div class="page-title-heading">
						<div class="page-title-icon">
							<i class="pe-7s-car icon-gradient bg-mean-fruit">
							</i>
						</div>
						<div>Danh sách slider
							<div class="page-title-subheading">
								Chỉnh sửa và xóa slider
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="main-card mb-3 card">
						<div class="card-header">Danh sách slider</div>
						<div class="table-responsive" style="padding-bottom: 10px;">
							<?php
							$getSlider = $slider->getSlider();
							if ($getSlider) {
								$i = 0;
							?>
								<table class="align-middle mb-0 table table-borderless table-striped table-hover">
									<thead>
										<tr>
											<th class="text-center">STT</th>
											<th>Tên slider</th>
											<th class="text-center">Hiện/ Ẩn</th>
											<th class="text-center">Tính năng</th>
										</tr>
									</thead>
									<tbody>
										<?php
										while ($result = $getSlider->fetch_assoc()) {
											$i++;
										?>
											<tr>
												<td class="text-center text-muted"><?php echo $i; ?></td>
												<td>
													<div class="widget-content p-0">
														<div class="widget-content-wrapper">
															<div class="widget-content-left mr-3">
																<div class="widget-content-left">
																	<img class="rounded-circle border-circle" src="uploads/sliders/<?php echo $result["sliderImage"] ?>" alt="">
																</div>
															</div>
															<div class="widget-content-left flex2">
																<div class="widget-heading"><?php echo $result["sliderName"] ?></div>
																<div class="widget-subheading opacity-7"></div>
															</div>
														</div>
													</div>
												</td>

												<td class="text-center text-muted">
													<?php
													if ($result["sliderType"] == 1) {
														echo "Hiện";
													} else {
														echo "Ẩn";
													}
													?>
												</td>

												<td class="text-center">
													<a href="slideredit.php?editID=<?php echo $result["sliderID"] ?>" class="btn btn-primary btn-sm">Chỉnh sửa</a>
													<a data-id="<?php echo $result["sliderID"] ?>" class="btn btn-danger btn-sm del-slider">Xóa</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							<?php } else { ?>
								<div class="text-center text-noti">Không có sản phẩm nào để hiển thị</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once "./inc/footer.php" ?>