<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="content">
			<div class="container">
				<h1>Test code crop images</h1>
				<div class="main">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo hk_get_thumb(get_the_id(), 200, 100); ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<div class="meta">
									<span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?></span>
								</div>
								<p><?php echo teaser(50); ?></p>
							</div>
						</div>
						<br>	
					<?php endwhile; else : ?>
					<p>Không có</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>