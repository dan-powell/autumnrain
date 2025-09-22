@extends('main.base')

@section('meta')
<title>Skills website designer</title>
<meta name="description" content="I utilise hand-drawn sketches, concept drawings, wireframes and full multi-page design comprehensives to create effective websites.">
@stop

@push('class', 'Page Page--skills')

@section('main')

    <section class="Section Section--md">
        <div class="Section-container Content">
            <h1 class="pageHeading">
				My Skills
            </h1>
        </div>
    </section>

	<hr class="spacer">

    <section class="Section">
        <div class="Section-container">

			<div class="Page-grid">

				<div class="Page-grid-item">
					<div class="Page-grid-content Page-grid-content--bottom">
						<h3><a href="#webdesign">Website Design</a></h3>
						<h3><a href="#frontend">Front End Design</a></h3>
						<h3><a href="#backend">Back End Development</a></h3>
						<h3><a href="#otherstuff">Some Other Stuff</a></h3>
					</div>
				</div>
				<div class="Page-grid-item Page-grid-item--noPadding">
					<div class="Page-grid-content Page-grid-content--imageBottom">
						<img src="{{ app('image')->url('main/skills-zombie.png') }}"/>
					</div>
				</div>
				<div class="Page-grid-item Page-grid-item--color3 Page-grid-item--one" id="webdesign">
					<div class="Page-grid-content Page-grid-content--title">
						<h2>Website Design</h2>
					</div>

					<div class="Page-grid-content Page-grid-content--image">
						<img src="{{ app('image')->url('main/website-design.png') }}"/>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--bg Page-grid-item--two">
					<div class="Page-grid-content Page-grid-content--text Page-grid-content--bottom Content">
						<p>I utilise hand-drawn sketches, concept drawings, wireframes and full multi-page design comprehensives to create effective websites. I work closely with clients, guiding them through the design process from initial meetings to final sign-off.</p>
						<p>I also take in to consideration things beyond visual style such as usability, user experience and ensuring suitability for the target audience.</p>
						<p>My applications of choice are currently Sketch & Balsamiq, but I’m also proficient with Photoshop, Illustrator and many other design and prototyping tools.</p>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--color2 Page-grid-item--three" id="frontend">
					<div class="Page-grid-content Page-grid-content--title">
						<h2>Front End Development</h2>
					</div>

					<div class="Page-grid-content Page-grid-content--image">
						<img src="{{ app('image')->url('main/front-end-development.png') }}"/>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--bg Page-grid-item--four">
					<div class="Page-grid-content Page-grid-content--text Page-grid-content--bottom Content">
						<p>I can develop websites by utilising frameworks like Bootstrap & jQuery for fast production, but I am also very comfortable building completely from scratch using vanilla HTML, CSS, and Javascript. I also have extensive experience working with CMS themes and template code.</p>
						<p>I keep up-to-date with the latest technologies and development methods. I have developed my own toolkit which leverages tools such as Gulp, Post-CSS, and LESS.</p>
						<p>I am proficient with Angular and work with complex sites based on dynamic client-side interfaces that utilise AJAX and JSON API’s.</p>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--color3 Page-grid-item--five" id="backend">
					<div class="Page-grid-content Page-grid-content--title">
						<h2>Back End Development</h2>
					</div>

					<div class="Page-grid-content Page-grid-content--image">
						<img src="{{ app('image')->url('main/back-end-development.png') }}"/>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--bg Page-grid-item--six">
					<div class="Page-grid-content Page-grid-content--text Page-grid-content--bottom Content">
						<p>Whilst design and front-end development are my primary skills, I am also confident working with back-end code (mainly PHP), and know my way around a database.<p>
						<p>I have experience setting up and maintaining web-servers running Linux, Apache, Nginx, MySQL & PHP as well as simple DNS and email configurations.</p>
						<p>I am currently developing an eCommerce platform and Content Management System, both of which use the Laravel framework. Additionally, I have worked with and designed relational databases and RESTful API’s for web apps.</p>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--color2 Page-grid-item--seven Page-grid-item--noPaddingBottom" id="otherstuff">
					<div class="Page-grid-content Page-grid-content--title">
						<h2>And a few other things</h2>
					</div>

					<div class="Page-grid-content Page-grid-content--imageBottom">
						<img src="{{ app('image')->url('main/a-few-other-things.png') }}"/>
					</div>
				</div>

				<div class="Page-grid-item Page-grid-item--bg Page-grid-item--eight">
					<div class="Page-grid-content Page-grid-content--text Page-grid-content--bottom Content">
						<p>Along with all things web-related, I am also familiar with graphic design and have worked on simple branding elements such as logo’s, flyers and business cards, as well as the process involved in getting these to print.</p>
						<p>Other things I've been known to dabble in include illustration, photography, animation, game design, drawing, painting, video editing/production, faffing about with electronics, and anything else related to digital design.</p>
					</div>
				</div>

			</div>

		</div>
	</section>



@stop

@section('sidebar')

@stop
