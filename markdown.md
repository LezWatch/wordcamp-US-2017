## Bury Your Queers

Invest in Bulletproof Vests

Note: On television, being a queer female is more deadly than being on the Titanic. Since 1971, when the first lesbian was killed on screen, they've been shot, stabbed, blown up, hit by cars, and poisoned in massive numbers. An incredibly small percentage get happy endings. In fact, in 2016, over 40 were killed when, on average, the number is usually closer to 5 a year. 



## How We Met

WordCamp San Francisco 2013

Note: In 2013, Tracy Levesque and I met at WordCamp SF. In 2014, she and I were at the same hotel for the Community Summit plus Camp, and somehow got to talking about TV in the back of a van. Shay, from Chicago Fire, had just died, and Tracy lamented that we should have some database that listed all the lesbians on TV, and the shows, with if the show was worth it, how good representation was, and of course ... we should power it in WordPress.



## Enter LezWatchTV.com

The Greatest Database of Queer Females. Ever.

Note: So we did it. All the existing show data out there was analog, found scattered amongst articles, wikipedia pages, and one-off fan sites. We scoured the Internet and collected as much as possible, because the world needed all the LGBT women characters and their shows in a DB with lots of metadata and taxonomies. But it wasn't that simple. It never is.



## We Needed to Cover...

* Worth Watching?
* Queer Storylines
* Super Queer Episodes

Note: For every show, we realized we needed to do more than just collect the data, we had to make it meaningful. So. How did we determine a show was worth watching? We made a 3-tier, 5-point scale for screen time, realism, and 'good for queers.' Then we gave everything a rating, a simple thumbs up, down, or eeeeeh. Finally we added in extra content for things like the best episodes, or the seasons, so if you only watched a show for queers, you'd know which ones to tune in for.



## Version One: CMB1-Fork

We All Start At The Beginning

Note: Our first iteration of the site had shows and characters with basic info. We only had about 50 shows, but quickly we sorted out how to cross-related two custom post types. One for shows, one for characters. The characters had a dropdown to say which show they belonged to, and we could cross-relate that by matching show IDs... But that got super messy and complicated, super fast. And there were some issues with the design that made responsive and AMP difficult. Plus it had repetitive code. So...



## Version Two: Same Code, New Theme

A Fresh Coat of Paint

Note: The primary goal of the redo was mobile first and code updatability. The code was broken out into template parts, with a lot of consideration to DRY code. Things were hookable, repeatable, echo-able, and so on. It also had to be portable, so when we moved to another new theme, we could swap it out as painlessly as possible. That meant moving code from the theme to a plugin.



## Version Three: CMB2 

Sara Lance Hates Me

Note: Then something happened ... We had filled in most of the shows we knew well, and I'd started to collect random ones from Wikipedia. And we found the horrible world of multiple actors with one character. Adding in two people in one text field was okay, but adding it as an array is better because it became searchable in a more robust way. But then Sara flippin' Lance decided two actors wasn't enough. No, she had to be on multiple shows, in multiple roles, AND die and be resurrected. We needed repeatable fields AND groups just because she makes me cry.



## The Unexpected

March 3rd, 2016 - Lexa

Note: A moment please for the death of Lexa on the 100. See... Queer women on TV had been dying all over, but never before had it happened while a show was simultaneously touting how in touch it was with the queer community, how much it cared, and how much it wanted us to be happy. Yeah, the 100 baited their fans and paid an unexpected price.



## LGBT Fans Deserve Better

Lexa Deserved Better (billboard image?)

Note: To put it simply, the fans lost their MINDS. It prompted Autostraddle to make a list of all the dead lesbians, starting with 65 and I think it's around 180-something now. We have closer to 300, but because of this, there was suddenly access to more data. And yes, we added them all, with their dates of death. While all that was going on, the fans bought billboards, ads, and made a convention called ClexaCon. They were not going quietly.



## Statistics

(Image of the stats?)

Note: Meanwhile, we'd discovered that with the volume of data we had, we needed to shape it into something meaningful. The raw stats had to be available somehow. I knew from experience that calculating percentages pie charts can be computationally expensive when you do it live, but I also knew I could make it pretty with bar charts and graphs if I used Chart.js and templates.



## Collecting the Right Way

Taxonomies vs Custom Post Meta

Note: The challenge with making those stats was that we had to generate them in a way that was easy to process. Some of the data, like sexuality, gender identity, tropes, and cliches, were all in custom taxonomies. That meant to sort out that there were, say, ten characters marked as bisexual out of 100 total? Super easy. But we'd also stored date of death as a custom post meta, so getting a list of how many characters died in 2000 was a lot harder. Post Meta is harder to get at and process en masse.



## Improvements

Adding New Features

Note: Very quickly we had to look into caching. Right now, we're using Varnish with an Nginx proxy and object caching via Memcached Redux. This has the funny effect of making the site way faster live that it is on localhost. Once we got the caching in place, and wrote our loops and stats code in a DRY fashion, we were able to move on to the next step.



