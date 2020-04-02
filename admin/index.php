<?php
    require_once "includes/functions/config.php";
    blockUrlHackers();

    $totalBooks = getTotal("books");
    $totalDevotions = getTotal("devotions");

    $result = fetchAllDesc("books", "book_id", 0, 3);
    if ($result) {
        $books = $result;
    }

    $response = fetchAllDesc("devotions", "devotion_id", 0, 3);
    if ($response) {
        $devotions = $response;
    }

?>

<?php require_once "includes/templates/header.php"; ?>

  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <?php require_once "includes/templates/sidebar.php"; ?>


      <?php require_once "includes/templates/topbar.php"; ?>

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
<div class="row">
	<div class="col-xl-4 col-lg-6 col-md-6 col-12">
		<div class="card bg-white">
			<div class="card-body">
				<div class="card-block pt-2 pb-0">
					<div class="media">
						<div class="media-body white text-left">
							<h4 class="font-medium-5 card-title mb-0"><?php if (isset($totalBooks)) : echo $totalBooks; endif; ?></h4>
							<span class="grey darken-1">Total Books</span>
						</div>
						<div class="media-right text-right">
							<i class="icon-book-open font-large-1 primary"></i>
						</div>
					</div>
				</div>
				<div id="Widget-line-chart" class="height-150 lineChartWidget WidgetlineChart mb-2">
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-6 col-md-6 col-12">
		<div class="card bg-white">
			<div class="card-body">
				<div class="card-block pt-2 pb-0">
					<div class="media">
						<div class="media-body white text-left">
							<h4 class="font-medium-5 card-title mb-0"><?php if (isset($totalDevotions)) : echo $totalDevotions; endif; ?></h4>
							<span class="grey darken-1">Total Devotions</span>
						</div>
						<div class="media-right text-right">
							<i class="icon-notebook font-large-1 warning"></i>
						</div>
					</div>
				</div>
				<div id="Widget-line-chart1" class="height-150 lineChartWidget WidgetlineChart1 mb-2">
				</div>

			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-6 col-md-6 col-12">
		<div class="card bg-white">
			<div class="card-body">
				<div class="card-block pt-2 pb-0">
					<div class="media">
						<div class="media-body white text-left">
							<h4 class="font-medium-5 card-title mb-0">?</h4>
							<span class="grey darken-1">Total Subscribers</span>
						</div>
						<div class="media-right text-right">
							<i class="icon-users font-large-1 success"></i>
						</div>
					</div>
				</div>
				<div id="Widget-line-chart2" class="height-150 lineChartWidget WidgetlineChart2 mb-2">
				</div>
			</div>
		</div>
	</div>
</div>
<!--Statistics cards Ends-->

<!--Line with Area Chart 1 Starts-->
<div class="row match-height">

    <div class="col-12 col-md-12" id="recent-sales">
        <div class="card">
            <div class="card-header">
                <div class="card-title-wrap bar-primary">
                    <h4 class="card-title">Recent Uploads</h4>
                </div>
                <a class="heading-elements-toggle">
                    <i class="la la-ellipsis-v font-medium-3"></i>
                </a>
            </div>
            <div class="card-content mt-1">
                <div class="table-responsive">
                    <table class="table table-hover table-xl mb-0" id="recent-orders">
                        <thead>
                        <tr>
                            <th class="border-top-0">Title</th>
                            <th class="border-top-0">Author</th>
                            <th class="border-top-0">Image</th>
                            <th class="border-top-0">Date Posted</th>
                        </tr>
                        </thead>
                        <tbody>

<!--                        Recent Books Uploaded-->
                        <?php
                            if (!empty($books)) {
                                foreach ($books as $recent_books) {
                                    extract($recent_books); ?>
                                        <tr class="animated fadeInUp">
                                            <td class="text-truncate"><?= $book_title?></td>
                                            <td class="text-truncate"><?= $book_author; ?></td>
                                            <td>
                                                <img src="book_images/<?= $book_image; ?>" class="image-responsive rounded shadow" width="60" alt="">
                                            </td>
                                            <td>
                                                <?= $date_added; ?>
                                            </td>
                                            <td class="text-truncate">$ <?= $book_kindle_price; ?> | $ <?= $book_paperback_price; ?></td>
                                        </tr>
                        <?php } } ?>

<!--                                    Recent Devotion Uploaded-->
                                    <?php
                                    if (!empty($devotions)) {
                                        foreach ($devotions as $recent_devotions) {
                                            extract($recent_devotions); ?>
                                            <tr class="animated fadeInUp">
                                                <td class="text-truncate"><?= $devotion_title?></td>
                                                <td class="text-truncate"><?= $devotion_author; ?></td>
                                                <td>
                                                    <img src="devotion_images/<?= $devotion_image; ?>" class="image-responsive rounded shadow" width="60" alt="">
                                                </td>
                                                <td>
                                                    <?= $datePosted; ?>
                                                </td>
                                            </tr>
                                        <?php } } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Line with Area Chart 1 Ends-->

<div class="row match-height">


</div>
<div class="row match-height">

	<div class="col-xl-12 col-lg-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title-wrap bar-warning">
					<h4 class="card-title"> Stats</h4>
				</div>
			</div>
			<div class="card-body">

				<p class="font-medium-2 text-muted text-center">Books | Devotions | Subscribers</p>
				<div id="donut-dashboard-chart" class="height-250 donut donutShadow">
				</div>

				<div class="card-block">
					<div class="row my-3">
						<div class="col">
			              	<span class="mb-1 text-muted d-block"><?php if (isset($totalBooks)) : echo $totalBooks; endif; ?>% - Books Available</span>
			              	<div class="progress" style="height: 8px;">
			                	<div class="progress-bar gradient-blackberry" role="progressbar" style="width: <?php if (isset($totalBooks)) : echo $totalBooks; endif; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			              	</div>
			            </div>
			            <div class="col">
			              	<span class="mb-1 text-muted d-block"><?php if (isset($totalDevotions)) : echo $totalDevotions; endif; ?>% - Devotions Available</span>
			              	<div class="progress" style="height: 8px;">
			                	<div class="progress-bar gradient-pomegranate" role="progressbar" style="width: <?php if (isset($totalDevotions)) : echo $totalDevotions; endif; ?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			              	</div>
			            </div>
			            <div class="col">
			              	<span class="mb-1 text-muted d-block">? - Subscribers</span>
			              	<div class="progress" style="height: 8px;">
			                	<div class="progress-bar gradient-green-tea" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
            </div>
          </div>
        </div>

       <?php require_once "includes/templates/footer.php"; ?>