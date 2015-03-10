<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>Carson Lineage</title>
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson, Sonouta, Annotation, Directory, Site Index, Welcome, About" />
	<meta name="description" content="Welcome page for the Carson Lineage website, and displays links to commonly visited places around the website." />
	<!--Includes the meta information (general stylesheets, icons, other constant information basically)-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/metadata.html";?>
	<!--
	<meta name="author" content="Eamonn Carson">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="/res/carsonLineageIcon.ico" type="image/x-icon"/>
	<link rel="icon" href="/res/carsonLineageIcon.png" sizes="64x64">
	<link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/desktopStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/midsizeStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/mobileStylesheet.css" />
-->
</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="breadcrumbs">
		<ul class="float-clearing">
			<li class="current"><a href="#content">Home</a></li>
		</ul>
	</div>

	<div id="content">
		<div id="sonouta">
			<?php
				$sonoutas = array(
					"To all the far corner of the world, do the blessings of the Buddha extend.",
					"Happier I'd be to see one more person saved than for the Order to grow.",
					"Many are those who can pity others, yet are blind to their own misfortune.",
					"Precious is it to realize that our home altar is where the Buddha resides.",
					"Meditating on everything in daily life nourishes one's Buddha-heart.",
					"Though not seen, sincerity reaches the Buddha's world and leads to salvation.",
					"Action leads to true belief, while contemplation leads only to delusion.",
					"How rare to come across the Teaching, the treasure of all treasures in the world.",
					"Faith is like a magic potion that allows you to bear the unbearable.",
					"Great is the joy of giving to others a teaching as vast as the ocean.",
					"Listen carefully to spiritual words, for they show us the way to break free.",
					"Practice for others, not for yourself, makes faith truly become part of you.",
					"Better to reflect on one's actions than to mull over one's luck for the day.",
					"Find the courage to cast away attachments and cut loose your karmic burden.",
					"How rare to find a teaching like the sea and Permanence-Bliss-Self-Purity.",
					"Those who smear the Dharma or its seekers are leaky jars even friends don't want.",
					"In this world filled with pain, live by the truth of acting for the sake of others.",
					"To admonish -- be firm, yet kind. Guide the troubled by standing in the same shoes.",
					"Guiding by force or authority may bear fruit in form, but not in substance.",
					"Prayers are answered for sincere deeds. To expect such without effort is wrong.",
					"To be with good friends is nice, but better yet is to think twice about bad friends.",
					"How precious it is to know that now's the chance to polish our Buddha-nature.",
					"Dependable are people who adoringly serve the eternal Buddha.",
					"To deliver others to salvation, guide them as you would your own parents.",
					"<b><i>Kangi</i></b> builds merit, <b><i>gohoshi</i></b> polishes it, and <b><i>otasuke</i></b> does both.",
					"Kind and gentle guidance is the true way to nurture a person's budding faith.",
					"Veering from the path may lead to a mishap and having regrets later on.",
					"Let us never fail to endeavor and pray till the world of joy is realized.",
					"The Mahayana Path is like many coals burning strong when put together.",
					"To endeavor with sincerity each day is to walk on the path to truth.",
					"Do as you say, and say as you do. In this lies the salvation of Oneness.");
				$annotations = array(
					"The love and compassion of the Buddha embrace all, leaving out no one. To guide people to the Teaching means to connect them to this all-embracing compassion. It is a precious way for one to practice compassion.",
					"These words were spoken by Shindoin during his hospitalization. They became the will he left to the followers.",
					"Eliminate your conceit; realize your wrongs, and work to become a person who is not laughed at or pitied by others.",
					"A follower once remarked, \"Our home altar is like a telephone line to Oyasono.\" Indeed it is so.",
					"It is essential to endeavor each day with this <b><i>sono-uta</i></b> in mind. Reflect also on another <b><i>sono-uta</i></b>: \"When one has the Buddha in one's heart, Everything one sees reflects the Dharma.\"",
					"Sincerity means honest, pure, and truthful acts of the body, speech, and mind. Underlying such acts is one's spiritual devotion to the Buddha. (The sincerity coming out of such actions reaches the realm of Buddhas and Dharma-protectors, and leads to spiritual salvation.)",
					"There are three types of belief or faith: conceptual (worship), recitation (chanting and prayers), and practice (the true faith of endeavoring in line with the Teaching).",
					"Fame, status, and material wealth are considered treasures in this world, but they are impermanent and easily lost. A true treasure is the Teaching. Know that the merit attained through practicing the Teaching will enrich even the lives of future generations.",
					"We have probably all experienced the relief of having been able to hold back our anger with prayer and meditation. If, instead, we had let our anger dictate our actions, the consequences could have been disastrous. This is one example of the wondrous power of faith.",
					"The Nirvana Sutra -- a teaching as great as the ocean is vast -- was expounded so that people could overcome all afflictions (delusive passions) and temptations, free themselves from worldly attachments, and find true happiness. Sharing this teaching of truth with others leads to great joy.",
					"Spiritual words are given to help one break free from one's karma, in other words, to change one's fate for the better. Therefore, it is important to listen to them with all one's heart and put them into practice.",
					"Practicing to satisfy our own desires is not true faith. Spiritual words indicate, \"It is by overcoming your strong desires and attachments -- those that are typical of hungry spirits -- that we can save those in the realm of hungry spirits.\" In the same way, by overcoming self-centeredness, we will be able to guide others to the Teaching.",
					"If we are in oneness with the Teaching, every day should be a lucky day. We encounter trouble not because it is an unlucky day for us, but because our effort and sincerity fall short.",
					"The <b><i>Chapter on Chunda</i></b> from the Mahaparinirvana Sutra teaches that when we free ourselves from attachments, we will find nirvana (true happiness).",
					"Just as all rivers flow into the ocean, all teachings eventually merge into great nirvana. How fortunate we are to be part of a teaching of great nirvana." ,
					"If, based on our own judgments, we keep criticizing the Teaching, or our mentors, others in the Teaching will see the wrong path we are on and eventually leave our company.",
					"To practice, faith is to live in joy. If you cannot feel joy, it is because you are attached to your ego. By letting go, you will truly be able to live altruistically, in other words, for sake of others.",
					"Out of our deep concern for others, guidance and admonishment are given to encourage people to transform their faith from human-centered to Buddha-centered. However, when we admonish others, we should not let personal feeling enter into it.",
					"To connect others to the Teaching by taking advantage of one's own status or influence means to connect them in form only. More important is to guide others gently until their faith bears fruit.",
					"Practicing in line with the Teaching will transform one's destiny and lead one to happiness. One cannot have one's prayers answered nor receive divine power simply by wishing for it.",
					"The Nirvana Sutra refers to the Buddha as a good friend. A \"good friend\" can also be a follower who is in oneness with the Buddha. In this sense, those who obstruct one's faith are \"bad friends.\"",
					"This moment will not come around again. Make the most of this chance and turn it into an opportunity.",
					"Those who can turn to, as well as joyously serve, the eternal Buddha as their ultimate spiritual refuge are truly dependable people, who, in addition, look happy.",
					"When you transmit the Teaching to others, show them in same love and respect that you would show to your own parents.",
					"We can build merit through <b><i>kangi</i></b> (giving joyously), make it shine through <b><i>gohoshi</i></b> (serving others), and do both through <b><i>otasuke</i></b> (sharing the Teaching). By devoting ourselves to these three sacred practices, we will truly begin to understand the way to cut karma.",
					"There are three stages of listening to the Dharma. To help those in the first stage (beginners), let us be gentle and kind in our words and attitude, so that their buds of faith will grow.",
					"If you do not practice in line with the Teaching, it is the same thing as straying from the path. Once you are off the path, you may face trouble.",
					"There is no end to the path of faith. We continue to endeavor all our lives. To be able to practice throughout life is a source of joy.",
					"A person's heart of faith cannot burn for very long alone. Just like coals in a fire which blaze when many are joined together, when people sharing the same aspiration come together, their faith with flare up, and the joy of pursuing the Teaching will surge forth even more.",
					"A sacred Buddhist phrase states, \"Idleness leads to death, and diligence to life.\" As the <b><i>Chapter on Bodhisattva Highly Virtuous King</i></b> of the Nirvana Sutra also indicates, willing efforts are in line with truth.",
					"There is a saying, \"Actions speak louder than words.\" In Shinnyo-en, we endeavor to practice what we preach.");
				$index = rand(0, count($sonoutas)-1);
				echo "<p id=\"sonouta-quote\"><em>\"" . $sonoutas[$index] . "\"</em></p>";
				echo "<p id=\"sonouta-annotation\">" . $annotations[$index] . "</p>";
			?>
		</div>
		<h2>Welcome</h2>
			<p>Welcome to the Carson Lineage website. On this site you can view the <a href="/pages/testimonials/">Testimonials</a> from members of our lineage, read translated <a href="/pages/buddhist-stories/">Shinnyo Texts</a>, see <a href="/pages/information/">information</a> about our lineage, and check the schedules for <a href="/pages/schedules/gohoshi_schedule.php">Gohoshi</a> and <a href="/pages/schedules/winter_training_schedule.php">Winter Training</a>.</p>
		<h2>Who are we?</h2>
			<p>The Carson Lineage is a lineage of Shinnyo En, and our lineage parent is Karen Carson. We also happen to be the best lineage. <a href="/pages/information/pages/lineage-information.php">Click here</a> for more detailed information about the lineage such as lineage number or our member roster</p>
		<h2>Site Information</h2>
			<p>There are four main sections of the site:
				<ul>
					<li>The <a href="/pages/testimonials/">Testimonials</a> section allows you to read speeches and excerpts written by our members about how Shinnyo En has changed their lives, the nature of Shinnyo Buddhism, or other topics. Many of the translations are available in multiple languages, including <a href="/pages/testimonials/index.php?searchTerm=&language=English">English</a>, <a href="/pages/testimonials/index.php?searchTerm=&language=Japanese">Japanese (日本語)</a>, and <a href="/pages/testimonials/index.php?searchTerm=&language=Mandarin">Mandarin (中文)</a>.</li>
					<li>The <a href="/pages/buddhist-stories/">Buddhist Stories</a> section contians translated Buddist short stories and allegories. These are not official translations, but they serve well enough to understand. These texts were all translated by Yasou Saitou, one of the members of our lineage.</li>
					<li>The <a href="/pages/schedules/">Schedules</a> section contains schedules pertaining to various Shinnyo En activities. We have the <a href="/pages/schedules/gohoshi_schedule.php">Gohoshi Schedules</a> and the <a href="/pages/schedules/winter_training_schedule.php">Winter Training Schedule</a> on this site. Note that most of the other schedules are not hosted on this site; for these schedules we provide links, but logon information might be required. You can <a href="/pages/information/pages/contact-us.php">Contact us</a> if you need credentials to access these sites.</li>
					<li>The <a href="/pages/information/">Information</a> section contains <a href="/pages/information/pages/lineage-information.php">information about our lineage</a> and information about temple practices. Hover over the "Information" heading on the navigation bar at the top of the page to see the general categories. Alternatively you can search our website for the topic you are interested in by clicking the magnifying glass icon on navigation bar of the page.</li>
				</ul>
			</p>
	</div>

	<!--Includes the footer file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/footer.html";?>

</body>
</html>