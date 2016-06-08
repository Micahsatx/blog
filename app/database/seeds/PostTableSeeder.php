 <?php

Class PostTableSeeder extends Seeder {

	public function run()
	{

		$post = new Post();
		$post->id = '1';
		$post->user_id = User::first()->id;
		$post->content = 'Recently Emily left for a trip to New York for a week.  During that week Dex staying with my mom during the day and i picked him up after i got out of school.  Things went pretty well at first.  The second day he had a hard time going down for a nap and an even worse time going to bed for the night.  We had to walk from room to room and open every door to look for Mom, Mimi, and Poppi.   After going through every room, the backyard, closets, and even the front porch he finally accepted going to bed.   It wasnt long after that he began screaming for Mommy.  Since i put him to bed each night this was very abnormal.  Eventually he went to sleep and life went on.  Skip forward a few days and the return of Mom.  Now anytime either of us leaves the room fear strikes him.  It\'s as if we are leaving and never returning.  The poor kid.  I feel terrible.  It\'s not like you can reason with a 2 year old either.  Needless to say this week is going to be very difficult.  This morning when i left for school he balled for a good 15 minutes.  Usually im fine with this kind of thing.  But rarely does he freak out because of me leaving.  Usually it\'s only when mom leaves.  Now that he is doing it when I leave is is difficult.  This phase strikes right as im struggling in class and things are due.  How do you reason with a 2 year old?  I will never abandon you my son.  Im sorry this week is going to be rough.  I will come in each night and tell you im home and i love you.';
		$post->title = 'Seperation Anxiety';
		$post->save();

		$post = new Post();
		$post->id = '2';
		$post->user_id = User::first()->id;
		$post->content = 'Dear Dex, a big thing i wanted to talk about in the letter is how we have started swimming.  You are now 22 months old as of June 2016 and summer is about to start.  My mom bought us a pool membership but the pool hasn\'t quite opened yet.  So we have been going to the neighbors house to swim in the pool in their backyard.  For the record you call her Ms Jewjew..  her real name is Julia Ionescu.  My childhood best friends mom and our next door neighbor growing up.   So we have gone to the pool twice just me and you.  You have gone a few times with mom and we have gone to splash pads and water parks at SeaWorld at least 10 times.  You love the water.  Its pretty funny watching you learn.  You just recently learned while wearing your hat water wont get in your eyes so you are more willing to stand in waterfalls and sprayers and stuff.  But the other day we went to the neighbors pool.  in 2 days you jumped off the wall about 100 times.  out of those 100 times only once would you “jump” to me without holding my hands.  i don\'t know that i would actually call it jumping but we are getting there.  its more of a graceful fall.  yet every single time i make sure you head goes under or at least your face gets wet.  you are getting so much better.  its the first step and you are rocking it.  iv waited to teach my child to swim for many many years and iv looked forward to it so much!   my goal is to have to swimming alone by the end of next summer.  right after your 3rd birthday.   So i hope it works!  with how much me and emily love the pool you are bound to be there a lot and hopefully our enthusiasm rubs off on you.  Another thing about swimming i wanted to mention was about saving peoples lives.   In my life i have probably saved 10-20 people from drowning.   While lifeguarding, swimming, playing, vacationing.  you name it someone is bound to get into some trouble and hopefully there is a strong swimmer there.  well thats been me.  never gave it much thought afterwards but its a difference in life and death.  at least one person would have died had i not been there yet i never gave that much thought.  after it happened i would always just brush it off as something that happens and it didn\'t stick in my head.  but the other day you were playing on the edge of a hot tub and you fell into the pool.  i jumped out of the hot tub and into the pool to grab you.  You were under water for about 4 seconds.  i brought you up and you cried for a good 5 minutes.  yet you held your breath and didn\'t choke.  its hard to describe but i was so proud of you.  so proud.   but afterwards it hit me that had i not been there or had circumstances been different you could have died.  the impact of that hit me and really stayed on my mind for a few days.  which is weird because when it would happen to someone other than my child it would be on my mind for like 30 seconds.  So i have officially saved your life for the first time.  I doubt ill keep a running total but still.  Mom laughed at me saying thats the job of a parent but by the time you are reading this you will be old enough where i can say without consequence.  You owe me.  1 free life.  If you don\'t save my life save somebodies.  pay it forward.  i hope its a Johnson but as with me it probably won\'t be for a very long time.  So be prepared for what that does to you mentally.  ';
		$post->title = 'Learning to swim';
		$post->img = '/img/swimming.jpg';		
		$post->save();


		$post = new Post();
		$post->id = '3';
		$post->user_id = User::first()->id;
		$post->content = 'After graduating from Codeup i will be looking for a job.  Albert Swanter, a good family friend, runs a company called Bohemian.  Yet this is a small startup.  The pay is good and the opportunity to learn is abudant yet the benefits suck.  There is a tradeoff to working at a legacy company.  Being a diabetic and Emily being pregnant health insurance benefits are very important.  Especially since at most companies benefits dont kick in for 90 days.  Which means right around the begenning of november is when i would be eligable to apply.  Yet our child is due in late november.  So find a job fast, make sure they offer health insurance with open enrollment, and make sure its a place where i will not just be thrown into a fire all alone.  Bohemian how ever pays well, i can work from home, and id be working with a patient boss who highly values developing junior dev\'s.   But no insurance.   So with the pay we would be in a tax braket where we dont qualify for any sort of government assistance.  That means we would end up paying $500+ a month for insurance and $200+ a month for my insulin.  Meaning we will be right back to where we started this entire venture.  Broke with a new child on the way and the fear of a catastrophic medical issue looming.';
		$post->title = 'Legacy Company';
		$post->save();

		$post = new Post();
		$post->id = '4';
		$post->user_id = User::first()->id;
		$post->content = 'We are finally getting to a phase in life where we are looking at buying a house.  This is exciting.  My credit is pretty good yet Emily doesnt have any credit.  Pretty sure this will impact us but regardless the potential to buy a home is good.  We are going to try and build her credit so we can both sign for a home instead of just me.  I feel like the sooner the better.  With interest rates going up and property value steadily increasing the longer we wait the harder it will be to afford a decent home.  We have ended up moving every year or two and we are tired of it.  We have a family and we need to establish roots.';
		$post->title = 'Dreaming of a home';
		$post->img = '/img/chickengarden.jpg';
		$post->save();

		$post = new Post();
		$post->id = '5';
		$post->user_id = User::first()->id;
		$post->content = 'I should have known my son would be like me.  I should have known the affinity for water is not only aquired but also inherited.  We go places and if there is any sort of water feature Dex seeks it out like flies to poop.  I feel terrible not letting him because i understand.  I was that kid.  A reason is not needed to play in water.  Fountains, pools, fish tanks, waterfalls, or the just a water hose.  It doesn\'t matter.  The desire to play in it is irresistable.  Emily is starting to learn.  But, there are things you just dont consider when preparing for the day.  Sure that outfit looks incredibly cute.  But what happens when he gets soaked because he splashes in the inch of water found at the bottom of a flower pot?  What you do is hope you have a spare outfit or shirt at least.  Live and learn.  My whole life i looked forward to teaching my children about water and share my love of it with them.  Never did i consider they would love it as much as me and share that love with me.  Turning me into a kid again and bringing a simple joy back in my life.';
		$post->title = 'Seeking water';
		$post->img = '/img/fountain.jpeg';
		$post->save();
	}
}
