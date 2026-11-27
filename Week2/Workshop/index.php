<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Study Website | Student Learning Resource Platform</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<? require_once 'data.php'; ?>
	<header class="site-header">
		<h1 class="brand-name">Study Hub</h1>
		<p class="brand-tag">Free learning resources for students</p>

		<!-- Navigation Bar -->
		<nav class="main-nav">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#courses">Courses</a></li>
			<li><a href="#resources">Resources</a></li>
			<li><a href="#announcement">Announcement</a>
			</li>
			<li><a href="#media">Watch &amp; listen</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		</nav>
	</header>

<!-- Main content and sidebar layout -->
<div class="content-layout">
	<!-- Main Section -->
	<main>
		<!-- HOME -->
		<section class="hero" id="home">
			<div class="hero-text">
				<h2>Learn at your own pace, from the first line of code to the final exam.</h2>
				<p>Browse course notes, follow step-by-step tutorials and keep track of deadlines in one place.</p>
				<a class="button" href="#courses">Browse courses</a>
			</div>
		</section>

		<!-- COURSES -->
		<section class="block" id="courses">
			<h2>Featured Courses</h2>
			<p>Each course has short modules you can finish in one sitting.</p>

			<div class="card-grid">
			<?php 
				$Courses = array_filter(
					$Courses, fn($course) => $course["details"][0]==="Beginner"
				);
			?>

	<?php foreach ($Courses as $course): ?>
	  <article class="card">
	    <img src='<?= $course["image"] ?>' alt='<?= $course["alt"] ?>'>
	    <div class="card-body">
		    <h3><?= $course["title"] ?></h3>
		    <p><?= $course["description"] ?></p>
		    <ul class="tags">
		    	<?php foreach ($course["details"] as $detail): ?>
		    	<li><?= $detail ?></li>
		    	<?php endforeach; ?>
		   	</ul>
	   	<a href="#courses">Courses</a>
	   </div>
	  </article>
	<?php endforeach; ?>

			</div>

		</section>
	</main>
</div>

<!-- Resources -->
		<section id="resources">
			<h2>Resources</h2>

			<article class="guide" id="study-guides">
				<h3>Study Guides</h3>
				<ol>
					<li>List every class, deadline and exam for the week.</li>
					<li>Block two or three focused sessions per subject.</li>
					<li>Leave one evening free so the plan survives a bad day.</li>
					<li>Review on Sunday and adjust.</li>
				</ol>
			</article>

			<article class="guide">
				<h3>Core resources for first-year students</h3>
				<ul>
					<li> <a href="https://developer.mozilla.org/en-US/docs/Learn_web_development" target="_blank" rel="noopener">MDN Learn Web Development</li>
					<li> <a href="https://www.w3schools.com/js/default.asp" target="_blank" rel="noopener">W3Schools JavaScript tutorial</li>
					<li> <a href="https://www.w3schools.com/sql/default.asp" target="_blank" rel="noopener">W3Schools SQL tutorial</li>
					<li> <a href="https://git-scm.com/book/en/v2" target="_blank" rel="noopener">Pro Git book</li>
				</ul>
			</article>
		</section>

	<!-- Multimedia -->
		<section id="media">
			<h2>Watch and Listen</h2>
			<div class="media-row">
				<div class="media-item">
					<h3>Video: the 4-step study loop</h3>
					<video controls preload="metadata" width="640" height="360" poster="images/video-poster.jpg" >
			          <source src="Study-tips.mp4" type="video/mp4">
			          Your browser does not support the video element.
			        </video>
				</div>
			</div>
		</section>

<!-- Sidebar -->
	<aside class="sidebar" id="announcement" aria-label="Announcement and quick links">
		<section class="side-box">
			<h2>Announcement</h2>
			<ul>
				<li><strong>Week 1:</strong>Workshop folders open for upload.</li>
				<li><strong>Week 3:</strong>Library extends opening hours before exams.</li>
				<li><strong>Week 5:</strong>Peer study groups sign up.</li>
			</ul>
		</section>

		<section class="side-box">
			<h2>Quick Links</h2>
			<ul>
				<li><a href="#courses">All courses</li>
				<li><a href="#resources">Study Planning</li>
				<li><a href="#media">Video</li>
			</ul>
		</section>
	</aside>

	
	<!-- Footer-->
	<footer class="bottom" id="contact">
		<section>
			<h2>Study Hub</h2>
			<p>A centralized hub for student study guides, coding resources, and collaborative learning.</p>
    </section>

    <section>
      <h2>Explore</h2>
      <ul>
        <li><a href="#courses">Courses</a></li>
        <li><a href="#study-guides">Study guides</a></li>
        <li><a href="#media">Watch &amp; listen</a></li>
      </ul>
    </section>

    <section>
      <h2>Contact</h2>
      <p>Email: <a href="mailto:support@StudyHub.com">support@StudyHub.com</a></p>
      <p>Kathmandu, Nepal</p>
    </section>
    <p class="copyright">&copy; 2026 StudyHub. All Rights Reserved.</p>
	</footer>

</body>
</html>