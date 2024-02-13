ADMIN WEBSITE & TEMPLATE:
My admin page is made with code and css provided by school, and "user" webside is template i found.

CODING SKILL:
This project reflect my code skill after studying for 1 year. 
This is everything i know so far
Html, css, JavaScript, PHP, (C-programming) and Database basics are completed.
Grading was 1-5 with deadline of 14days -> completed in 2 days with top grade "yey".

FAILED AT:
Im still disappointed for failing at password hash. I was upset cause it just looks like "garbage website" when logging in.
Safari kept buggin with its "suggest strong password" feature.
It automatically filled the form's pw field and would be just stuck / bugged.
I tried using a JavaScript to hash the password "visually" "to appear hashed", but safari smelled right though my bluff.
In a way i made it work ( with all other browsers) but since one browser was "stuck & broken" I considered it a fail -> backtracked few stepps and gave up. 
I come back stronger another day to fight with safari "boss".

HARDEST TASKS:
Hardest two things were figuring out how to link databases and code the "chat" page.
Database was challenging because process changed the strucure and logic across multiple files inclouding admin tools.
Figuring out how to store data into two seperate databases was interesting. 
Understanding how to use the mutual PRIMARY KEY, took a while though. 
I understood that removing data would also have to be done using same PRIMARY KEY from linked DB's. 
Otherwise one DB would be filled with junk and cause issues later on etc.
I realized somehow that it also made a difference in which order the data was to be remoevd from the linked DB tables. 
I think i got lucky with a hunch to noticed this.
Basically -> the data had to be removed from DB's linked via same PRIMARY KEY in reverse order. 
I quess linked DB's are sort in line chained with one another by a "single path / chain" or something...
Its not about them both being linked to "each other" but it also has an order too.
So in orer to code the correct remove user file (for admin too) it was nesessary to know the "order" in which the linked tables were coded to begin with.
This was epicly satifying to figure out.

MY OWM SOLUTIONS:
I felt so disappointed about failing to hash the pw though, that I had to make up for it with some other feature.
Exam instruction asked -> to move admin pagefiles into its own folder ->  making it secure/seperate it that way (or perhaps its a correct practise) idk.
But I decided to make my own solution and coded an exception into the login process file which is normally used for checking users existance in DB
when trying to log in.
I added an exception for a Admin -u & -p there which would trigger a dirrent path.
Code first checked for the exception -> only after continued to the regular process. 
However if u- & -p match the Admin -> it redirects user to admin page. 
I realized at some point that the entire login process was pointless because one could just type the name of "next page" -> 
skip registering / logging in, all together.
This meant that admin exception i added was completely pointless.
Solution came quickly tohugh. Added the code to create a "session" before user is forwarded and making next page check that "user session matched".
