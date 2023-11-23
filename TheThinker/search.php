<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="quote.css">
<title>Search Results</title>
</head>
<body>
<header>
    <h1>SEARCH RESULTS</h1>
	<form action="search.php" method="get">
		  <input type="text" name="query" placeholder="Search...">
		  <button type="submit">Search</button>
		</form>
        <a href="quotes.html" class="terug-knop">Back</a>
		<a href="suggest.php" class="suggest1">Suggest</a>
</header>
	<main>
		<section class="quotes">
			<?php
			$query = $_GET['query']; // Get the search query from the URL parameter
			$quotes = array(
				"The function of prayer is not to influence God, but rather to change the nature of the one who prays. - Søren Kierkegaard",
				"Man is the measure of all things. - Protagoras",
				"Knowledge which is acquired under compulsion obtains no hold on the mind. - Plato",
				"I cannot teach anybody anything. I can only make them think. - Socrates",
				"In everything, there is a share of everything. - Anaxagoras",
				"At the touch of love, everyone becomes a poet. - Plato",
				"Education is the kindling of a flame, not the filling of a vessel. - Socrates",
				"I know that I am intelligent, because I know that I know nothing. - Socrates",
				"The only good is knowledge and the only evil is ignorance. - Socrates",
				"The mind is everything. What you think you become. - Buddha",
				"We can easily forgive a child who is afraid of the dark; the real tragedy of life is when men are afraid of the light. - Plato",
				"The only thing I know is that I know nothing. - Socrates",
				"Philosophy is the highest music. - Plato",
				"He who is not a good servant will not be a good master. - Plato",
				"To be conscious of being, you need to reclaim consciousness from the mind. This is one of the most essential tasks on your spiritual path. - Eckhart Tolle",
				"The function of man is to live, not to exist. - Jack London",
				"The unexamined life is not worth living. - Socrates",
                "It is not that we have a short time to live, but that we waste a lot of it. -Seneca",
				"Be the change you wish to see in the world. -Mahatma Gandhi",
				"Life is what happens when you're busy making other plans. -John Lennon",
				"Logic will get you from A to B. Imagination will take you everywhere. -Albert Einstein",
				"The only way to do great work is to love what you do. -Steve Jobs",
				"In three words I can sum up everything I've learned about life: it goes on. -Robert Frost",
				"Life is a journey, not a destination. -Ralph Waldo Emerson",
				"The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela",
				"Darkness cannot drive out darkness; only light can do that. Hate cannot drive out hate; only love can do that. -Martin Luther King Jr.",
				"I have not failed. I've just found 10,000 ways that won't work. -Thomas Edison",
				"The only thing necessary for the triumph of evil is for good men to do nothing. -Edmund Burke",
				"The best way to predict your future is to create it. -Abraham Lincoln",
				"Believe you can and you're halfway there. -Theodore Roosevelt",
				"Success is not final, failure is not fatal: it is the courage to continue that counts. -Winston Churchill",
				"Strive not to be a success, but rather to be of value. -Albert Einstein",
				"Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. -Albert Schweitzer",
				"I have a dream that one day this nation will rise up and live out the true meaning of its creed: 'We hold these truths to be self-evident, that all men are created equal. -Martin Luther King Jr.",
				"Courage is not the absence of fear, but rather the assessment that something else is more important than fear. -Franklin D. Roosevelt",
				"The only limit to our realization of tomorrow will be our doubts of today. -Franklin D. Roosevelt",
				"A man who stands for nothing will fall for anything. -Malcolm X",
				"The true test of a man's character is what he does when no one is watching. -John Wooden",
				"Be yourself; everyone else is already taken. -Oscar Wilde",
				"The best revenge is massive success. -Frank Sinatra",
				"Love is not about how many days, weeks or months you've been together, it's all about how much you love each other every day. -Unknown",
				"If you don't stand for something, you will fall for anything. -Malcolm X",
				"A man is but the product of his thoughts. What he thinks, he becomes. -Mahatma Gandhi",
				"It is our choices, Harry, that show what we truly are, far more than our abilities. -J.K. Rowling",
				"Success is stumbling from failure to failure with no loss of enthusiasm. -Winston Churchill",
				"Success consists of going from failure to failure without loss of enthusiasm. -Winston Churchill",
				"Education is not preparation for life; education is life itself. -John Dewey",
				"Change your thoughts and you change your world. -Norman Vincent Peale",
                "The way to get started is to quit talking and begin doing. -Walt Disney",
				"The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela",
				"Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma which is living with the results of other people's thinking. -Steve Jobs",
				"If life were predictable it would cease to be life, and be without flavor. -Eleanor Roosevelt",
				"The only true wisdom is in knowing you know nothing. -Socrates",
				"We are what we repeatedly do. Excellence, then, is not an act, but a habit. -Aristotle",
				"The unexamined life is not worth living. -Socrates",
				"To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment. -Ralph Waldo Emerson",
				"The only way to do great work is to love what you do. -Steve Jobs",
				"The mind is everything; what you think, you become. -Buddha",
				"Happiness is not something ready-made. It comes from your own actions. -Dalai Lama",
				"In three words I can sum up everything I've learned about life: it goes on. -Robert Frost",
				"The only thing necessary for the triumph of evil is for good men to do nothing. -Edmund Burke",
				"I cannot teach anybody anything, I can only make them think. -Socrates",
			);

			foreach ($quotes as $quote) {
				if (strpos(strtolower($quote), strtolower($query)) !== false) { // Check if the query is present in the quote
					echo '<div class="quote"><p>"' . $quote . '"</p></div>';
				}
			}
			?>
		</section>
	</main>
</body>
</html>
