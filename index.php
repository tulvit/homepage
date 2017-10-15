<?php date_default_timezone_set('Europe/Moscow'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vitaly Tulin a/k/a tulvit | Homepage</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="scripts/jquery.powertip/css/jquery.powertip.min.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="scripts/clipboard.js-master/clipboard.min.js"></script>
  <script src="scripts/jquery.powertip/jquery.powertip.min.js"></script>
  <script src="scripts/script.js?03052017"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21523026-20', 'auto');
  ga('send', 'pageview');

  </script>
</head>

<body>
<header>
  <div class="content">
    <div class="avatar">
      <a href="/">
        <img src="files/avatar.jpg" class="avatar" alt="avatar">
      </a>
    </div> <!-- /.avatar -->
    <div class="info">
      <div class="name">
        <h1>Vitaly Tulin</h1>
        <audio id="name-sound" src="files/name.mp3"></audio>
        <div class="play"></div>
        <div class="clearfix"></div>
      </div> <!-- /.name -->
      <div class="nickname">a/k/a tulvit</div>
      <div class="email">e-mail: <span id="email" data-clipboard-text="me@tulvit.net" title="copy to clipboard">me@tulvit.net</span></div>
    </div> <!-- /.info -->
    <div class="clearfix"></div>
  </div>
</header>
  
<nav>
  <div class="content">
    <ul>
      <li><a class="about" href="#about">About</a></li>
      <li><a class="links" href="#links">Links</a></li>
      <li><a class="projects" href="#projects">Projects</a></li>
      <li><a class="opensource" href="#opensource">Open Source</a></li>
      <li><a class="testimonials" href="#testimonials">Testimonials</a></li>
      <li><a class="contact" href="#contact">Contact</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
</nav>
  
<main>
<?php
if (!empty($_POST['submit']) AND
    !empty($_POST['email']) AND
    !empty($_POST['subject']) AND
    !empty($_POST['message']) AND
    !empty($_POST['protection']) AND
    $_POST['protection'] == 'ok') {
  $to = 'me@tulvit.net';
  $from = htmlspecialchars(stripslashes(trim($_POST['email'])));
  $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
  $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
  $headers = 'From: tulvit.net contact form <noreply@tulvit.net>'. "\r\n";
  $headers .= 'Reply-To: ' . $from . "\r\n";
  $status = mail($to, $subject, $message . "\n-----------\nReply to: " . $from, $headers, '-fme@tulvit.net');
  if (!empty($_POST['sendcopy'])) {
    $headers = 'From: Vitaly Tulin <' . $to . '>' . "\r\n";
    $to = $from;
    $message .= "\n\n\n--------------------------------------------
                 \nIt's a copy of an email you've sent me via contact form on http://tulvit.net
                 \nThank you! I'll reply as soon as possible!";
    $status = mail($to, $subject, $message, $headers, '-fme@tulvit.net');
  }
  if ($status === FALSE) {
 echo <<<HTML
<section id="emailsent" class="error">
  <div class="content">
    <h2>Your e-mail has NOT been sent!</h2>
    <p>Something went wrong.</p>
    <p>Please, try again or contact me via <a href="#links">social sites</a>.</p>
  </div>
</section>
HTML;
  }
  else {
echo <<<HTML
<section id="emailsent" class="ok">
  <div class="content">
    <h2>Your e-mail has been sent!</h2>
    <p>Thank you!</p>
    <p>I'll try to reply ASAP. Usually it takes no more than 24 hours.</p>
  </div>
</section>
HTML;
  }
}
?>
<section id="about">
  <div class="content">
    <h2>About</h2>
      <p>
        <strong>Location:</strong> St. Petersburg, Russia <em>(gmt&nbsp;+3,&nbsp;local&nbsp;time&nbsp;<?php echo date('h:i a'); ?>)</em><br>
        <strong>Languages:</strong> Russian (native), English (intermediate), French (beginner)<br>
        <strong>Education:</strong> M.S. in Computer Science
      </p>
      <p>
Over 10 years in a web industry. Hundreds of sites, dozens of niches.
Not a full-time worker, more like an entrepreneur, an independent web developer,
a freelancer. Always quite free and on vacation. Always quite busy with no weekends.
At the same time.
      </p>
      <p>
Full stack, literally. From a pure idea, and up to a server administration,
front/back end development, content management, SEO/SMM, monetization, etc.
Or, in other words, full product lifecycle, where, for instance, server programming
and FB fan page maintenance - are just a two different sides of the same coin.
      </p>
      <p>
The obvious disadvantage of this attitude is that I'm not a real "pro" in any given field,
not even close. And the advantage is that I can solve a wide range of problems,
can think a few steps ahead, can see a whole picture and understand a real needs.
      </p>
      <h3>Buzzwords</h3>
      <p>
Linux, Apache, Postfix, MySQL, C++, PHP, JavaScript, jQuery, Ajax, JSON, CSS, Sass, BEM,
SMACSS, HTML, XML, SVG, Drupal, WordPress, Joomla!, phpBB, SMF, drush, git, twig, xdebug,
memprof, PhantomJS, wkhtmltopdf, FFmpeg, AdSense, AdWords, Amazon, ClickBank, Chitika, MediaNet, Facebook, Twitter,
Tumblr, Youtube, affiliate marketing, SEO (black/grey/white hat), SMO/SMM, design,
responsive/adaptive design, usability, UX, blogging, management, support ... you name it
      </p>
      <h3>Preferences</h3>
      <strong>OS:</strong> Ubuntu (desktop), Debian (servers), Windows (Photoshop)<br>
      <strong>Stack:</strong> LAMP<br>
      <strong>CMS:</strong> Drupal<br>
      <strong>IDE:</strong> Eclipse, CodeLite, Geany<br>
      <strong>Version control:</strong> git<br>
      <strong>FTP manager:</strong> Nautilus, FileZilla<br>
      <h3>Misc</h3>
      <strong>Hobbies:</strong> fishing, music (button accordion, piano, harmonica), art (drawing/painting)<br>
      <strong>Games:</strong> Texas hold'em, chess, Quake<br>
      <strong>Music artists:</strong> Frank Sinatra, Ray Charles, Bryan Ferry, Michael Jackson, Queen, Pet Shop Boys, Elton John, Kylie Minogue, Boney M, Army of Lovers, Aqua, Miss 600, Berryz Koubou, Mireille Mathieu, Joe Dassin, Patricia Kaas, Francoise Hardy, Zaz, Alizée<br>
      <strong>Bad habits:</strong> pipe smoking<br>
    <div class="totop"></div>
  </div>
</section>
  
<section id="links">
  <div class="content">
    <h2>Links</h2>
    <section>
      <h3>social</h3>
      <ul>
        <li>
          <a href="https://www.linkedin.com/in/tulvit">linkedin.com/in/tulvit</a><br>
          <em>Not frequent here.</em>
        </li>
        <li>
          <a href="https://www.facebook.com/tulvit">facebook.com/tulvit</a><br>
          <em>Not a frequent user here either.</em>
        </li>
        <li>
          <a href="https://vk.com/tulvit">vk.com/tulvit</a><br>
          <em>Trying to reply within 24 hours.</em>
        </li>
        <li>
          <a href="http://tulvit.deviantart.com/">tulvit.deviantart.com</a><br>
          <em>Art related account.</em>
        </li>
        <li>
          <a href="http://tulvit.tumblr.com/">tulvit.tumblr.com</a><br>
          <em>Art related account.</em>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCpIf0phIUpSVEVY7L-aQrcg">youtube.com</a><br>
          <em>Art related channel.</em>
        </li>
      </ul>
    </section>

    <section>
      <h3>web development</h3>
      <ul>
        <li>
          <a href="http://stackoverflow.com/users/1003329/tulvit?tab=profile">stackoverflow.com</a><br>
          <em>Answering on a webdev related questions.</em>
        </li>
        <li>
          <a href="https://github.com/tulvit">github.com/tulvit</a><br>
          <em>Managing several Open Source projects.</em>
        </li>
        <li>
          <a href="https://www.drupal.org/u/tulvit">drupal.org/u/tulvit</a><br>
          <em>Participating to the Drupal community.</em>
        </li>
        <li>
          <a href="http://www.upwork.com/o/profiles/users/_~013ddb6375cf020ef5/">upwork.com</a><br>
          <em>Working here as a freelancer.</em>
        </li>
      </ul>
    </section>

    <section>
      <h3>sub.</h3>
      <ul>
        <li>
          <a href="http://blog.tulvit.net">blog.tulvit.net</a>
          <br>
          <em>Personal blog in Russian.</em>
        </li>
        <li>
          <a href="http://allmydrawings.tulvit.net">allmydrawings.tulvit.net</a><br>
          <em>"All my drawings" project.</em>
        </li>
        <li>
          <a href="http://demo.tulvit.net">demo.tulvit.net</a><br>
          <em>Demos of Open Source projects.</em>
        </li>
        <li>
          <a href="http://dev.tulvit.net">dev.tulvit.net</a><br>
          <em>Server for a development purposes.</em>
        </li>
      </ul>
    </section>
    
    <div class="justify"></div>
    <div class="totop"></div>
  </div>
</section>
  
<section id="projects">
  <div class="content">
    <h2>Projects</h2>
    
    <h3>SComedy</h3>
    <div class="project">
    <a href="http://scomedy.com"><img src="files/scomedy.png" alt="SComedy"></a>
    <div>
    <div><a href="http://scomedy.com">scomedy.com</a></div>
    <p>
    The home of stand-up comedy on the Internet.
    Great opportunities for starting comedians to gain audience and popularity.
    </p>
    </div>
    <div class="clearfix"></div>
    </div>
    
    <h3>WannabeArtists</h3>
    <div class="project">
    <a href="http://wannabeartists.com"><img src="files/wannabeartists.png" alt="WannabeArtists"></a>
    <div>
    <div><a href="http://wannabeartists.com">wannabeartists.com</a></div>
    <p>
    Education and improvement oriented social network and blog platform for beginner artists.
    </p>
    </div>
    <div class="clearfix"></div> 
    </div>
    
    <h3>EnglishNode</h3>
    <div class="project">
    <a href="http://englishnode.com"><img src="files/englishnode.png" alt="EnglishNode"></a>
    <div>
    <div><a href="http://englishnode.com">englishnode.com</a></div>
    <p>
    The place where non-native English learners master their English.
    Education social network with tons of helpful tools.
    </p>
    </div>
    <div class="clearfix"></div>
    </div>

    <h3>WISCA</h3>
    <div class="project">
    <a href="http://wisca.ru"><img src="files/wisca.png" alt="WISCA"></a>
    <div>
    <div><a href="http://wisca.ru">wisca.ru</a> <em>(Russian)</em></div>
    <p>
    Web Interface System Content Analysis.
    Automated content analysis system employing different methodologies.
    Co-owner, developer.
    </p>
    </div>
    <div class="clearfix"></div>
    </div>
    
    <div class="totop"></div>
  </div>
</section>
  
<section id="opensource">
  <div class="content">
    <h2>Open Source</h2>
    <p>Soon...</p>
    <div class="totop"></div>
  </div>
  </section>
  <section id="testimonials">
  <div class="content">
    <h2>Testimonials</h2>
    <div class="testimonial">
      <p>
Absolutely awesome to work with! Competent, fast and efficient. I'd recommend Vitaly any day. He went well beyond what was required and communicated his every move so there was no confusion. His instructions were easy to follow despite my lack of programming knowledge. Count me impressed!
      </p>
    </div>
    <div class="testimonial">
      <p>
Vitaly was fast and expertly finished the job. It was an urgent project and Vitaly did everything I needed him to do without any problems. I plan on hiring him again for future projects.
      </p>
    </div>
    <div class="testimonial">
      <p>
Vitaly is one of the BEST programmers I've had the pleasure of working with. He is very knowledgable and skilled in javascript. Unlike many workers who just want to get paid and will do the bare minimum job, he went above and beyond for this project and gave me much more help and support than I asked for. He tested his completed scripts multiple times. He made sure I was 100% satisfied with the project before even asking for payments. Highly recommended!
      </p>
    </div>
    <div class="testimonial">
      <p>
The first 3 freelancers that I hired to do my project failed. Vitaly succeeded.
 He has a great attention to details and the skills to implement.
 He is very honest and clear about what he does know and does not know. Very refreshing. 
 
 I highly recommend using Vitaly.
      </p>
    </div>
    <div class="testimonial">
      <p>
Vitaly Tulin is the best contractor I have had the pleasure to work with. He offers the skills and professionalism necessary to complete the task on-time and exceeded my every expectation. Great job... well done!
      </p>
    </div>
    <div class="testimonial">
      <p>
Vitaly was very flexible and willing to try different things until I was happy. Great guy.
      </p>
    </div>
    <div class="more">
      <a href="http://www.upwork.com/o/profiles/users/_~013ddb6375cf020ef5/">more on UpWork</a>
    </div>
    <div class="totop"></div>
  </div>
  </section>
  <section id="contact">
  <div class="content">
    <h2>Contact</h2>
    <form method="POST">
     <input type="hidden" name="protection" required>
     <label>Your e-mail<span class="asterisk">*</span></label>
     <input type="email" name="email" required autocomplete="email" placeholder="me@tulvit.net" spellcheck="false">
     <label>Subject<span class="asterisk">*</span></label>
     <input type="text" name="subject" autocomplete="off" required placeholder="YOU HAVE WON £500,000.00">
     <label>Message<span class="asterisk">*</span></label>
     <textarea name="message" required placeholder="..."></textarea>
     <input type="checkbox" name="sendcopy"><label class="checkbox">send me a copy</label>
     <input type="submit" name="submit" value="Send">
    </form>
    <div class="totop"></div>
  </div>
  </section> 
  </main>
  
  <footer>
  <div class="content">
    &copy; <?php echo date('Y'); ?> <a href="http://tulvit.net">tulvit</a>
  </div>
  </footer>
</body>

</html>