## RESTful Queerys

Powering Bury Your Queers

Note: Yes, using a REST API to power a Bury Your Queers plugin and Amazon Alexa Skill IS funny. You can laugh. But really, the API let us create a service that didn't put too much stress onto our server. I first wrote a plugin that would tell you the last dead queer female, but also you could use shortcodes and widgets to say who died on what day. The Alexa Skill? You can ask her who died last or who died on a day. I'm working on the reverse, but apparently "Hey Alexa, ask Bury Your Queers when did Lexa die?" is hard. She can't say Lexa. Who knew?



## The Future

Planning For Consumption

Note: We have plans for the future. I've managed to export the stats into a JSON output, and I want to have that be easily portable to a CSV so people can download the database and use Excel or whatever to generate their own useful groups of data. This would let researchers and newspapers collect data and make MEANINGFUL articles with real data. We wouldn't be guessing anymore. We'd KNOW.



## "Lez"Watch TV

The database of queer women 

Note: If you can't tell, it's more than JUST lesbians. Once we started adding in trans women, we hit a snag. Do we add queer men who were often mis-identified as lesbians? This happened in the L Word. In the end, we decided queer 'female' meant anyone who at some point in their life identified as non-male, cisgender or otherwise. We added in more options for gender identity, as well as sexuality, and the site kept growing.



## The Meaning of Queer

When Queer Isn't Real

Note: But this caused another problem. And no, I'm not talking about those characters for whom queerness is 'just a phase' or 'a college experiment.' No. I mean Beverly Harris - Roseanne's mom on the same named TV show. Beverly was straight until a big queer reveal! Only we found out at the end she was straight all along and it was just a story written by Roseanne. The REAL queer was her sister Jackie! Oh and this year? 2017? They retconned the retcon. How do you record THAT!? 



## Sci-Fi Weirdness

Who Is a Person?

Note: Don't forget things like Jadzia Dax, who was queer, and Ezri Dax, who wasn't except in an alternate timeline. They both were different people with the same 'Dax' symbiote on DS9. It's a Star Trek thing. Don't worry if you don't watch it. The point is Jadzia died, and Dax lived, moving into Ezri. Ezri was straight. Mostly... Kind of. And that brought up another problem!



## Bury Your Queers

The Meaning of Death

Note: This is one we don't have an answer to quite yet but it's a question as to what does 'dead' mean. Jadzia Dax and Ezri Dax were clearly different people. But what about San Junipero? That's an episode of Black Mirror, where in the lesbians are living their lives in virtual reality, die in the 'real world' and live on happily ever after... In VR. Are they dead? Is Bill Potts from Doctor Who dead? She's now a shape-changing liquid alien.



## Death Is In The Mind

I Live, I Die, I Live Again

Note: Effectively, we're struggling with what happens when people who regenerate die? And the time-traveling Sara Lance... well she's just Schrodinger's bisexual. She's alive or dead at any one point in time, and spends her days traipsing through time sleeping with women. Which is amusing but so, so hard to codify.



## The Mystery of Gender

Aliens and Bi-Erasure

Note: Let's not forget the gender swapping aliens on the X-Files, or gay women who become straight men, or straight women who realize they're gay ... Are they bi? We ended up going with "Whatever the character says on screen." but not all shows answer the question. Like the GenderQueer. Can you be in a homosexual relationship if you don't identify as male or female? And yes, Bi-erasure! Shows from 1980 to the early 2000s don't talk about bisexuals. What about how many bisexuals end up with women? It's a pretty low number, by the way.



## AUUUUUUUUUUGH

AAAAHHHHHHHHHHHHHHHHHH

Note: AUGH!



## Version Four

New Theme, New Features

Note: We didn't let all that stop us. All summer tracy and I slaved at a new theme that did things faster, better, and more UX attractively. We took into account speed, faceted search, accessibility, images, load time, memory, and everything in between to make the site better. In the middle of all that, the Wynonna Earp account tweeted about us, so I found out where we reaaaly needed to improve things.



## Conclusion

What Does it All Mean?

Note: Take a deep breath. Okay. First of all, there is an impact of seeing all of 'your' people dead on tv. It hurts. A generation of TV watching lesbians were scarred over and over again by seeing their characters, the ones who felt like them, die. Furthermore, MANY, but not all, tropes are harmful. Still, claiming things without data proof is hard, and people did not have access to this data previously. But now we do.


## Bury Your Queers

Over 15% Die on TV

Note: Over 15% of queer females die on TV. Sadly I can't get the stats to tell you what the percentage is of queer females to non-queer on TV globally is. Even IMDB doesn't have that data in a parseable format. I tried. But I do know that a higher percentage of queer females characters die on MOST popular shows on TV right now. Like The Walking Dead. And I know that trans women are dying in record numbers in real life. And I can't help but see these things as related.



## I Will Remember You

[Video]

Note: So my friend and I made a site where we try to make sense of the deaths of lesbians, forge statistics, and publish a narrative of television and how it represents us. Because we deserve better.