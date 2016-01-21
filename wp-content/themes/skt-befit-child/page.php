<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT BeFit
 */

get_header(); ?>



	<div id="content">

		<div class="site-aligner">
			<style>
				.content-left {
					width: 870px;
				}
				#sitemain {
					/*border: 1px solid green;*/
					background-image: url('wp-content/themes/skt-befit-child/images/parts/sitemain-gradient.png');
					background-position: 100%;
					background-repeat: repeat-y;
					padding-right: 15px;
				}
			</style>
			<div class="site-main content-left page-content" id="sitemain">

				<section id="countdown">
					<style>
						.meter {
							width: 96%;
							height: 25px;  /* Can be anything */
							position: relative;
							background: #555;
							-moz-border-radius: 10px;
							-webkit-border-radius: 10px;
							border-radius: 10px;
							box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
						}
						.meter > span {
						  display: block;
						  height: 100%;
						  border-top-right-radius: 0px;
						  border-bottom-right-radius: 0px;
						  border-top-left-radius: 10px;
						  border-bottom-left-radius: 10px;
						  background-color: #e46326; /* rgb(43,194,83);*/
						  /*background-image: linear-gradient(
						    center bottom,
						    rgb(43,194,83) 37%,
						    rgb(84,240,84) 69%
						  );*/
						  /*box-shadow:
						    inset 0 2px 9px  rgba(255,255,255,0.3),
						    inset 0 -2px 6px rgba(0,0,0,0.4);*/
						  position: relative;
						  overflow: hidden;
						}
						.orange > span {
						  background-color: #e46326;
						  /*background-image: linear-gradient(to bottom, #f1a165, #f36d0a);*/
						}
					</style>
					<div class="meter orange nostripes">
						<span style="width: 33.3%"></span>
					</div>
				</section>

				<?php $outlines = 0; ?>

				<style>
				#top-matches-section {
					width: 90%;
					height: 325px;
					text-align: center;
					<?php echo ($outlines==1) ? 'border: 1px solid blue;' : ''; ?>
				}
				#top-matches-section h3 {
					font-size: 38px;
					color: gray;
					font-weight: bold;
					margin: 20px 0;
				}
				#top-matches-section #match-slider {
					overflow:hidden;
					height:245px;
				}
				#top-matches-section #match-slider-inner {
					width: 2400px;
					height: 245px;
					<?php echo ($outlines==1) ? 'background-color: purple;' : ''; ?>
					position: relative;
					left:0;

				}
				#top-matches-section .match {
					float: left;
					margin-right: 15px;
					<?php echo ($outlines==1) ? 'border: 1px solid red;' : ''; ?>
					width: 225px;
					height: 245px;
					display:block;
					max-width: 225px;
					max-height: 245px;
					background-color: #777;
					color:#FFF;
					font-weight: bold;
					font-size: 24px;
					padding-left: 20px;
					text-align: left;
					background-size: cover;
					background-position: 50%;
					text-shadow: 2px 1px 0px #000;
				}
					#top-matches-section .position {
						font-size: 64px;
						width: auto;
						display: block;
						<?php echo ($outlines==1) ? 'border: 1px solid red;' : ''; ?>
					}
					#top-matches-section .name {
						display: block;
						<?php echo ($outlines==1) ? 'border: 1px solid red;' : ''; ?>
						margin-top:100px;
					}
					#top-matches-section .match .score {
						font-weight: normal;
					}
					#top-matches-section .match-arrow {
						background: #FFF;
						width: 100px;
						height: 168px;
						position: relative;
						top: -245px;
						left: 430px;
						display: inline-block;
						z-index: 100;
						padding-top:77px;
					}
					#top-matches-section .match-arrow-shadow {
						background: #FFF;
						display: inline-block;
						width: 10px;
						height: 239px;
						box-shadow: -1px 0px 5px #000;
						z-index: 95;
						position: relative;
						top: -393px;
						right: -347px;
					}
						#top-matches-section .match-arrow button {
							background: none;
							border: none;
						}
				</style>
				<div id="top-matches-section">
					<h3>My Top Matches</h3>

					<div id="match-slider" data-ride="slider">
						<div id="match-slider-inner" role="listbox">
							<div class="match" style="background-image: url('wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg');">
								<span class="position">1</span>
								<span class="name">Marco Rubio</span>
								<span class="score">SOS Score: 97</span>
							</div>

							<div class="match" style="background-image: url('wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg');">
								<span class="position">1</span>
								<span class="name">Marco Rubio</span>
								<span class="score">SOS Score: 97</span>
							</div>

							<div class="match" style="background-image: url('wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg');">
								<span class="position">1</span>
								<span class="name">Marco Rubio</span>
								<span class="score">SOS Score: 97</span>
							</div>

							<div class="match" style="background-image: url('wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg');">
								<span class="position">1</span>
								<span class="name">Marco Rubio</span>
								<span class="score">SOS Score: 97</span>
							</div>
						</div><!--match-slider-inner-->
					</div><!--match-slider-->

					<div class="match-arrow">

						<button id="slide-matches">
							<img src="wp-content/themes/skt-befit-child/images/parts/matches-arrow.png" width="80" />
						</button>

					</div>
					<div class="match-arrow-shadow">&nbsp;
						</div>

					<script>
						jQuery("#slide-matches").click(function(){
							var position = jQuery("#match-slider-inner").position();
							var positionLeft = position.left;
							var move = '-580';
							var cssLeft = jQuery("#match-slider-inner").css('left');
								cssLeft = parseInt(cssLeft);
							console.log(positionLeft + ' ' + cssLeft + ' x');
							if( positionLeft >= -1157){
								move = cssLeft - 580;
							} else {
								move = '-290';
							}
							jQuery("#match-slider-inner").animate({left: move});
						});
					</script>

					<div class="clear"></div>
				</div><!--top-matches-section-->


				<!--polls-->
				<style>
				#poll-charts {
				<?php $outlines = 0; ?>
				<?php echo ($outlines==1) ? 'border: 1px solid red;' : ''; ?>
				}
				</style>
				<section id="poll-charts">
				<!--Republican-->
				<!-- <div style="margin-right:30px; display:block; float:left; width:100%;"> -->
					<script type="text/javascript" src="http://elections.huffingtonpost.com/pollster/2016-national-gop-primary/embed.js#!selected=Bush,Carson,Christie,Cruz,Fiorina,Huckabee,Kasich,Other,Rand Paul,Rubio,Santorum,Trump,Undecided&maxdate=2016-01-17&estimate=official" data-width="98%" data-height="400"></script>
				<!-- </div> -->
				<!--Democratic-->
				<script type="text/javascript" src="http://elections.huffingtonpost.com/pollster/2016-national-democratic-primary/embed.js#!selected=Clinton,O'Malley,Sanders,Undecided&maxdate=2016-01-17&estimate=official" data-width="98%" data-height="400"></script>
				<?php // doesn't work... might need work
					/*
					$url = 'http://www.realclearpolitics.com/epolls/2016/president/us/2016_republican_presidential_nomination-3823.html';
					$content = file_get_contents($url);
					$first_step = explode( '<div id="chart_wrapper">' , $content );
					// print_r($first_step); die;
					$second_step = explode("</div>" , $first_step[0] );

					echo $second_step[0];
					*/
				?>
				<div class="clear"></div>
				</section><!--poll-charts-->


				<!--spotlight-->
				<?php $outlines = 0; ?>
				<style>
				#spotlight-ruler {
					width: 765px;
					border: 1px solid red;
				}
				#spotlight {
					<?php echo ($outlines==1) ? 'border: 1px solid blue;' : ''; ?>
				}
					#spotlight h3 {
						color: #8dc63f;
						font-size: 32px;
						<?php echo ($outlines==1) ? 'border: 1px solid blue;' : ''; ?>
					}
					#spotlight .spotlight-feature-image {
						width: 270px;
						height: 210px;
						background-size: cover;
						background-position: 50%;
						color: #FFF;
						text-shadow: 2px 1px 0 #000;
						font-size: 20px;
						float: left;
						margin-right: 10px;
						<?php echo ($outlines==1) ? 'border: 1px solid silver;' : ''; ?>
					}
						#spotlight .spotlight-feature-image p {
							position: relative;
							top: 150px;
							left: 10px;
						}
					#spotlight .spotlight-info {
						width: 240px;
						height: 210px;
						float: left;
						margin-right: 10px;
						font-size: 16px;
						<?php echo ($outlines==1) ? 'border: 1px solid red;' : ''; ?>
					}
						#spotlight .spotlight-info-stat {
							height: 80px;
							border: 1px solid #8dc63f;
							padding: 10px;
						}
						#spotlight .spotlight-info-stat.first { margin-bottom: 10px; }
							#spotlight .spotlight-info-stat .percent {
								font-size: 32px;
								color: #8dc63f;
								float: left;
								font-weight: bold;
								padding: 4px 10px;
							}
							#spotlight .spotlight-info-stat .rating {
								color: green;
							}
						#spotlight .spotlight-info-news {
							height: 80px;
							border: 1px solid #8dc63f;
							padding: 10px;
						}
						#spotlight .spotlight-info-news.first { margin-bottom: 10px; }

					#spotlight .spotlight-arrow {
						background: #FFF;
						width: 80px;
						height: 168px;
						display: inline-block;
						z-index: 100;
						padding-top:67px;
					}
						#spotlight .spotlight-arrow button {
							background: none;
							border: none;
						}
				</style>
				<section id="spotlight-ruler">ruler 765px</section>
				<section id="spotlight">
				<h3>Spotlight</h3>
				<div class="spotlight-feature-image" style="background-image: url('wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg');">
					<p>
					<strong>Planned Parenthood</strong><br>
					SOS Spotlight
					</p>
				</div>
				<div class="spotlight-info">
					<div class="spotlight-info-stat first">
						<span class="percent">97%</span>
						of services focused on breast cancer and cervical screening
					</div>

					<div class="spotlight-info-stat">
						Planned Parenthood should be defunded to send the message that their behavior will not be tolerated...
						<span class="rating"><i class="icon-thumbs"></i>150,000</span>
					</div>
				</div>
				<div class="spotlight-info">
					<div class="spotlight-info-news first">
						News
					</div>
					<div class="spotlight-info-news">
						News
					</div>
				</div>

				<div class="spotlight-arrow">
					<button id="slide-spotlights">
						<img src="wp-content/themes/skt-befit-child/images/parts/matches-arrow.png" width="80">
					</button>
				</div>
				</section><!--spotlight-->

			</div><!--site-main-->

		<div class="sidebar_right">
			<?php $outlines=1; ?>
			<style>
				#sidebar {
				<?php echo ($outlines==1) ? 'border: 1px solid blue;' : ''; ?>
				}
				aside h3 {
					font-size: 30px;

				}
					#my-stances h3 { color: #ef4b49; text-align: center; }
					#polls h3 { color: #585caa; text-align: center; }
					#trending h3 { color: #404041; text-align: center; }
			</style>
			<div id="sidebar">
				<style>
					aside {
						border: 1px solid red;
						<?php echo ($outlines==1) ? 'border: 1px solid red;' : ''; ?>
					}
						.cards-container {
							padding-top: 10px;
							height: 220px;
						}
							.card {
								display: block;
								width: 250px;
								height: 180px;
								border: 1px solid red;
							}
							#stance-card-1 {
								background-color: red;
								position: relative;
								z-index: 300;
								top: 20px;
								left: 0px;
							}
							#stance-card-2 {
								background-color: purple;
								position: relative;
								z-index: 200;
								top: -170px;
								left: 10px;
							}
							#stance-card-3 {
								background-color: blue;
								position: relative;
								z-index: 100;
								top: -360px;
								left: 20px;
							}
							#poll-card-1 {
								background-color: silver;
								position: relative;
								z-index: 300;
								top: 20px;
								left: 0px;
							}
							#poll-card-2 {
								background-color: green;
								position: relative;
								z-index: 200;
								top: -170px;
								left: 10px;
							}
							#poll-card-3 {
								background-color: yellow;
								position: relative;
								z-index: 100;
								top: -360px;
								left: 20px;
							}
					#top-trending {
						margin-top: 30px;
					}
					#bottom-trending {
						border-top: 8px solid #404041;
						margin-top: 10px;
						padding-top: 10px;
					}
					.trend {
						display: block;
						margin: 2px 0;
					}
					.trend-image {
						display: block;
						float: left;
						width: 75px;
					}
					.img-circle {
						width: 66px;
						height: 66px;
						border-radius: 50%;
					}
					.trend-right {
						display: block;
						width: 185px;
						float: left;
					}
					.trend-title {
						font-family: serif;
						font-size: 14px;
						padding: 6px 0;
					}
					.trend-bar-top, .trend-bar-bottom {
						width:100%;
						height:25px;
						position:relative;
						background: #FFF;
					}
					.trend-bar-top>span {
						height:100%;
						background-color: green;
						display:block;
						position: relative;
						overflow: hidden;
					}
					.trend-bar-bottom>span {
						height:100%;
						background-color: red;
						display:block;
						position: relative;
						overflow: hidden;
					}
				</style>
				<aside id="my-stances">
					<h3>My Stances</h3>
					<div class="cards-container">
						<div id="stance-card-1" class="card">
							Card 1
						</div>
						<div id="stance-card-2" class="card">
							Card 2
						</div>
						<div id="stance-card-3" class="card">
							Card 3
						</div>
					</div>
				</aside>

				<aside id="polls">
					<h3>Polls</h3>
					<div class="cards-container">
						<div id="poll-card-1" class="card">
							Card 1
						</div>
						<div id="poll-card-2" class="card">
							Card 2
						</div>
						<div id="poll-card-3" class="card">
							Card 3
						</div>
					</div>
				</aside>

				<aside id="trending">
					<h3>Trending</h3>
					<div id="top-trending">
						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">1. Donald Trump</div>
								<div class="trend-bar-top"><span style="width:95%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">2. Planned Parenthood</div>
								<div class="trend-bar-top"><span style="width:85%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">3. Iran Nuclean Deal</div>
								<div class="trend-bar-top"><span style="width:75%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">4. Marco Rubio</div>
								<div class="trend-bar-top"><span style="width:65%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">5. Barack Obama</div>
								<div class="trend-bar-top"><span style="width:45%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div id="bottom-trending">
						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">1. Hillary Clinton</div>
								<div class="trend-bar-bottom"><span style="width:95%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">2. Gun Control</div>
								<div class="trend-bar-bottom"><span style="width:95%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">3. Immigration</div>
								<div class="trend-bar-bottom"><span style="width:95%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">4. Bernie Sanders</div>
								<div class="trend-bar-bottom"><span style="width:95%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="trend">
							<div class="trend-image"><img src="wp-content/themes/skt-befit-child/images/politicians/rubio-marco.jpg" width="66" height="66" class="img-circle"></div>
							<div class="trend-right">
								<div class="trend-title">5. Rand Paul</div>
								<div class="trend-bar-bottom"><span style="width:95%;"></span></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</aside>
			</div><!--sidebar-->
		</div><!--sidebar-right-->

		</div><!--site-aligner-->

		<div class="site-aligner">

			<style>
				.my-top-matches {
					clear:both;
					background-color:#F47135;
					color: #FFF;
					font-family: "Times New Roman";
					margin-left: 2%;
					margin-right: 2%;
					padding: 10px 20px;
					float:left;
					width:350px;
					height:200px;
					text-align: center;
				}
					.my-top-matches h3{
						text-transform: uppercase;
					}
				.top-trending {
					float:left;
					background-color:#FFF;
					color:#000;
					font-family: "Times New Roman";
					margin-left: 2%;
					padding: 10px 10px;
					width: 350px;
					height: 300px;
					text-align: center;
					border: 1px solid #777;
				}
					.top-trending-box {
						background-color: #F47135;
						font-size: 12px;
						color: #FFF;
						width:150px;
						height:190px;
						float: left;
						margin-right:1%;
					}
			</style>

			<div class="my-top-matches" style="display:none;">
				<h3>My Top Matches</h3>
			</div><!--my-top-matches-->

			<div class="top-trending" style="display:none;">
				<h3>TRENDING</h3>
				<div class="top-trending-box">
					<img src="" width="150" />
					<p>Marco Rubio</p>
					<p>▲ &#9650; &#9660; 23%</p>
				</div><!--top-trending-box-->
				<div class="top-trending-box">
					<img src="" width="150" />
					<p>Marco Rubio</p>
					<p>▲ 23%</p>
				</div><!--top-trending-box-->
			</div><!--top-trending-->

			<section class="site-main content-left page-content" id="sitemain">
				<?php if( have_posts() ) :
					while( have_posts() ) : the_post(); ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-content">
						<?php the_content();
							//If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template(); ?>
						</div><!-- entry-content --><?php
					endwhile;
					else :
				endif; ?>
				<div class="clear"></div>
			</section>
			<div class="sidebar_right">
				<?php get_sidebar();?>
			</div><!-- sidebar_right -->
			<div class="clear"></div>
		</div>
  </div><!-- content -->
<?php get_footer(); ?>