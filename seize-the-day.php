<?php
/*
Plugin Name: Seize the day
Plugin URI: http://wordpress.org/extend/plugins/seize-the-day
Description: Adds random motivational quote on each page refresh. It reminds you to live life to the fullest. That is what "Seize the Day" means. You do not need to add quotes, it already bags for you. Place [seize-the-day] to display quotes in page/post.
Author: Deepak Rajpal
Version: 1.0
Author URI: http://deepakrajpal.com/
*/
 
/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (v2) as published
by the Free Software Foundation.
 
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/
 
// Adding shortcode to dispay quotes
function seize_the_day_quotes ($atts, $content=null){
// extract(shortcode_atts( array('width' => ''), $atts));
// Array as collection of quotes
$quote_collection=array(
	"You are never too old to set another goal or to dream a new dream. ~ C. S. Lewis",
	"Expect problems and eat them for breakfast. ~ Alfred A. Montapert",
	"Either you run the day or the day runs you. ~ Jim Rohn",
	"Dream big and dare to fail. ~ Norman Vaughan",
	"He who hesitates is lost. ~ Proverb",
	"Always desire to learn something useful. ~ Sophocles",
	"If you want to conquer fear, don't sit home and think about it. Go out and get busy. ~ Dale Carnegie",
	"Problems are not stop signs, they are guidelines. ~ Robert H. Schuller",
	"What you do today can improve all your tomorrows. ~ Ralph Marston",
	"Never complain and never explain. ~ Benjamin Disraeli",
	"Who seeks shall find. ~ Sophocles ",
	"Wherever you are - be all there. ~ Jim Elliot",
	"To be a good loser is to learn how to win. ~ Carl Sandburg",
	"Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. ~ Buddha ",
	"Life is a song - sing it. Life is a game - play it. Life is a challenge - meet it. Life is a dream - realize it. Life is a sacrifice - offer it. Life is love - enjoy it. ~ Sai Baba",
	"Believe that life is worth living and your belief will help create the fact. ~ William James",
	"Life is really simple, but we insist on making it complicated. ~ Confucius",
	"Every man dies. Not every man really lives. ~ William Wallace ",
	"If you love life, don't waste time, for time is what life is made up of. ~ Bruce Lee",
	"I love life because what more is there? ~ Anthony Hopkins",
	"May you live all the days of your life. ~ Jonathan Swift"
);
// Count total array elements
$total_quotes = count($quote_collection);
// Catch a random one from total count. Decrement by one because of array keys: "0" to "total-1"
$selected = rand(1, $total_quotes)-1;
$quote_content = "<div id='seize-the-day'>". $quote_collection[$selected]."</div>";
return $quote_content;
}
// adding [seize-the-day] shortcode to display random quote.
add_shortcode('seize-the-day', 'seize_the_day_quotes');
?>