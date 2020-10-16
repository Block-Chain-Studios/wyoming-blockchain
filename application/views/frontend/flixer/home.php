<?php include 'header_browse.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme; ?>/hovercss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme; ?>/hovercss/set1.css" />
<style>
	.movie_thumb {}

	.btn_opaque {
		font-size: 20px;
		border: 1px solid #939393;
		text-decoration: none;
		margin: 10px;
		background-color: rgba(0, 0, 0, 0.74);
		color: #fff;
	}

	.btn_opaque:hover {
		border: 1px solid #939393;
		text-decoration: none;
		background-color: rgba(57, 57, 57, 0.74);
		color: #fff;
	}
</style>
<!-- TOP FEATURED SECTION -->
<?php
$featured_movie		=	$this->db->get_where('movie', array('featured' => 1))->row();

?>
<div>
	<!-- <div style="background-image: url(<?php echo $this->crud_model->get_poster_url('movie', $featured_movie->movie_id); ?>); background-size:cover; width: 100%;"> -->
	<div class="main-container">
		<div class="category-selectors">
			<nav class="tabbable">
				<div class="nav nav-tabs" role="tablist">
					<input type="text" placeholder="Lord timmy & the mystery of the last master">
					<a class="search-btn">Search</a>
					<a href="#" class="category-selector active">Recent Videos</a>
					<a href="#" class="category-selector">Story</a>
					<a href="#" class="category-selector">Casting</a>
					<a href="#" class="category-selector">Locations</a>
					<a href="#" class="category-selector">Costumes</a>
					<a href="#" class="category-selector">VFX</a>
					<a href="#" class="category-selector">Props</a>
					<a href="#" class="category-selector">Music</a>
					<a href="#" class="category-selector">Creature</a>
					<a href="#" class="category-selector">Crew</a>
					<a href="#" class="category-selector">Operations</a>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-2 col-sm-12">
				<div class="selected-poster">
					<img src="assets/files/poster1.png">
					<span>Lord timmy & the mystery of the last master</span>
				</div>
				<div class="category-selectors">
					<nav class="tabbable">
						<div class="nav nav-tabs" role="tablist">
							<a href="#" class="cast-selector active">Cast</a>
							<a href="#" class="cast-selector">Crew</a>
							<a href="#" class="cast-selector">Budget</a>
							<a href="#" class="cast-selector">Funding</a>
							<a href="#" class="cast-selector">Contacts</a>
						</div>
					</nav>
				</div>
				<div class="cast-list">
					<div class="cast-item">
						<div class="cast-img">
							<img src="assets/files/actor1.png">
						</div>
						<divi class="cast-detail">
							<p class="cast-name">ezekel cruz</p>
							<p class="cast-price">$0.05</p>
						</divi>
					</div>
					<div class="cast-item">
						<div class="cast-img">
							<img src="assets/files/actor2.png">
						</div>
						<divi class="cast-detail">
							<p class="cast-name">eryn rea</p>
							<p class="cast-price">$100.00</p>
						</divi>
					</div>
					<div class="cast-item">
						<div class="cast-img">
							<img src="assets/files/actor3.png">
						</div>
						<divi class="cast-detail">
							<p class="cast-name">michael placencia</p>
							<p class="cast-price">$25.00</p>
						</divi>
					</div>
					<div class="cast-item">
						<div class="cast-img">
							<img src="assets/files/actor4.png">
						</div>
						<divi class="cast-detail">
							<p class="cast-name">josh malekos</p>
							<p class="cast-price">$5.00</p>
						</divi>
					</div>
					<div class="cast-item">
						<div class="cast-img">
							<img src="assets/files/actor5.png">
						</div>
						<divi class="cast-detail">
							<p class="cast-name">judy cerda</p>
							<p class="cast-price">$1.50</p>
						</divi>
					</div>
				</div>
			</div>
			<div class="col-md-10 col-sm-12">
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">1A EXT. Area 51 - Night 0:01:17</span>
						<span class="video-price">$0.154</span>
					</div>
					<div class="video-title">The MIB discover anonymous electronic cash</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">6C int. metal shop - night 0:00:22</span>
						<span class="video-price">$0.044</span>
					</div>
					<div class="video-title">timmy watches the newsreel</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">8C ext. timmy’s house - day 0:00:17</span>
						<span class="video-price">$0.034</span>
					</div>
					<div class="video-title">timmy leaves home</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9f ext. moon beach - day 0:00:12</span>
						<span class="video-price">$0.024</span>
					</div>
					<div class="video-title">timmy visits the beach</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9b ext. moon beach - day 0:00:42</span>
						<span class="video-price">$0.084</span>
					</div>
					<div class="video-title">someone watches timmy</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">1A EXT. Area 51 - Night 0:01:17</span>
						<span class="video-price">$0.154</span>
					</div>
					<div class="video-title">The MIB discover anonymous electronic cash</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">6C int. metal shop - night 0:00:22</span>
						<span class="video-price">$0.044</span>
					</div>
					<div class="video-title">timmy watches the newsreel</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">8C ext. timmy’s house - day 0:00:17</span>
						<span class="video-price">$0.034</span>
					</div>
					<div class="video-title">timmy leaves home</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9f ext. moon beach - day 0:00:12</span>
						<span class="video-price">$0.024</span>
					</div>
					<div class="video-title">timmy visits the beach</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9b ext. moon beach - day 0:00:42</span>
						<span class="video-price">$0.084</span>
					</div>
					<div class="video-title">someone watches timmy</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">1A EXT. Area 51 - Night 0:01:17</span>
						<span class="video-price">$0.154</span>
					</div>
					<div class="video-title">The MIB discover anonymous electronic cash</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">6C int. metal shop - night 0:00:22</span>
						<span class="video-price">$0.044</span>
					</div>
					<div class="video-title">timmy watches the newsreel</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">8C ext. timmy’s house - day 0:00:17</span>
						<span class="video-price">$0.034</span>
					</div>
					<div class="video-title">timmy leaves home</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9f ext. moon beach - day 0:00:12</span>
						<span class="video-price">$0.024</span>
					</div>
					<div class="video-title">timmy visits the beach</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9b ext. moon beach - day 0:00:42</span>
						<span class="video-price">$0.084</span>
					</div>
					<div class="video-title">someone watches timmy</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">1A EXT. Area 51 - Night 0:01:17</span>
						<span class="video-price">$0.154</span>
					</div>
					<div class="video-title">The MIB discover anonymous electronic cash</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">6C int. metal shop - night 0:00:22</span>
						<span class="video-price">$0.044</span>
					</div>
					<div class="video-title">timmy watches the newsreel</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">8C ext. timmy’s house - day 0:00:17</span>
						<span class="video-price">$0.034</span>
					</div>
					<div class="video-title">timmy leaves home</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9f ext. moon beach - day 0:00:12</span>
						<span class="video-price">$0.024</span>
					</div>
					<div class="video-title">timmy visits the beach</div>
				</div>
				<div class="col-md-5ths video-container">
					<video class="movie_player">
						<source src="assets/files/World_War_Z_low.mp4" type="video/mp4">
					</video>
					<div class="video-detail">
						<span class="video-time">9b ext. moon beach - day 0:00:42</span>
						<span class="video-price">$0.084</span>
					</div>
					<div class="video-title">someone watches timmy</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="mobile_responsive" style="font-weight: bold;color: #fff;">
		<h1 class="mobile_responsive_text_bold"><?php echo $featured_movie->title; ?></h1>
		<h5 class="mobile_responsive_sort_description" style="color: #ccc; max-width: 900px;"><?php echo $featured_movie->description_short; ?></h5>
		<a href="<?php echo base_url(); ?>index.php?browse/playmovie/<?php echo $featured_movie->movie_id; ?>" class="btn btn-danger btn-lg" style="font-size: 20px;">
			<b><i class="fa fa-play"></i> <?php echo get_phrase('PLAY'); ?></b>
		</a>
		<span id="mylist_button_holder">
		</span>
		<span id="mylist_add_button" style="display:none;">
			<a href="#" class="btn  btn-lg btn_opaque" onclick="process_list('movie' , 'add', <?php echo $featured_movie->movie_id; ?>)">
				<b><i class="fa fa-plus"></i> <?php echo get_phrase('MY_LIST'); ?></b>
			</a>
		</span>
		<span id="mylist_delete_button" style="display:none;">
			<a href="#" class="btn  btn-lg btn_opaque" onclick="process_list('movie' , 'delete', <?php echo $featured_movie->movie_id; ?>)">
				<b><i class="fa fa-check"></i> <?php echo get_phrase('MY_LIST'); ?></b>
			</a>
		</span>
	</div> -->
