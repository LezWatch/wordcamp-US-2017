Proposal
Topic: Lies, Damn Lies, and Statistics

Description: Using WordPress to queery data and generate statistics based on the entire history of television and understand the impact of fictional death in the media on real life people.

Presenters: Tracy Levesque & Mika Epstein

Overview: This presentation will discuss the complications of using WordPress to manage a site filled with cross-related data, in order to understand the social and psychological impact of the Bury Your Gays trope on TV. By using WordPress, we were able to easily output the data, but building out a site without planning what data will be captured leads to headaches.

Target Audience: Uhhhh Developers and people who love dead people?
Outline
Intro

Brief history of the dead lesbian trope.
How Tracy and Mika met (WordPress!)
The death of Shay on Chicago Fire
Why they made lezwatchtv.com
All existing show data out there was analog (articles)
The world needed all the LGBT women characters and their shows in a DB with lots of metadata and taxonomies!
What the site needed to cover
Is a show worth watching?
Are the queer characters/story lines in every season?
Are there any particular super gay episodes?
First version had some data and a custom version of cmb1
Shows with basic info
Characters with actor, image, and description
Cross relate shows as post meta on characters 
Cross relate characters by looking for all chars with post meta matching the show id 
Second version, same code around a new theme
Mobile Responsiveness
AMP
Template parts
DRY code
Third Version using cmb2
Two Actresses, One Character
Adding in two people in one text field is okay, but adding it as an array is better
Multiple shows for the same character...
Multiple deaths (Sara Lance came back to life)
These tools needed cmb2
Data explosion...
Lexa
Autostraddle made a list of all the dead lesbians 
It started at 65 and blew up to 16x! 
Suddenly there was access to an analog, straight list of more data!
And billboards
Stats
How do you get the raw stats out? 
Taxonomies vs Custom Post Meta
Using taxonomies for sexuality, gender identity, tropes, and cliches is easy. 
ten characters marked as bisexual out of 100 total is easy - Taxonomy!
How many died in 2000 is harder - custom post meta
Post meta is not always easy to get at quickly
Percentages and live data update can be computationally expensive
Making it pretty with Chart.js and templates
Other Features
Cache as fast as you can (Object Caching only via Memcached Redux)
Anecdote: The site is slower on localhost then it is on the live site
JSON REST API - Querying dead queers from your own site via plugins
The Future
Exportable csv!
Now everyone can use the data and generate their own sites and cross relate
Summary
Lez Watch ... The database of queer women 

more than just lesbians
How do you count transgender characters? 
Coach Beiste! Straight woman became a straight man
Beverly Harris - roseanne's mom on that tv show - is straight until a big queer reveal! Only we find out at the end she was straight all along and it was just a story written by Roseanne.
Jadzia Dax - the trill and the host - is she gay?
Gender swapping aliens on the x-files
Gay women who become straight men
Straight women who realize they're gay ... Are they bi?
Bi-erasure! Shows from 1980 to the early 2000s don't talk about bisexuals.
How many bisexuals end up with women? Is that less acceptable?
Auuuuuuuugh
Conclusion
What does it all mean?

there is an impact of seeing all of 'your' people dead on tv
The tropes are harmful
People didn't have access to this data
claiming things without data proof is hard
The data was spread out
16.7% percentage of all LGBT females on tv die.

End with a brief in Memoriam slideshow with the song.
