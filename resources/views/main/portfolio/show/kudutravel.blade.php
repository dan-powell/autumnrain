@extends('main.portfolio.show')

@section('meta')
    <title>Kudu Travel Website Design</title>
    <meta name="description" content="A new website design for Kudu Travel">
@stop

@section('content')
    <section class="Section  Section--lightGrad Section--lg Section--center">
        <div class="Section-container ">
            <div class="Content">
                <h1 class="pageHeading">Kudu Travel</h1>
                <p class="lead">A new website for Kudu Travel, designed by me at <a href="http://webbedfeet.uk" rel="nofollow" target="_blank">Webbed Feet UK</a></p>
            </div>
        </div>
    </section>
    <section class="Section  Section--primary Section--md Section--sidesOnly">
        <div class="Section-container ">
            <div class="Content">
                <img alt="New website design for Kudu Travel" class="Hero Hero--upperBorder" src="{!! app('image')->url('portfolio/kudu-travel/hero.jpg') !!}">
            </div>
        </div>
    </section>
    <section class="Section  Section--dark Section--center Section--md">
        <div class="Section-container ">
            <div class="Content">
                <p class="lead">Kudu Travel is a tour company with a strong emphasis on walking, local culture, history and nature.</p>
                <p><a class="Button Button--primary" href="http://www.kudutravel.com" rel="nofollow" target="_blank">view website</a></p>
            </div>
        </div>
    </section>
    <section class="Section  Section--lg">
        <div class="Section-container ">
            <div class="Content">
                <h2>A modern design</h2>
                <p>The previous Kudu Travel website was looking dated and it’s level of usability was not on par with the needs of it’s audience. At Webbed Feet UK, we took on board the needs of the people looking at the site—it’s intended audience—and created a much improved design that can be seen on their new website.</p>
                <blockquote>The effectiveness of the new design has led to an impressive bounce rate reduction of 96%</blockquote>
                <p>The primary audience tended to be of an older generation<sup id="fnref1:1"><a class="footnote-ref" href="#fn:1">1</a></sup> , and as such the most important thing was to keep the website design clear and easy to use. The content for the website is very text-heavy, so we made sure to pay extra attention to the typography.</p>
                <div class="footnotes">
                    <hr>
                    <ol>
                        <li id="fn:1">
                            <p>40 to 70 year olds&nbsp;<a class="footnote-backref" href="#fnref1:1">↩</a></p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="Section  Section--dark Section--lg">
        <div class="Section-container ">
            <div class="Content">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="{!! app('image')->url('portfolio/kudu-travel/initial-design-concept.jpg') !!}">Initial design concept</a>
                        <a href="{!! app('image')->url('portfolio/kudu-travel/initial-design-concept.jpg') !!}">
                            <img alt="Initial design concept" src="{!! app('image')->crop_top(600, 400)->url('portfolio/kudu-travel/initial-design-concept.jpg') !!}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/img/projects/kudu-travel/initial-typography.jpg">Initial typography styles</a>
                        <a href="{!! app('image')->url('portfolio/kudu-travel/initial-typography.jpg') !!}">
                            <img alt="Initial typography styles" src="{!! app('image')->crop_top(600, 400)->url('portfolio/kudu-travel/initial-typography.jpg') !!}">
                        </a>
                    </div>
                </div>
                <p>We took full advantage of the rich imagery available by using large ‘hero’ images on each page to capture the interest of the audience. Rather than using the full-screen background images that are all the rage at the moment, we settled with a single image at the top of each page—this kept the design clear and above all <em>readable</em>.</p>
                <p>The effectiveness of the new design has led to an impressive reduction to the bounce rate<sup id="fnref1:bounce"><a class="footnote-ref" href="#fn:bounce">2</a></sup> of 96%—More visitors are sticking because the site engages their interest better. </p>
                <div class="footnotes">
                    <hr>
                    <ol>
                        <li id="fn:bounce">
                            <p>The bounce-rate is the number of visitors that land on the site and leave without viewing any other pages.&nbsp;<a class="footnote-backref" href="#fnref1:bounce">↩</a>
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="Section  Section--lg">
        <div class="Section-container ">
            <div class="Content">
                <h2>Responsive &amp; mobile friendly</h2>
                <p>People casually browsing for holidays tend to use mobile devices such as tablets and phones, and as such we needed to build a site that would look and perform well on mobile devices—a responsive design was the obvious choice. The new website has been built to work on a large range of devices, from mobiles right up to large desktop systems.</p>
            </div>
        </div>
    </section>
    <section class="Section  Section--primary Section--center Section--md Section--sidesOnly">
        <div class="Section-container ">
            <div class="Content">
                <div class="row">
                    <div class="col-sm-2">
                        <img alt="Mobile version example - tour page header" class="Hero Hero--upperBorder Hero--upperBorder--sm" src="{!! app('image')->url('portfolio/kudu-travel/mobile1.jpg') !!}">
                    </div>
                    <div class="col-sm-2">
                        <img alt="Mobile version example - tour page content" class="Hero Hero--upperBorder Hero--upperBorder--sm" src="{!! app('image')->url('portfolio/kudu-travel/mobile2.jpg') !!}">
                    </div>
                    <div class="col-sm-2">
                        <img alt="Mobile version example - tour page additional information" class="Hero Hero--upperBorder Hero--upperBorder--sm" src="{!! app('image')->url('portfolio/kudu-travel/mobile3.jpg') !!}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Section  Section--lg">
        <div class="Section-container ">
            <div class="Content">
                <h2>More than just skin deep</h2>
                <p>As well as a new design, we also rebuilt the internals of the website. Whilst updates to the previous website were well managed by the staff at Kudu Travel, it was very difficult and time-intensive to update.</p>
                <p>To solve this problem, we built a brand-new tour management system, similar to a CMS<sup id="fnref1:2"><a class="footnote-ref" href="#fn:2">3</a></sup>. The system was not based on an existing system, but built from the ground-up especially for Kudu Travel with their needs in mind. This new system allows a user to add tours and manage dates all in one central web-based administration area.</p>
                <div class="footnotes">
                    <hr><ol><li id="fn:2">
                        <p>Content Management System. Allows authors to easily add and edit content without touching code.&nbsp;<a class="footnote-backref" href="#fnref1:2">↩</a></p>
                    </li>
                </ol></div>
            </div>
        </div>
    </section>
@stop
