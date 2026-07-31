---
title: "Inbound iCalendar Feeds: See Other Calendars in Teamup"
url: "https://calendar.teamup.com/kb/icalendar-feeds-inbound/"
---

<meta content="October 11, 2016" itemprop="datePublished"></meta> <header class="hkb-article__header">Inbound iCalendar Feeds: View Other Calendars in Teamup
=======================================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [About the iCalendar format](#about-the-icalendar-format)
2. [About inbound iCalendar feeds](#about-inbound-icalendar-feeds)
    1. [How to add an iCalendar feed to your Teamup Calendar:](#how-to-add-an-icalendar-feed-to-your-teamup-calendar)
3. [Step 1. Find the iCal feed URL](#step-1-find-the-ical-feed-url)
4. [Step 2. Add the iCal feed to your Teamup Calendar](#step-2-add-the-ical-feed-to-your-teamup-calendar)
5. [Refresh interval and status](#refresh-interval-and-status)
6. [Obtaining source iCalendar/ics feed URL](#obtaining-source-icalendar-ics-feed-url)
    1. [Google Calendar](#google-calendar)
    2. [Apple Calendar](#apple-calendar)
        1. [Mac](#mac)
        2. [iOS](#ios)
        3. [iCloud](#icloud)
    3. [Trello Boards with due dates](#trello-boards-with-due-dates)
    4. [Teamup Calendar](#teamup-calendar)
    5. [Outlook.com Calendar](#outlook-com-calendar)
        1. [ ](#toc-anchor-)

 </nav> </div><div class="hkb-article__content" itemprop="text">**Inbound iCalendar feeds** allow you to view calendars from other calendar services in your Teamup Calendar. You can also use an inbound iCalendar feed to view other Teamup calendars in your own Teamup Calendar.

Please note that the term **[iCalendar](https://en.wikipedia.org/wiki/ICalendar)** refers to a standardized data format for the exchange of calendaring information among products of different vendors. This is not to be confused with iCal, a product name for Apple’s calendar.

You must be a calendar administrator to subscribe to inbound iCalendar feeds. Otherwise, you cannot access the Settings to subscribe to inbound iCal feeds. If you are not a calendar admin, and wish to add an inbound iCal feed to your Teamup Calendar, contact your calendar administrator for help.

### About the iCalendar format

The [iCalendar](https://en.wikipedia.org/wiki/ICalendar) format is a standardized data format. It allows for the exchange of calendar data between different calendar products. It is supported by many calendar services, including:

- Google Calendar
- Apple Calendar
- Outlook
- Teamup Calendar
- Facebook events
- Trello calendar power-up
- And any other applications that provide .ics feeds

### About inbound iCalendar feeds

Inbound iCalendar feeds are added to your Teamup Calendar as *read-only* sub-calendars. An inbound iCal feed is an active one-way synchronization, meaning that Teamup periodically fetches the latest feed content and updates the calendar. Please note that it is not possible to send changes back to the feed source.

#### How to add an iCalendar feed to your Teamup Calendar:

1. **Find the iCal feed URL** of the calendar that you want to subscribe to, and
2. **Add the iCal feed URL** to your Teamup Calendar in **Settings &gt; Calendars.**

### Step 1. Find the iCal feed URL

The location of the iCal feed URL is different for each calendar services.

Please check the settings or help section of the calendar service you wish to subscribe to. Or see the section below: [how to find feed URLs for some calendars](#obtaining-source-icalendar-ics-feed-url).

### Step 2. Add the iCal feed to your Teamup Calendar

- Open your Teamup Calendar with [**administrator access**](https://calendar.teamup.com/kb/what-is-an-administrator-link/).
- Go to **Settings** &gt; **Calendars**.
- Click the button **New** and choose **Add iCalendar Feed**.

<figure class="wp-block-image">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/add-icalendar-feeds.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/add-icalendar-feeds.png)</figure>- Set the details (name, color) for your new iCalendar feed.
- **Copy and paste the iCalendar feed URL** into field ***Feed URL***.
- Choose how frequently you want the calendar to update, and click **Save**.

<figure class="wp-block-image">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/add-new-icalendar-feed-1.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/add-new-icalendar-feed-1.png)</figure>### Refresh interval and status

The feed source is refreshed periodically by Teamup to keep the feed updated. You can choose the refresh interval for each iCalendar feed from the available options. Available refresh intervals depend on the [subscription plan](http://www.teamup.com/pricing.html) of the calendar:

- Plus plan: 4 hours
- Pro plan: 1 hour
- Business: 15 minutes
- Enterprise: 5 minutes

The initial fetch will take place immediately after configuring a new iCalendar feed. After that, the feed source will be refreshed with the configured frequency.

The feed status (last fetch date, errors) is shown in the list of calendars.

### Obtaining source iCalendar/ics feed URL

Note: We try to provide updated and helpful steps for obtaining iCal feed URLs from various source calendars. **However, we cannot guarantee the accuracy of this information as these products may change without our knowledge.** Please check official documentation/support for the calendar services for updated information and additional help.

#### Google Calendar

See [Google’s documentation](https://support.google.com/calendar/answer/37648?hl=en#zippy=%2Cget-your-calendar-view-only) for additional steps or updated information.

1. **Open** your **Google Calendar.** On the left hand side, **locate the calendar** for which you want to obtain the feed URL.
2. Click on the **3 dots** at the right of the calendar name. Select **Settings and sharing**.
3. Scroll down to **Integrate Calendar** section and **copy the URL** listed under *Secret address in iCal format*. If your calendar is public, you can also copy the URL listed under *Public address in iCal format*. Note Google’s security warning.

#### Apple Calendar

##### Mac

See [Apple’s documentation](https://support.apple.com/guide/calendar/ways-to-share-calendars-icl1026/15.0/mac/15.0) for additional steps or updated information.

1. Open the **Apple Calendar app** on your Mac.
2. **Find the calendar you want** in the calendar list on the left. Click the Calendar icon if the list is not visible.
3. **Right-click** on the needed calendar, then **click Share Calendar** from the pop-up menu.
4. Copy the URL from the pop-up information box.
5. Then [proceed with the steps](#step-2-add-the-ical-feed-to-your-teamup-calendar) to add the inbound iCal feed to your Teamup calendar. [More details](https://teamup.com/event/show/id/LRCNkURvn3iN6PYVZQdqXi4hPinqbW).

**Note: if you do not see an iCal feed URL in the pop-up information box** (Step 4), you must first publish the calendar so that an iCal feed will be generated:

- Click Share Calendar, then **check the box next to Public Calendar**.
- **Click the Done button**.
- Then proceed from Step 3, above: right-click, select Share Calendar. The iCal feed URL should be shown now.

##### iOS

See [Apple’s documentation](https://support.apple.com/guide/iphone/share-icloud-calendars-iph7613c4fb/ios) for additional steps or updated information.

1. Open the Calendar app.
2. Tap **Calendars** at the bottom of the screen.
3. Find the calendar with your reminders (or whichever calendar you wish to set up as an iCal feed).
4. **Tap the red i icon** next to the calendar.
5. Tap **Share Link…**
6. Tap **Copy** to copy the link to your clipboard. Or you can message it to yourself or AirDrop it to your computer, as needed, so you can access it from a browser. [More details](https://teamup.com/event/show/id/STZqYrT6c9zA65TUNFKdXPrgtsxjUP).

##### iCloud

See [Apple’s documentation](https://support.apple.com/guide/icloud/share-a-calendar-mm6b1a9479/icloud) for additional steps or updated information.

1. Go to <https://www.icloud.com/calendar/>. Sign in if needed.
2. Click the icon next to a calendar to open the pop-up information box, then copy the link.
3. Replace the “webcal://” portion of the link with “https://”
4. Then [proceed with these steps](https://calendar.teamup.com/kb/icalendar-feeds-inbound/#step-2-add-the-ical-feed-to-your-teamup-calendar), pasting the modified iCal link into Teamup to set up the inbound iCal feed. [More details](https://teamup.com/event/show/id/LRCNkURvn3iN6PYVZQdqXi4hPinqbW).

#### Trello Boards with due dates

See [Trello’s documentation](https://support.atlassian.com/trello/docs/using-the-calendar-power-up/) for additional steps or updated information.

To begin, enable the iCalendar feed and find the iCalendar URL for your Trello board.

1. Open the board menu
2. Click “Power-Ups”
3. Click “Calendar.” Enable the Power-Up if you haven’t already.
4. Select “Edit Power-Up Settings”
5. Once there click “Enable Sync” to enable the iCalendar feed. If you don’t have this option, you’ll need to ask a board admin to enable this setting.
6. Copy the URL from “iCalendar Feed.”

See[ details here](http://blog.teamup.com/2016/11/17/using-trello-with-teamup-calendar/).

#### Teamup Calendar

1. Open your Teamup Calendar in a browser. Click the **blue menu** icon in the top right. Select **Preferences** &gt; **iCalendar feeds**.  
    ![Get the iCalendar feed from blue menu in Teamup calendar](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![Get the iCalendar feed from blue menu in Teamup calendar](https://calendar.teamup.com/wp-content/uploads/2019/02/locate_icalendar_feeds.gif)</noscript>
2. Find the desired sub-calendar on the list of sub-calendars, or scroll to the bottom of the list for the feed URL to *All sub-calendars*. Click the **Copy** icon at the right-hand side of the feed URL.  
    Note: 
    - To add holidays to your Teamup Calendar, check out [these holiday calendar feeds](http://calendar.teamup.com/kb/holiday-calendar-feeds-preview-teamup/).
    - If you wish to do a one-time data import into your Teamup Calendar, see [Import data from one Teamup Calendar to another](http://calendar.teamup.com/kb/how-to-import-data-from-one-teamup-calendar-to-another/).

#### Outlook.com Calendar

Refer to [Microsoft’s documentation](https://support.microsoft.com/en-us/office/introduction-to-publishing-internet-calendars-a25e68d6-695a-41c6-a701-103d44ba151d) for additional steps or updated information.

1. **Log** into your Outlook.com account. Click on **Settings** &gt; **Options**.
2. Click on **Calendar** &gt; **Shared Calendars**, then **Calendar Publishing**.
3. You will see 2 options: *Showing availability only* or *Show availability, titles, and locations*.
4. **Click Create** for the option you want, then **copy the feed URL.**

<figure class="wp-block-image">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/share-outlook.com-into-Teamup.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/share-outlook.com-into-Teamup.png)<figcaption>Outlook.com</figcaption></figure>- Outlook 2016, Outlook 2013, Outlook 2010 Publish your calendar [as described here](https://support.office.com/en-us/article/Introduction-to-publishing-Internet-Calendars-A25E68D6-695A-41C6-A701-103D44BA151D).
- Microsoft Exchange Right-click the calendar you want to share, select *Publish This Calendar, Publish My Calendar* and *Access level.* Then click Start Publishing.

#####  

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on December 3, 2025 </div><div class="hkb-article-tags"> Tagged: [iCalendar](https://calendar.teamup.com/kb-tags/icalendar/)[iCalendar feeds](https://calendar.teamup.com/kb-tags/icalendar-feeds/)[inbound feeds](https://calendar.teamup.com/kb-tags/inbound-feeds/)[integration](https://calendar.teamup.com/kb-tags/integration/)[Scheduling](https://calendar.teamup.com/kb-tags/scheduling/)[sync](https://calendar.teamup.com/kb-tags/sync/)</div>