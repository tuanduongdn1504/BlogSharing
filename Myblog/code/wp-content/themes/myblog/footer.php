			<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="block-footer">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=page&p=2'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<h3><?php the_title(); ?></h3>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="readmore">Xem thêm</a>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="block-footer">
								<h3>Chuyên mục</h3>
								<ul>
									<?php
									$args = array(
									    'child_of'  => 0,
									    'orderby'   => 'id',
									);
									$categories = get_categories( $args );
									foreach ( $categories as $category ) { ?>
										<li><a href="<?php echo get_term_link($category->slug, 'category'); ?>"><?php echo $category->name ; ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="block-footer">
								<h3>Liên hệ</h3>
								<p>Điện thoại: 01658949680</p>
								<p>Email: huykira@gmail.com</p>
								<p>Lên hệ với tôi hay <a href="<?php bloginfo('url'); ?>/lien-he">click</a> vào đây?</p>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>Bản quyền thuộc về Huy Kira </p>
				</div>
			</footer>
		</div>
		<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
		<?php wp_footer(); ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=287736321640108";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>