---
title: "How to Use Teamup to Consolidate iCal Feeds for SuperControl"
url: "https://calendar.teamup.com/kb/how-to-use-teamup-to-consolidate-ical-feeds-for-supercontrol/"
---

<meta content="July 24, 2023" itemprop="datePublished"></meta> <header class="hkb-article__header">How to Use Teamup to Consolidate iCal Feeds for SuperControl
============================================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Multiple booking platforms](#multiple-booking-platforms)
2. [Create a Teamup calendar](#create-a-teamup-calendar)
3. [Add inbound iCal feeds](#add-inbound-ical-feeds)
    1. [Organize feeds from multiple properties](#organize-feeds-from-multiple-properties)
4. [Create a consolidated iCal feed](#create-a-consolidated-ical-feed)
    1. [For one property only](#for-one-property-only)
    2. [For multiple properties](#for-multiple-properties)
5. [Add the consolidated feed to SuperControl](#add-the-consolidated-feed-to-supercontrol)

 </nav> </div><div class="hkb-article__content" itemprop="text">[SuperControl](https://supercontrol.co.uk/category/knowledge-base) is a popular online booking management software. Many self-catering property owners, managers, and agencies use SuperControl to manage their rental properties around the world easily and efficiently. Property managers may wish to receive bookings from multiple platforms, and input them all into SuperControl. Teamup makes this possible with consolidated iCal feeds.

### Multiple booking platforms

Most owners and agencies prefer to list rental properties on multiple channels such as Airbnb, Booking.com, HipCamp, etc. Listing properties on multiple platforms means you have a greater reach and can keep your booking calendar full. It also means that you have multiple iCal feeds with bookings, one from each channel.

However, SuperControl allows you to import only one iCal feed for one property.

Teamup makes it possible for you to create a **consolidated iCal feed** which aggregates the feeds from multiple booking websites and platforms. Then you can plug that consolidated iCal feed into SuperControl.

**Create a Teamup calendar**
----------------------------

Start by [creating a new Teamup calendar](https://teamup.com/calendars).

The Basic plan, which is free, may be sufficient for your needs. You can [upgrade to a paid plan](https://calendar.teamup.com/kb/managing-subscription-plans/#upgrade-your-subscription) to include more feeds (each feed = one sub-calendar) and have a more frequent refresh rate. See a [comparison of plans](https://www.teamup.com/pricing/#compare-plans) for more details.

Add inbound iCal feeds
----------------------

You’ll use the [inbound iCalendar feed](https://calendar.teamup.com/kb/icalendar-feeds-inbound/) functionality to bring all the iCal feeds from booking channels into Teamup.

1. **Copy the outgoing iCal feed URL** from any booking channel.
2. Open your Teamup calendar in a browser.
3. Click the blue menu (top right).
4. Select **Settings**.
5. Go to the **Calendars** tab.
6. Click **New &gt; Add iCalendar Feed**:
7. Name the feed and **paste in the feed URL**, then **Save**:  
    ![Screen Shot 2023-07-20 at 10.56.11 AM.png](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![Screen Shot 2023-07-20 at 10.56.11 AM.png](https://teamup.com/15212734/attachment/01H5T0XVQ4PDZJDJTX952D1K94/preview/Screen%20Shot%202023-07-20%20at%2010.56.11%20AM.png?hash=82b3ac96efaa7c017aebed3c2464f7f5814195ce9433d70d416ec82710acf329)</noscript>

Repeat this process for all booking channels you want to include in the consolidated feed.

Each inbound iCalendar feed will show up as [a sub-calendar](https://calendar.teamup.com/kb/color-coded-calendars/) and will have active one-way synchronization.  
![Screen Shot 2023-07-20 at 11.01.49 AM.png](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![Screen Shot 2023-07-20 at 11.01.49 AM.png](https://teamup.com/15212734/attachment/01H5T0XVQEP7DE5G2DD78SXZ6Z/preview/Screen%20Shot%202023-07-20%20at%2011.01.49%20AM.png?hash=cb6cec4333225f1500d66768a4255ce9eddbe5c99bb88abc0f636450a6ee6c8e)</noscript>

### Organize feeds from multiple properties

If you are managing multiple properties, use [folders](https://calendar.teamup.com/kb/folders-4-sub-calendars/) to organize the booking feeds, as shown here:

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/07/tu-supercontrol-ical-feeds-multiple.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/07/tu-supercontrol-ical-feeds-multiple.png)

Follow the process above for each property, adding the inbound iCal feed for each booking platform to the appropriate property folder.

Create a consolidated iCal feed
-------------------------------

Once you have set up all inbound feeds from booking channels, you can create a consolidated iCal feed to use with SuperControl.

### For one property only

If you are only managing one property, follow these steps:

1. Open your Teamup calendar in a browser.
2. Click the blue menu (top right).
3. Select **Preferences &gt; iCalendar feeds**:
4. Copy the feed URL for **All Calendars**:  
    ![Screen Shot 2023-07-20 at 11.02.11 AM.png](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![Screen Shot 2023-07-20 at 11.02.11 AM.png](https://teamup.com/15212734/attachment/01H5T0XVR30EED5CG5GBZ0DH46/preview/Screen%20Shot%202023-07-20%20at%2011.02.11%20AM.png?hash=29f9aeda644c1b1deb24e40276bad7cfc3e0d76c4aa0df010d42f0688111a274)</noscript>

### For multiple properties

If you are managing multiple properties, follow these steps:

1. Create a [customized calendar link](https://calendar.teamup.com/kb/share-calendars-access-permissions/#add-a-calendar-link) which includes only the sub-calendars for that property.
2. Open the calendar using that customized link.
3. Click the blue menu in the top right, then select **Preferences &gt; iCalendar feeds**.
4. Copy the feed URL for **All Calendars**.

Repeat these steps for each property until you have a single outbound iCal feed for each property.

**Add the consolidated feed to SuperControl**
---------------------------------------------

Once you have created the consolidated iCal feed(s), you can add them to SuperControl. Please check SuperControl support docs for the latest instructions on adding the feed.

1. In SuperControl, open **Integrations &gt; Admin Tools &gt; iCal Feeds***.*
2. Select **Import** and paste the iCal URL you copied from step 3 above to the column **Third party iCal feed URL***.*
3. Repeat as needed for each property.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on December 3, 2025 </div><div class="hkb-article-tags"> Tagged: [bookings](https://calendar.teamup.com/kb-tags/bookings/)[consolidate](https://calendar.teamup.com/kb-tags/consolidate/)[iCalendar Feed](https://calendar.teamup.com/kb-tags/icalendar-feed/)[SuperControl](https://calendar.teamup.com/kb-tags/supercontrol/)</div>