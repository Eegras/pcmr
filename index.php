<?php
// How this works 
// Include this line in _everything_.
include('./global/pcmr.class.php');
// This line init's the pcmr class.  First argument is a bitmask for what you want on the page
// PCMR_HEADER is the header,
// PCMR_FOOTER is the footer,
// PCMR_NAVIGATION is the nav
// The second arg is what sidebar you want to see.  This is in ./global/sidebar<THATSTRING>.php
//    If blank, no sidebar.
$c = new pcmr(PCMR_HEADER+PCMR_FOOTER+PCMR_NAVIGATION,"Subreddit");

// This is heredoc fomat.  Super simple way to make a string without worrying about 
// escaping quotes and that.  Heredoc begins with <<<STRING and ends with STRING; AS THE FIRST THING ON A LINE
// Set that to a variable and call the last function.
$content = <<<HTML
         <h1>
            WHY PC?
         </h1>
         <b>
            Computers are great all-purpose machines, and here's  why: 
         </b>
         <ul>
            <li>Complete controller compatibility</li>
            <li>Possibility of use for work, education, or entertainment</li>
            <li>Faster than a PS4 or Xbox One at the same price</li>
            <li>Cheaper games (Steam, GOG, Humble Bundle)</li>
            <li>More exclusives</li>
            <li>Healthy independent developer scene</li>
            <li>Tons of free and free-to-play games</li>
            <li>Free abandonware titles</li>
            <li>Larger game library, ten-fold</li>
            <li>Emulates console games for free</li>
            <li>Cheaper hardware</li>
            <li>Big Picture mode for couch gaming</li>
            <li>Easier to repair</li>
            <li>Easier to upgrade</li>
            <li>Better price to performance ratio than consoles</li>
            <li>Higher framerates (smoother)</li>
            <li>Higher in-game resolution (sharper)</li>
            <li>More graphical detail (immersion)</li>
         </ul>
         <b>
            You're probably going to own some sort of computer anyways, so why not pay a bit more on top to make it a gaming rig? 
         </b>
      </div>

      <br>
      <br>
      <br>

      <div class="content" id="gettingstarted">
         <h1>
         GETTING STARTED
         </h1>
         <p>
            <h2>Welcome to the world of PC gaming. Above, we listed some of the reasons why PC gaming is generally better than console gaming. Now, it's time to dive in!</h2>
            The first thing to do when it comes to PC gaming is to get a computer. Remember, <b>it doesn't matter how good your computer is - you're still part of the PC master race</b>.
            The most common argument against PC gaming is that of price. There is a common misconception that you need to spend upward of 1500 USD to achieve a barely playable experience - but that's not true. No matter what your budget, there's a PC for you. I'll go into more detail about this later. 
         </p>

      </div>
HTML;


// This wraps it all up in nice bow and sends it to the browser.  Simple.
$c->displayContent($content);

