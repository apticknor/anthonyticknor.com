<?php
    // hero image - webp
    // Leverage the font-display CSS feature to ensure text is user-visible while webfonts are loading
    // A long cache lifetime can speed up repeat visits to your page. - cache ttl hero, css, js
    // The Critical Request Chains below show you what resources are loaded with a high priority. Consider reducing the length of chains, reducing the download size of resources, or deferring the download of unnecessary resources to improve page load. Learn more.
    // use http2
?>
<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Anthony Ticknor</title>
        <meta name="description" content="Hi. I’m Anthony Ticknor, a web designer and Technology Director at Irish Titan." />
        <link rel="canonical" href="https://anthonyticknor.com" />
        <link rel=stylesheet media="screen and (min-width: 1em)" href="_assets/app.css" />
    </head>
    <body>
        <div class="tier">
            <div class="wrapper wrapper--wide">
                <div class="hero">
                    <picture class="isBlock">
                        <source srcset="_assets/images/hero.webp" type="image/webp" media="(min-width: 600px)" />
                        <source srcset="_assets/images/hero-narrow.webp" type="image/webp" />
                        <source srcset="_assets/images/hero.jpg" type="image/jpeg" media="(min-width: 600px)" />
                        <source srcset="_assets/images/hero-narrow.jpg" type="image/jpeg" />
                        <img class="isBlock" srcset="_assets/images/hero.jpg" alt="Anthony Ticknor" />
                    </picture>
                </div>
            </div>
        </div>
        <div class="tier">
            <div class="wrapper wrapper--narrow">
                <main class="main" role="main">
                    <div class="foreward">
                        <div class="foreward__hd">
                            <h1>Hi. I’m Anthony Ticknor, a web designer and Technology Director at <a href="https://irishtitan.com/">Irish Titan</a>.</h1>
                        </div>
                        <div class="foreward__bd">
                            <div class="content">
                                <p>I believe that that the web shouldn't just look beautiful, it should work beautifully. And that websites should work for people no matter who they are, where they are, or what device is in front of them.</p>
                                <p>Somewhere along the way I started sharing what I've learned in the last two decades. You can follow along with me on <a href="https://github.com/apticknor">Github</a>, <a href="https://twitter.com/apticknor">Twitter</a>, <a href="https://dribbble.com/apticknor">Dribbble</a>, and <a href="https://codepen.io/apticknor/">CodePen</a>.</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="tier">
            <div class="wrapper">

            </div>
        </div>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "givenName": "Anthony",
            "familyName": "Ticknor",
            "name": "Anthony Ticknor",
            "birthdate": "1979-11-05",
            "homeLocation": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Minneapolis",
                    "addressRegion": "MN"
                }
            },
            "affiliation": {
                "@type": "Organization",
                "name": "Irish Titan"
            },
            "jobTitle": "Technology Director",
            "image": "https://anthonyticknor.com/_assets/images/me.jpg",
            "url": "https://anthonyticknor.com"
        }
        </script>
    </body>
</html>