</div>
<script>
	// submit the add/delete request for mylist
	// type = movie/series, task = add/delete, id = movie_id/series_id
	function process_list(type, task, id) {
		$.ajax({
			url: "<?php echo base_url(); ?>index.php?browse/process_list/" + type + "/" + task + "/" + id,
			success: function(result) {
				//alert(result);
				if (task == 'add') {
					$("#mylist_button_holder").html($("#mylist_delete_button").html());
				} else if (task == 'delete') {
					$("#mylist_button_holder").html($("#mylist_add_button").html());
				}
			}
		});
	}

	// Show the add/delete wishlist button on page load
	$(document).ready(function() {

		// Checking if this movie_id exist in the active user's wishlist
		mylist_exist_status = "<?php echo $this->crud_model->get_mylist_exist_status('movie', $featured_movie->movie_id); ?>";

		if (mylist_exist_status == 'true') {
			$("#mylist_button_holder").html($("#mylist_delete_button").html());
		} else if (mylist_exist_status == 'false') {
			$("#mylist_button_holder").html($("#mylist_add_button").html());
		}
	});
</script>
<!-- MY LIST, GENRE WISE LISTING & SLIDER -->
<?php
$genres		=	$this->crud_model->get_genres();
foreach ($genres as $row) :
	// count movie number of this genre, if no found then return.
	$this->db->where('genre_id', $row['genre_id']);
	$total_result = $this->db->count_all_results('movie');
	if ($total_result == 0)
		continue;
?>
	<div class="row" style="margin:20px 60px;">
		<h4><?php echo $row['name']; ?></h4>
		<div class="content">
			<div class="grid">
				<?php
				$movies	= $this->crud_model->get_movies($row['genre_id'], 5, 0);
				foreach ($movies as $row) {
					$title	=	$row['title'];
					$link	=	base_url() . 'index.php?browse/playmovie/' . $row['movie_id'];
					$thumb	=	$this->crud_model->get_thumb_url('movie', $row['movie_id']);
					include 'thumb.php';
				}
				?>
			</div>
		</div>
	</div>
<?php endforeach; ?>

<hr style="border-top:1px solid #333; margin-top: 50px;">
<div class="container">
	<?php include 'footer.php'; ?>
</div>