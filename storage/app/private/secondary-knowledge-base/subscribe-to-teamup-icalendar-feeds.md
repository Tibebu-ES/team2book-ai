---
title: "Outbound iCalendar Feeds: View Teamup in Other Calendars"
url: "https://calendar.teamup.com/kb/subscribe-to-teamup-icalendar-feeds/"
---

<meta content="January 15, 2015" itemprop="datePublished"></meta> <header class="hkb-article__header">Outbound iCalendar Feeds: View Teamup in Other Calendars
========================================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Important notes about iCalendar feeds](#important-notes-about-icalendar-feeds)
2. [Get the iCalendar feed URLs](#get-the-icalendar-feed-urls)
3. [Create a custom iCalendar feed](#create-a-custom-icalendar-feed)
4. [Add iCalendar feeds to other calendar applications](#add-icalendar-feeds-to-other-calendar-applications)
5. [Apple iCal](#apple-ical)
    1. [Subscribe to a feed](#subscribe-to-a-feed)
    2. [Delete a feed](#delete-a-feed)
6. [Apple iPad / iPhone](#apple-ipad-iphone)
7. [Google Calendar](#google-calendar)
    1. [Subscribe to a feed](#subscribe-to-a-feed-2)
    2. [Remove a feed](#remove-a-feed)
8. [Outlook (with Exchange)](#outlook-with-exchange)
    1. [Outlook for Windows](#outlook-for-windows)
    2. [Outlook for Mac](#outlook-for-mac)
9. [Outlook on the web or Outlook.com](#outlook-on-the-web-or-outlook-com)
    1. [Outlook on the web (Work or school account)](#outlook-on-the-web-work-or-school-account)
    2. [Outlook.com (Personal Microsoft account)](#outlook-com-personal-microsoft-account)
10. [Teamup Calendar](#teamup-calendar)
11. [Enable or disable iCalendar feeds](#enable-or-disable-icalendar-feeds)

 </nav> </div><div class="hkb-article__content" itemprop="text">You can set up a feed from your Teamup Calendar to other calendar applications such as Google Calendar, Microsoft Outlook or Apple’s iCal. This is achieved using **iCalendar feeds**. This article describes how to set up **outbound iCalendar feeds.** To learn about inbound iCalendar feeds, see [this article](https://calendar.teamup.com/kb/icalendar-feeds-inbound/).

Please note that the term **[iCalendar](https://en.wikipedia.org/wiki/ICalendar)** refers to a standardized data format for the exchange of calendaring information among products of different vendors. This is not to be confused with iCal, a product name for Apple’s calendar.

**iCalendar feeds are read-only** and provide a **periodic automatic synchronization** between the source calendar (Teamup) and another calendar application.

This means that the calendar feed goes **out** from a Teamup Calendar to another calendar service, or to another Teamup Calendar.

There are two basic steps:

1. Obtain the **ics feed link** from Teamup, and
2. Configure the other calendar application to receive the feed(s).

### Important notes about iCalendar feeds

Keep in mind that an iCalendar feed provides a **one-way read-only synchronization**. You can view the events on an iCalendar feed, but you cannot modify them.

You need to **use the web browser interface of Teamup** to get the ics feed link. If you are using a Teamup mobile app, open the Teamup calendar using a web browser or [mobile browser](https://calendar.teamup.com/kb/access-teamup-calendar-in-a-mobile-browser-ios/) before proceeding.

See [this article](https://calendar.teamup.com/kb/what-you-need-to-know-about-icalendar-feeds/) for more information about security, sync frequency, and data range of outbound iCalendar feeds.

### **Get the iCalendar feed URLs**

1. Open your Teamup calendar in a browser.
2. **Click the blue menu button** (top right).
3. Select **Preferences &gt; iCalendar Feeds.**   
    <div class="mceTemp"> </div>[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2015/01/260116-preferences-ical-feeds.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2015/01/260116-preferences-ical-feeds.png)
4. A list of calendars will open with an ics feed link for each one. At the bottom of the list is an ics feed link for all sub-calendars (combined).  
    [![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2015/01/260116tu-icalendar-feed-link-list.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2015/01/260116tu-icalendar-feed-link-list.png)
5. **Copy the ics feed link** you wish to use.

### Create a custom iCalendar feed

If you wish to create an outbound iCalendar feed for a selected set of sub-calendars, you can do so.

1. Create **a [read-only link](https://calendar.teamup.com/kb/share-calendars-access-permissions/#create-shareable-calendar-links)** to the selected sub-calendars.
2. Access the calendar through this link.
3. Go to **Menu &gt; Preferences &gt; iCalendar Feeds** as described above.
4. **Copy the iCal feed link for “All sub-calendars”** and proceed.

If the iCalendar Feeds menu item **is not active** in your menu, then **this feature has been disabled for your calendar**. Ask the administrator of your calendar to enable it.

### Add iCalendar feeds to other calendar applications

Each calendar application is a bit different. We do our best to keep this section updated with accurate instructions, but your experience may vary.

To add the iCalendar feed from a Teamup calendar to another calendar service, **paste the feed URL** into the feed address field of the subscribing calendar service.

For specific help, choose the appropriate section from the table of contents on the right.

### **Apple iCal**

##### **Subscribe to a feed**

1. Open File, select New Calendar Subscription
2. **Paste the URL you copied** from your Teamup Calendar feed. Click **Subscribe.**
3. On the next screen, edit the name and other details, such as auto-refresh frequency.
4. Click **OK.**

See also [instructions from Apple](http://support.apple.com/kb/PH11523). To have iCloud push a Teamup Calendar feed to all your Apple devices, subscribe to it on your **Mac** (not on iPhone or iPad), and choose “iCloud” as the Location, as described [here](https://support.apple.com/en-us/HT202361).

To change the update frequency on Mac OS:

1. Select the calendar in the sidebar and then choose **Get Info** from the **Edit** menu.
2. If you selected a subscribed internet calendar, you will see an **Auto-refresh** popup menu.
3. Select your desired refresh frequency from the **Auto-refresh** pop-up menu.
4. Click **OK** to save your changes.

##### **Delete a feed**

To remove a feed from iCal:

1. Click Calendars on the top left. Your subscribed Teamup Calendar will appear under Other or iCloud.
2. Select the calendar you want to delete
3. From the menu, choose Edit &gt; Delete.

See also [additional tips](http://www.computerworld.com/article/2475867/mac-os-x/how-do-i-unsubscribe-from-a-calendar-in-mavericks-.html).

### **Apple iPad / iPhone**

For iPhone users, in most cases tapping the Teamup iCalendar feed URL will launch the calendar application and the feed subscription dialog will appear. If that is not the case for you, follow these steps:

1. On the Home screen, tap **Settings.**
2. Tap **Accounts &amp; Passwords.**
3. Choose **Add Account**.
4. Tap **Other** at the bottom of the screen.
5. Tap **Add Subscribed Calendar**.
6. Enter or paste the iCalendar feed URL from your Teamup Calendar in the field **Server**.
7. Tap **Next.** If you want to enable reminders, turn on the **Events Alerts** (make the button green so that you can set up [reminders](http://calendar.teamup.com/kb/can-i-set-event-reminders/)).

After you have done the above, your subscribed Teamup Calendar will appear on your device’s default calendar app using iCal. You can then set color for the calendar, or turn the ***Event Alerts*** button on or off as you wish.

If you are subscribing to a Teamup iCalendar feed that contains multiple sub-calendars, the colors for each sub-calendar on your original Teamup Calendar will be lost. Instead, you can assign one color from your iPhone/iPad for the entire Teamup Calendar feed.

To change the update frequency: In step 3 above, tap “**Fetch New Data**” instead of Add Account. Scroll to the bottom and select the fetch frequency.

To remove a subscribed calendar from your iPad or iPhone, check out [this article](https://miapple.me/ios-8-remove-subscribed-calendars-iphone-ipad/).

### **Google Calendar**

##### **Subscribe to a feed**

1. At the left hand side, next to **Add a friend’s calendar** click on the symbol **+** .
2. Choose **From URL**.
3. In the new dialog window, **type or paste your Teamup iCalendar feed URL** and click **Add Calendar**.

<div class="wp-block-image"><figure class="aligncenter is-resized">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/Add-icalendar-feeds-on-Google-1.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/Add-icalendar-feeds-on-Google-1.png)</figure></div><div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/Add-icalendar-feeds-on-Google-2.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/Add-icalendar-feeds-on-Google-2.png)</figure></div>Optionally, you can set reminders by going to in **Settings** &gt; **Notifications** for selected events, or for the entire calendar.

<div class="wp-block-image"><figure class="aligncenter is-resized">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/Add-icalendar-feeds-on-Google-3.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/Add-icalendar-feeds-on-Google-3.png)</figure></div>##### **Remove a feed**

See [Google Calendar’s instructions](https://support.google.com/calendar/answer/37188?co=GENIE.Platform%3DDesktop&hl=en).

### **Outlook (with Exchange)**

#### **Outlook for Windows**

1\. In Outlook, from the Home tab select **Add Calendar &gt; From Internet**.

2\. Paste the feed URL you copied from your Teamup Calendar and click **OK**.

3\. When prompted, confirm that you want to add the calendar and subscribe to updates.

When you start Outlook, it checks Teamup Calendar for updates and downloads any changes. If you keep Outlook open, it also periodically checks for and downloads updates. However, be aware that Outlook (and some other calendars as well) may not update for up to 48 hours.

See also [Microsoft’s instructions](https://support.microsoft.com/en-us/office/import-calendars-into-outlook-8e8364e1-400e-4c0f-a573-fe76b5a2d379).

#### Outlook for Mac

You can’t subscribe to an iCalendar feed directly in the Outlook for Mac desktop app. However, you can subscribe to an iCalendar feed from Outlook on the web (Outlook Web Access). Once you do that, the subscribed iCloud calendar automatically syncs with Outlook for Mac. See [full instructions from Microsoft](https://support.microsoft.com/en-us/office/sync-your-icloud-calendar-with-outlook-for-mac-c9c67e41-274f-4527-ae5e-ea1003d89fc5).

1. Sign into Outlook on the web. Be sure to use the same account added on Outlook for Mac.
2. Follow steps 1-3 below for Outlook on the web.
3. When you have the same account added on Outlook for Mac, this subscribed calendar will also appear in Outlook for Mac calendar.

### **Outlook on the web or Outlook.com**

The instructions are slightly different if you are using Outlook or Outlook Beta. See [full instructions from Microsoft](https://support.microsoft.com/en-us/office/import-or-subscribe-to-a-calendar-in-outlook-com-or-outlook-on-the-web-cff1429c-5af6-41ec-a5b4-74f2c278e98c).

#### **Outlook on the web (Work or school account)**

Sign into Outlook on the web, then continue:

1. At the bottom of the navigation pane, select **Calendar**.
    
    ![A screenshot of the Calendar button at the bottom of the page](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![A screenshot of the Calendar button at the bottom of the page](https://support.content.office.net/en-us/media/60ab2c14-c836-4805-a25b-a10aeb63b5de.png)</noscript>
2. On the toolbar, select **Add calendar** &gt; **From internet**.
    
    ![A screenshot of the Add calendar button](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![A screenshot of the Add calendar button](https://support.content.office.net/en-us/media/4252573b-110a-477c-beba-a9a2b582caff.png)</noscript>
3. In the **Calendar subscription** dialog box, paste the iCalendar feed URL that you copied from Teamup. Enter a unique name for the calendar and click **Save**.
    
    You should see the iCalendar feed listed under **Other calendars** in Outlook on the web.

#### **Outlook.com (Personal Microsoft account)**

1. Sign in to Outlook.com.
2. At the bottom of the page, select the calendar icon. ![Calendar](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![Calendar](https://support.content.office.net/en-us/media/b800323e-05b6-4501-a02c-2bafa723b06b.png)</noscript>
3. In the navigation pane, select **Add calendar**.
4. Select **Subscribe from web.**
5. Enter the URL for the calendar.
6. Select **Import**.

### **Teamup Calendar**

To subscribe to a Teamup Calendar feed from another Teamup calendar, you need to have **administrator access** to the subscribing Teamup Calendar.

1. From your [administrator link](https://calendar.teamup.com/kb/calendar-administrator-link-explained/), go to **Settings** &gt; **Calendars**.
2. Click the blue button **New** in the top right and select **Add iCalendar feed**, then fill out the form.

<figure class="wp-block-image">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/add-icalendar-feeds.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/add-icalendar-feeds.png)</figure>See [Teamup inbound iCalendar feeds](http://calendar.teamup.com/kb/icalendar-feeds-inbound) for more details.

### **Enable or disable iCalendar feeds**

Teamup iCalendar Feeds can be enabled or disabled in Settings &gt; General Settings:

<figure class="wp-block-image">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/enable-icalendar-feeds.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/enable-icalendar-feeds.png)</figure>This is a global setting for the entire calendar and will affect all sub-calendars.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on January 16, 2026 </div><div class="hkb-article-tags"> Tagged: [export](https://calendar.teamup.com/kb-tags/export/)[Google Integration](https://calendar.teamup.com/kb-tags/google-integration/)[iCalendar](https://calendar.teamup.com/kb-tags/icalendar/)[iCalendar Feed](https://calendar.teamup.com/kb-tags/icalendar-feed/)[import](https://calendar.teamup.com/kb-tags/import/)[integration](https://calendar.teamup.com/kb-tags/integration/)[Outlook integration](https://calendar.teamup.com/kb-tags/outlook-integration/)[sync](https://calendar.teamup.com/kb-tags/sync/)</div>