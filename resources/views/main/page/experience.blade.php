@extends('main.base')

@section('meta')
    <title>Experience</title>
    <meta name="description" content="My Curriculum Vitae, capabilities and employment history.">
@stop

@push('class', 'PageExperience')

@section('main')

    <h1 class="pageHeading">
        My Experience &amp; CV
    </h1>

    <section class="Container">
        <div class="Section-container Section--light Section--lg">
            <article class="Content">
                <h1>Daniel Powell <small>(BA Hons)</small></h1>
                <div class="Grid-row">
                    <div class="Grid-column Grid-column--">
                        <p><strong><span class="fa fa-calendar"></span> Age: {{ Carbon::createFromDate(1986, 9, 7)->age }}</strong></p>
                        <p><strong><span class="fa fa-compass"></span> Location:&nbsp; Dorset, UK</strong></p>
                    </div>
                    <div class="column-third-two">
                        <p>I'm a graphic designer and front-end web developer. My core skill-set lies in developing digital interfaces using web technologies, but I am interested in all areas of digital media. I mostly use open source software and content management systems as a framework and then hand-build custom themes and plugins to produce a bespoke web application. I have experience in many different areas of design; print, interface-design, new media, and photography. I mainly work with vector graphics, but know my way around Photoshop and also dabble in creating illustrations. I believe that my key strength is an ability to quickly learn the skills I need for a particular task. I always try to further my skills and use the latest techniques in my design and development work.</p>
                        <p>I have worked within the design industry for a number of years and have experience with taking a project from brief or concept through to production, as well as working directly with clients. Freelancing and running my own business has given me great experience not only in the creative side of things but also in the day-to-day running of a small business. I regularly work with proposals, contracts and briefs, so I understand the importance of developing strong processes for creative projects.</p>
                    </div>
                </div>
                <div class="u-grid">
                    <div>
                        <h2><span class="fa fa-lightbulb-o"></span> Vision</h2>
                        <p>I believe that the web has and will have a profoundly positive impact on our society. I wish to be a part of the development of an open internet that allows cheap education and communication, the cornerstones of modern society.</p>
                        <p>My passion is to make gorgeous websites that are not just pretty, but well built and communicate effectively with their audience. I love creating things that people can actually use and enjoy. I want to create aesthetic experiences that enrich our lives and facilitate personal growth.</p>
                    </div>
                    <div>
                        <h2><span class="fa fa-graduation-cap"></span> Education</h2>
                        <p><span style="font-size: 1.25em;">Bachelor of Arts (BA Hons) Digital Media Production</span><br>
                            Arts University College Bournemouth 2010</p>
                        <p><span style="font-size: 1.25em;">Foundation Degree (FdA) Interactive Media</span><br>
                            The Arts Institute Bournemouth 2009</p>
                    </div>
                </div>
                <h2><span class="fa fa-history"></span> Experience</h2>
                <div class="row">
                    <div class="column-half">
                        <h3>Ignition Theory Ltd.</h3>
                        <h4>Creative Director<br>
                            <em>Sept 2010 - Present</em></h4>
                        <p>After finding my feet as a freelancer, a close friend and myself set-up a design agency specialising in medium-size websites.&nbsp; I design, develop and maintain websites and also assist in any planning and content structure. I am also responsible for defining production processes and quality standards.</p>
                        <p>Setting up and running a small business was the natural step-up from freelancing, and is allowing me to expand my knowledge and appreciation of the creative industry. Ignition Theory is where I see myself staying in the long-term and where I am investing my efforts to create a company that is awesome.</p>
                    </div>
                    <div class="column-half">
                        <h3>Freelance</h3>
                        <h4>Web Designer<br>
                            <em>April 2009 - Sept 2010</em></h4>
                        <p>During the final years of studying for my degree, I attempted to freelance as a website designer and developer. I worked for a number of small clients and businesses, developing dynamic websites for them.</p>
                        <p>This was my trial by fire. Whilst I was burned a few times, I wouldn’t take the experience back. Freelancing expanded my boundaries and is where I really found myself as a designer. I was made aware of what it truly means to work within the creative industry.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column-half">
                        <h3>SM Technology</h3>
                        <h4>Web Designer<br>
                            <em>May 2008 - April 2009</em></h4>
                        <p>SM Technology worked with business&rsquo;s to implement high-end digital security systems. I worked on creating a new public image website, staff intranet system and assisted in creating a new image for the company.<br>
                            My role within the company was to ensure that various company websites were maintained whilst also developing and implementing a completely new branding website.</p>
                        <p>I acquired many new skills from SM Technology that I consistently use today. Whilst I had developed small websites before and had some experience with the web, here I increased my programming skills and learnt about web-based content management systems. My website design skills increased to the point where I was creating and implementing complex dynamic websites based on open-source software.</p>
                        <p>Working for SM Technology was very different from my earlier job. I was the only designer within the company, which meant I had to be independent and became responsible for a lot of the decisions regarding the development and implementation of websites. I gained valuable insight in to what works and what doesn&rsquo;t.</p>
                    </div>
                    <div class="column-half">
                        <h3>Adrian Fisher Mazes Ltd.</h3>
                        <h4>Junior Designer<br>
                            <em>Jan 2007 - May 2008</em></h4>
                        <p>This was my first job within the design industry. Adrian Fisher Mazes was a small design agency specialising in designing puzzle-based physical installations, ranging from indoor mirror-labyrinths to large corn mazes.</p>
                        <p>Whilst I mainly worked with vector based programs such as Illustrator and CAD, this was also the first time I truly encountered proper print-design.<br>
                            I also picked up many design skills in the area of puzzles and mazes, giving me a unique experience.&nbsp;</p>
                        <p>During my time as Junior Designer I was actively involved in the day-to-day design processes within the office, and as such I developed a good understanding of how a small design agency runs. I was also given the task of looking after the business&rsquo;s IT infrastructure and learnt how to maintain basic storage and email servers.</p>
                        <p>The experience from working in a small team of designers was invaluable and really helped me to expand my confidence.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>
@stop
