<?php
	
	/**
	 *  Description: 	An auto-scrolling, one page event site for Unreasonable
	 *	Author:			Cesar Gonzalez - icesar@gmail.com
	 *	Date:			May 2011
	 */

	// In the process of debugging.
	error_reporting(E_ALL);
	ini_set('display_errors','On');

	// These allow us to pull in the Attendees list from an Eventbrite event.
	include('/Users/icesar/sites/climax/includes/class-simplepie.php');
	include('/Users/icesar/sites/climax/includes/eventbrite-attendees.php');
	
	$attendees = eventbrite_attendees( 'http://www.eventbrite.com/rss/event_list_attendees/1501778861' );

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="keywords" content="unreasonable institute, social entrepreneurship, events, conferences, boulder colorado" /> 
	<meta name="description" content="The Unreasonable Climax Event in Boulder, Colorado" />
	
	<title>Unreasonable Climax 2011 — This happens only once a year.</title>
	<link href="/style.css" media="screen" rel="stylesheet" type="text/css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery.tipTip.minified.js" type="text/javascript"></script>
	<script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="/js/climax.js" type="text/javascript"></script>

	<script src="http://connect.facebook.net/en_US/all.js#appId=165312903531422&amp;xfbml=1"></script>
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>

</head>

<body>

	<div class="navigation-wrapper">
		<div class="navigation">
			
			<a class="logo" href="/">Unreasonable</a>
			
			<ul id="nav">
			<li><a class="link-active" href="#first-section" id="about">About the<br /><span>Climax</span></a></li>
			<li><a class="" href="#second-section" id="agenda">See the<br /><span>Agenda</span></a></li>
			<li><a class="" href="#third-section" id="fellows">Meet the<br /><span>Fellows</span></a></li>
			<li><a class="" href="#fourth-section" id="attendees">Meet the other<br /><span>Attendees</span></a></li>
			<li><a class="" href="#fifth-section" id="register">Click to<br /><span>Register</span></a></li>
			</ul>
			
		</div>

	</div>


	<div id="first-section" class="section" data-nav="about">
	<div class="content">
	
		<h1 class="logo">The Unreasonable Institute Presents the Global Climax</h1>
		<a id="dont-miss-it" href="#fifth-section"><img src="/images/dont-miss-it-2.png" /></a>
		
		<p class="big-message">Join us at the Boulder Theatre on July 22<sup>nd</sup> as <span>25&nbsp;Entrepreneurs</span> working on Ventures in 
		<span>17&nbsp;countries</span> take <span>6&nbsp;minutes</span> to convince you that their venture will be remembered as having 
		<span>defined progress</span> in our&nbsp;time.</p>

		<div id="event-details">

			<h4>When?</h4>
			<p>Friday July 22<sup>nd</sup>, <a href="#second-section">from 1-6pm</a> (with breaks)<br />
			<a href="#second-section">More events</a> on Thursday 21<sup>st</sup> - Saturday 23<sup>rd</sup>
			
			</p>

			
			<h4>Where?</h4>
			<p><em>The Historic Boulder Theatre</em><br />
			2032 14<sup>th</sup> St. Boulder, CO</p>

			<a href="http://maps.google.com/maps?oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;q=2032+14th+St.+Boulder,+CO&amp;fb=1&amp;gl=us&amp;hnear=0x876b8d4e278dafd3:0xc8393b7ca01b8058,Boulder,+CO&amp;cid=0,0,7707646959330703036&amp;ll=40.019924,-105.277305&amp;spn=0.006573,0.012875&amp;z=14&amp;source=embed" target="_blank">
				<img src="/images/event-map-2.gif" title="Click to see the venue on Google Maps." />
			</a>
						
		</div>
		
		<a id="video-intro" class="photo-shadow" href="http://vimeo.com/15739837" rel="prettyPhoto">
			<img src="/images/video-intro-2.jpg" title="Click for a 3-minute introduction to the Unreasonable Institute." />
			<span>Watch last year's Unreasonable Institute Trailer</span>
		</a>
		
		<div id="share-me">
		
			<div id="share-twitter">
			<a href="http://twitter.com/share" class="twitter-share-button"
		      data-url="http://unreasonableclimax.org/"
		      data-via="beunreasonable"
		      data-text="Don't miss the Unreasonable Climax on July 22nd!">Tweet</a>
			</div>

			<div id="fb-root"></div>
			<fb:like href="http://unreasonableclimax.org/" send="true" width="450" show_faces="true" font=""></fb:like>

		</div>
		
	</div>
	</div>

	<div id="second-section" class="section" data-nav="agenda">
	<img id="keep-going" src="/images/keep-going-2.png" />
	<div class="content">
	
		<h2 class="blue-text-shadow">What's the Agenda?</h2>

		<div class="event-highlight">
		
			<img src="/images/evening-drinks.jpg"  class="dark-photo-shadow" title="Get a little silly."/>

			<div class="details-wrapper">

				<h3>Pre-Climax Evening Drinks</h3>
	
				<p>Drinking Before the Climax: Get together, share a few drinks, and strike up some entirely Unreasonable conversations.
				A chance to meet the Fellows, the team, and the rest of the attendees.</p>
	
				<p class="details">
					Thursday July 21<sup>st</sup>, 8:00 - 11:00pm<br />
					Location TBD<br />
					Free! (as in, get your own drinks)
				</p>
				
				<a href="http://globalsummitdrinks.eventbrite.com/" target="_blank" class="register_button">RSVP on Eventbrite</a>

			</div>
			
		</div>

		<div class="event-highlight" id="climax-event">
		
			<img src="/images/fun-crowd.jpg"  class="dark-photo-shadow" title="It will be the most significant afternoon of your life." />

			<div class="details-wrapper">

				<h3>Unreasonable Climax Presentations &larr;<em>(the main event!)</em></h3>
	
				<p>Our Unreasonable Entrepreneurs will be challenged to convince you that their ventures will be remembered as having defined 
				progress in our time (in 6 minutes).  Our aspiration is to pack the Historic Boulder Theatre by selling out all 850 seats. 
				To have you join us will be a privilege!</p>
									
				<p class="details">
					Friday July 22<sup>nd</sup>, 1:00 - 6:00pm<br />
					The Historic Boulder Theatre<br />
					$120 (or <a href="http://unreasonableinstitute.org/globalsummitapply/" target="_blank">apply for a Sponsored Ticket</a>)
				</p>
				
				<a href="#fifth-section" target="_blank" class="register_button">Click to Register</a>
				
				
				<ul id="schedule">
					<li><strong>The Schedule</strong></li>
					<li>1:00pm &nbsp;|&nbsp; Doors Open - Casual mingling and light refreshments</li>
					<li>1:30pm &nbsp;|&nbsp; Let the Games begin - Opening remarks by Special Guest</li>
					<li>1:45pm &nbsp;|&nbsp; First wave - Unreasonable 6-minute presentations</li>
					<li>2:45pm &nbsp;|&nbsp; Intermission - Mingling, appetizers and refreshments</li>
					<li>3:15pm &nbsp;|&nbsp; Second wave - Unreasonable 6-minute presentations</li>
					<li>4:15pm &nbsp;|&nbsp; Something Awesome will happen during this break</li>
					<li>4:45pm &nbsp;|&nbsp; Third wave - Unreasonable 6-minute presentations</li>
					<li>5:45pm &nbsp;|&nbsp; Closing Remarks - We'll go out with a bang</li>
					<li>7:00pm &nbsp;|&nbsp; <a href="http://unreasonablebanquet.eventbrite.com/" target="_blank">The Evening Banquet</a>: Climax attendees get a discount!</li>
				</ul>

			</div>
			
		</div>

		<div class="event-highlight">
		
			<img src="/images/saint-julien.jpg" class="dark-photo-shadow" title="A meet and greet with style." />

			<div class="details-wrapper">

				<h3>Unreasonable Evening Banquet</h3>
	
				<p>This is your chance to build lasting relationships with the Unreasonable Fellows, Mentors, Partners and community.  The beautiful 
				St. Julien Hotel in downtown Boulder will have live music and stunning mountain views to complement the delicious food, tasty drinks 
				and top-notch company. (Space is limited.)</p>
	
				<p class="details">
					Friday July 22<sup>nd</sup>, 7:00 - 10:30pm<br />
					The St. Julien Hotel<br />
					$80 (for Climax attendees)
				</p>

				<a href="http://unreasonablebanquet.eventbrite.com/" target="_blank" class="register_button">Register on Eventbrite</a>

			</div>
			
		</div>

		<div class="event-highlight">
		
			<img src="/images/thoughtful-shabnam.jpg" class="dark-photo-shadow" title="Yes, they'll be awesome." />


			<div class="details-wrapper">

				<h3>Post-Climax Workshops</h3>
				
				<p>Ideas are a dime a dozen, and only creation, ingenuity, and actually "getting shit done" will change the world.  Join the Unreasonable 
				Fellows as they lead workshops focused on the tangible skills and practical wisdom it takes to launch high-impact initiatives in all 
				corners of the globe.</p>
	
				<p class="details">
					Saturday July 23<sup>rd</sup>, 11:00am - 4:00pm<br />
					Location TBD<br />
					Free! (<em style="color:#222;">only open to Climax attendees</em>)
				</p>

				<a href="http://unreasonableworkshops.eventbrite.com/" target="_blank" class="register_button">RSVP on Eventbrite</a>
				
			</div>
			
		</div>
		
	</div>
	</div>

	<div id="third-section" class="section" data-nav="fellows">
		<div class="content">

			<h2 class="text-shadow">Meet the Fellows</h2>
			<p class="big-message">Below are the 29 Unreasonable Entrepreneurs who are just crazy enough to ignore the skeptics, remain undeterred by failure, and who, above all, are passionate and practical enough to change the world.<br /><span class="small-message">(Roll over their photos to learn more.)</span></p>
		
			<div id='awesome-people'>				
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/ajohnson/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Alissa&nbsp;Johnson</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;CalSolAgua&lt;/div&gt;&lt;p&gt;I  believe that simplicity is the ultimate sophistication &lt;/p&gt;</div>'>

							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/alissa-johnson-100x66.jpg" alt="Photo of Alissa&nbsp;Johnson" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/agithukushongwe/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Anne&nbsp;Githuku-Shongwe</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Afroes Transformational Games&lt;/div&gt;&lt;p&gt;Afro-optimist, innovator, bridge-builder, mother, courageous&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/anne-githuku-shongwe-100x66.jpg" alt="Photo of Anne&nbsp;Githuku-Shongwe" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">

						<a 	href="http://unreasonableinstitute.org/profile/ckoenig/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Cynthia&nbsp;Koenig</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Wello&lt;/div&gt;&lt;p&gt;committed. passionate. thirsty.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/Cynthia1.jpg" alt="Photo of Cynthia&nbsp;Koenig" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/dgross/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Daniel&nbsp;Gross</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;WorldHaus&lt;/div&gt;&lt;p&gt;Passionate leader devoted to creating affordable housing for those who need it most&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/daniel_gross_worldhaus-100x66.jpg" alt="Photo of Daniel&nbsp;Gross" />
						</a>
					</div>

				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/drao/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Devi Prasad&nbsp;Rao</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Arohana Dairy Private Limited&lt;/div&gt;&lt;p&gt;A versatile engineer, Banker turned entrepreneur with a flair for building processes and businesses for scale and a pass&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/DPR-Profile.jpg" alt="Photo of Devi Prasad&nbsp;Rao" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/dmorton/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Donna&nbsp;Morton</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;First Power&lt;/div&gt;&lt;p&gt;Power to the People: Driven by innovation and a commitment to future generations&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/n599333337_1161797_8646.jpg" alt="Photo of Donna&nbsp;Morton" />
						</a>

					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/ewadongo/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Evans&nbsp;Wadongo</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Use solar,save lives&lt;/div&gt;&lt;p&gt;Transforming villages out of poverty, one village at a time&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/DSC00510.jpg" alt="Photo of Evans&nbsp;Wadongo" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/gmanchanda/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Gaurav&nbsp;Manchanda</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;One Degree Solar&lt;/div&gt;&lt;p&gt;We believe that with affordable energy and communications, there no longer have to be six degrees of separation.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/ods-logo-sun.jpg" alt="Photo of Gaurav&nbsp;Manchanda" />

						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/hnitturkar/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Hemant&nbsp;Nitturkar</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;CARMa Venture Services (I) Private Limited&lt;/div&gt;&lt;p&gt;Solving social and environmental problems through entrepreneurship development.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/hemant-nitturkar-100x66.jpg" alt="Photo of Hemant&nbsp;Nitturkar" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/jyang/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Jamie&nbsp;Yang</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;EGG-energy&lt;/div&gt;&lt;p&gt;I think I&#039;m very reasonable&lt;/p&gt;</div>'>

							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/JYang_Unreasonable.jpg" alt="Photo of Jamie&nbsp;Yang" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/jguintu/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Jennifer&nbsp;Guintu</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Prospéritas Microfinanzas&lt;/div&gt;&lt;p&gt;I range from a bookworm to a social butterfly, from leader to apprentice. I don&#039;t let life&#039;s opportunities pass me by.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/jen-profile-pic-2.jpg" alt="Photo of Jennifer&nbsp;Guintu" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">

						<a 	href="http://unreasonableinstitute.org/profile/lduarte/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Luis&nbsp;Duarte</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;YoReciclo&lt;/div&gt;&lt;p&gt;If we believe and we act, we can make a difference and a better place for our children&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/Photo-on-2011-05-04-at-17.48-100x75.jpg" alt="Photo of Luis&nbsp;Duarte" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/mrodriguez/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Maria&nbsp;Rodriguez</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Worms 4 Change&lt;/div&gt;&lt;p&gt;worms.love.worms&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/163273_10150386731950425_621030424_16442389_5968403_n.jpg" alt="Photo of Maria&nbsp;Rodriguez" />
						</a>
					</div>

				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/mniang/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Mohamed Ali&nbsp;Niang</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Malo Traders&lt;/div&gt;&lt;p&gt;Aspiring West-African Socio-entrepreneur&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/mohamed_headshot.jpg" alt="Photo of Mohamed Ali&nbsp;Niang" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/mmatadi/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Morris&nbsp;Matadi</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Initiative for the Development of Former Child Soldiers (IDEFOCS) &lt;/div&gt;&lt;p&gt;Former child soldier turned entrepreneur!&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/Morris.jpg" alt="Photo of Morris&nbsp;Matadi" />
						</a>

					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/msanga/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Moses&nbsp;Sanga</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;ECO-FUEL AFRICA LIMITED&lt;/div&gt;&lt;p&gt;Obsessed with stopping deforestation  in Africa and combating climate change. &lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/Sanga-Moses-Photo-2.jpg" alt="Photo of Moses&nbsp;Sanga" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/mingawale/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Myshkin&nbsp;Ingawale</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Biosense Technologies&lt;/div&gt;&lt;p&gt;Researcher and Entrepreneur&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/04/myshkinUR.jpg" alt="Photo of Myshkin&nbsp;Ingawale" />

						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/nkoloc/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Nathaniel&nbsp;Koloc</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;TerraShift&lt;/div&gt;&lt;p&gt;Committed to the intersection of social enterprise and sustainability.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/04/3.jpg" alt="Photo of Nathaniel&nbsp;Koloc" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/pcompas/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Patricia&nbsp;Compas</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;DayOne Response, Inc.&lt;/div&gt;&lt;p&gt;Driven by a passion for helping others.  Faces challenges with a positive outlook and an unwavering purpose.&lt;/p&gt;</div>'>

							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/Tricia_discussing_Waterbag_with_Thai_Marines.jpg" alt="Photo of Patricia&nbsp;Compas" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/pjaju/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Piyush&nbsp;Jaju</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;ONergy&lt;/div&gt;&lt;p&gt;ONergizing the BoP&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/piyush.jpg" alt="Photo of Piyush&nbsp;Jaju" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">

						<a 	href="http://unreasonableinstitute.org/profile/rjanagam/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Raj&nbsp;Janagam</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Cycle Chalao!&lt;/div&gt;&lt;p&gt;A Student of Philosophy &amp; Social Entrepreneurship, Exploring India &amp; Politics through Cycling :)&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/Raj-Janagam-Profile-100x66.jpg" alt="Photo of Raj&nbsp;Janagam" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/sgul/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Saba&nbsp;Gul</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;BLISS: Business &amp; Life Skills School&lt;/div&gt;&lt;p&gt;Another world is not only possible, she is on her way. On a quiet day, I can hear her breathing.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/for_ui.jpg" alt="Photo of Saba&nbsp;Gul" />
						</a>
					</div>

				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/sfrank/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Scot&nbsp;Frank</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;One Earth Designs&lt;/div&gt;&lt;p&gt;Adventurer/entrepreneur developing social &amp; environmental solutions for emerging markets; relentless, unreasonable, pass&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/scot-frank-photo-375x250.jpg" alt="Photo of Scot&nbsp;Frank" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/ssiroya/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Shivani&nbsp;Siroya</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;InVenture&lt;/div&gt;&lt;p&gt;Out to pulverize poverty!&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/blue.jpg" alt="Photo of Shivani&nbsp;Siroya" />
						</a>

					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/trajendran/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Thilakam&nbsp;Rajendran</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;ARUNIM&lt;/div&gt;&lt;p&gt;Creating Pathways to nurture hope and self reliance.Together WE CAN!&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/04/P40100191.jpg" alt="Photo of Thilakam&nbsp;Rajendran" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/tdalvi/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Tiago&nbsp;Dalvi</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Solidarium&lt;/div&gt;&lt;p&gt;I am passionate about Social Business and Fair Trade, with the ambition to generate a great impact in the world.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/foto-tiago.png" alt="Photo of Tiago&nbsp;Dalvi" />

						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/tkroezen/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Ties&nbsp;Kroezen</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;NICE International&lt;/div&gt;&lt;p&gt;A pragmatic entrepreneur with a track record in building social enterprises with large-scale impact in Africa.&lt;/p&gt;</div>'>
							<img src="http://unreasonableinstitute.org/wp-content/uploads/2011/03/photo-ties-kroezen-unreasonable.jpg" alt="Photo of Ties&nbsp;Kroezen" />
						</a>
					</div>
				
								
					<div class="profile_thumb ">
						<a 	href="http://unreasonableinstitute.org/profile/ayang/" 
							class="imageframe fancyToolTip" target="_blank"
							title='<div class="thumb_info"><h3>Zhaohui&nbsp;Yang</h3><div class="user_type">Unreasonable Fellow 2011</div>&lt;div class=&quot;user_title&quot;&gt;Beijing Green Channel Tech. Co., Ltd&lt;/div&gt;&lt;p&gt;Aston MBA grad, passionate for being eco-friendly, excited by business solutions to 3Rs&lt;/p&gt;</div>'>

							<img src="http://unreasonableinstitute.org/wp-content/uploads/2010/12/zhaohui-yang-profile-100x66.jpg" alt="Photo of Zhaohui&nbsp;Yang" />
						</a>
					</div>
				</div>
		</div>
	</div>

	<div id="fourth-section" class="section"  data-nav="attendees">
	<div class="content">

		<h2 class="blue-text-shadow">Meet the Other Attendees</h2>
		
		<p class="big-message">Some seriously awesome people are coming to the Climax and you will have the time to get to know them.
		<span class="small-message">(The list below is generated automatically to include the 75 most recent registrants.)</span></p>

		<?php echo $attendees; ?>

	</div>
	</div>
	
	<div id="fifth-section" class="section" data-nav="register">
	<div class="content">
	
		<h2 class="text-shadow">Register for the Climax Today</h2>
		
		<div style="width:100%; text-align:left;" >
			<iframe  src="http://www.eventbrite.com/tickets-external?eid=1501778861&ref=etckt" frameborder="0" height="420" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>			
		</div>


		<div class="info-block">

			<h4>Frequently Asked Questions</h4>
			<p><strong>I already have plans on July 22<sup>nd</sup>, should I cancel&nbsp;them?</strong><br />
				Yes.</p>
			
			<p><strong>What makes the Unreasonable Climax such a defining event and gathering?</strong><br />
				We appreciate how you phrased the question.  To answer it properly, we turn to E. B. White who once said,
				"I get up every morning determined to both change the world and have one hell of a good time.  Sometimes this
				makes planning my day difficult."  We are making it easy for you.</p>
						
		</div>

		<div class="info-block">

			<h4>Need a Room?</h4>
			<p>
			$ - <a href="http://horizonscu.org/" target="_blank">Horizons (includes meals!)</a> <br />
			$$ - <a href="http://www.boulderuniversityinn.com/" target="_blank">University Inn Hotel</a> <br />
			$$$ - <a href="http://www.stjulien.com/" target="_blank">St. Julien Hotel</a> <br />
			...more <a href="http://www.google.com/search?aq=f&sourceid=chrome&ie=UTF-8&q=boulder+hotel" target="_blank">Boulder Hotels</a>.
			</p>

		</div>


	</div>	
	</div>
	
	<div id="footer">
	
	</div>

</body>
</html>