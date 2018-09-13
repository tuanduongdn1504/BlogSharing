<div class="widget">
	<h3>Tìm kiếm</h3>
	<div class="content-search">
		<form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
			<input type="text" name="s" class="form-control" placeholder="Từ khóa...">
			<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		</form>
	</div>
</div>
<div class="widget">
	<h3>Chuyên mục</h3>
	<div class="content-w">
		<ul>
			<?php
			$args = array(
			    'child_of'  => 0,
			    'orderby'   => 'id',
			);
			$categories = get_categories( $args );
			foreach ( $categories as $category ) { ?>
			<li><a href="<?php echo get_term_link($category->slug, 'category'); ?>"><?php echo $category->name ; ?><span> (<?php echo $category->count; ?>)</span></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="widget">
	<h3>Bài viết mới</h3>
	<div class="content-new">
		<ul>
			<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?></a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="meta"><span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?></span></div>
					<div class="clear"></div>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>
<div class="widget">
	<h3>Bài viết xem nhiều</h3>
	<div class="content-mostv">
		<ul>
			<?php $i = 1; ?>
			<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<span><?php echo $i; ?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="clear"></div>
				</li>
			<?php $i++; ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>
<div class="widget">
	<h3>Quảng cáo</h3>
	<div class="content-wc">
		<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/qc.jpg" alt=""></a>
	</div>
</div>
<div class="widget">
	<h3>Bạn bè</h3>
	<div class="content-w">
		<ul>
			<li><a href="http://huykira.net">Huy Kira</a></li>
			<li><a href="http://huykira.net">Blog Huy Kira</a></li>
		</ul>
	</div>
</div>
<div class="widget">
	<h3>Facebook</h3>
	<div class="content-fb">
		<div class="fb-page" data-href="https://www.facebook.com/huykiradotnet/?ref=bookmarks" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/huykiradotnet/?ref=bookmarks" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/huykiradotnet/?ref=bookmarks">Blog Huy Kira</a></blockquote></div>
	</div>
</div>