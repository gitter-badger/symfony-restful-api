<?php

namespace TestApp\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TestApp\NewsBundle\Entity\News;

class LoadNewsData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $news = [
            [
                "name" => "Now casting: WATCH Disney Channel, Twitch, iHeart Radio and DramaFever for Chromecast",
                "slug" => "watch-chromecast",
                "text" => "Chromecast has a little something for everyone in the family to enjoy, and today we’re adding even more options for kids, music lovers and gamers.<br>
<br>
For kids of all ages, we're introducing the <a href=\"http://watchdisneychannel.go.com/\" target=\"_blank\">WATCH Disney</a>, <a href=\"http://disneyjunior.com/\" target=\"_blank\">WATCH Disney Junior</a> and <a href=\"http://disneyxd.disney.com/\" target=\"_blank\">WATCH Disney XD</a> apps. So now you'll be able to watch <i>Girl Meets World, Doc McStuffins,</i> and <i>Star Wars Rebels</i> on demand from the Disney Android and iOS apps. (To watch live stream of the network or recent episodes, you’ll need to sign in with a participating TV provider account.)<br>
<br>",
            ],
            [
                "name" => "First set of Android apps coming to a Chromebook near you",
                "slug" => "chromebook-cndroid-apps",
                "text" => "Chromebooks were designed to keep up with you on the go—they’re thin and light, have long battery lives, resume instantly, and are easy to use. Today, we're making Chromebooks even more mobile by bringing the first set of Android apps to Chrome OS: <br><br> These first apps are the result of a project called the App Runtime for Chrome (Beta), which we announced earlier this summer at Google I/O. Over the coming months, we’ll be working with a select group of Android developers to add more of your favorite apps so you’ll have a more seamless experience across your Android phone and Chromebook.",
            ],
            [
                "name" => "This time it's personal",
                "slug" => "time-personal",
                "text" => "Anyone who&rsquo;s argued over the TV remote knows that sharing a living room doesn&rsquo;t mean you want to share everything else. The same is true on the web. So in the latest <a href=\"https://www.google.com/intl/en/chrome/browser/beta.html\">Chrome beta</a>, we&#39;re exploring a new way for you to share your computer without sharing your business.<br />
Get started by clicking on &ldquo;You&rdquo; in the upper right corner of your Chrome window and then clicking &ldquo;Sign in to Chrome.&rdquo; You&rsquo;ll be able to switch devices and pick up where you left off with all of your tabs, bookmarks, and history automatically kept in <a href=\"https://support.google.com/chrome/answer/165139?hl=en\">sync</a>.

<br />
    If you share a computer, click &quot;Switch person&quot; to add your profile and get your own bookmarks, apps, and theme. Switching lets you keep your stuff separate.
",
            ]
        ];

        foreach ($news as $n) {
            $item = new News();
            $item->setName($n['name']);
            $item->setSlug($n['slug']);
            $item->setText($n['text']);
            $manager->persist($item);
            $manager->flush();
        }
    }
}