<?php include('header.php');

if (empty($_SESSION['id_user'])) {
	header('location:index.php');
}

$id_user = $_SESSION['id_user'];

?>

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="profile.php">Profil</a></li>
								<li>Pengaturan</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_container">
						<div class="row courses_row">

							<!-- Course -->
							<?php
							$sql = "SELECT lomba_detail.*,lomba.* FROM lomba_detail
											LEFT JOIN lomba ON lomba_detail.id_lomba = lomba.id_lomba
											WHERE lomba_detail.id_peserta = $id_user";
							$query = mysqli_query($link, $sql);
							while($data = mysqli_fetch_array($query)){
							?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image">
										<img src="admin/upload/<?= $data['foto'] ?>" alt="">
									</div>
									<div class="course_body">
										<h3 class="course_title"><?= $data['judul'] ?></h3>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">

												<div class="course_title"> <a href="hasil.php?id_lomba=<?=$data['id_lomba'] ?>"> Hasil </a> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <?php } ?>



							<!-- Course -->



						</div>

						<!--slide-->
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="box-body box-profile">
					              <img class="profile-user-img img-responsive img-circle" src="images/am.jpg" alt="User profile picture">

					              <h3 class="profile-username text-center">AM Ibrahim</h3>

					              <p class="text-muted text-center">Landscaper</p>
					         </div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="profil.php">Profil</a></li>
									<li><a href="my_lomba.php">Lomba</a></li>
									<li><a href="pengaturan_profil.php">Pengaturan</a></li>
									<li><a href="pengaturan_profil.php">Pengaturan</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Footer -->

<?php include('footer.php'); ?>
