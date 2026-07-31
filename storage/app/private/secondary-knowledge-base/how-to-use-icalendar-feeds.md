---
title: "Sync with iCalendar Feeds"
url: "https://calendar.teamup.com/kb/how-to-use-icalendar-feeds/"
---

<meta content="April 23, 2025" itemprop="datePublished"></meta> <header class="hkb-article__header">Sync with iCalendar Feeds
=========================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [What are iCalendar feeds?](#what-are-icalendar-feeds)
2. [Inbound or outbound iCal feeds](#inbound-or-outbound-ical-feeds)
    1. [Inbound feeds: View other calendars in Teamup](#inbound-feeds-view-other-calendars-in-teamup)
        1. [Add an inbound Calendar feed to Teamup](#add-an-inbound-calendar-feed-to-teamup)
    2. [Outbound feeds: View Teamup in other calendars](#outbound-feeds-view-teamup-in-other-calendars)
        1. [Set up an outbound feed from Teamup](#set-up-an-outbound-feed-from-teamup)

 </nav> </div><div class="hkb-article__content" itemprop="text">An iCalendar feed lets you set up a one-way sync between calendars. With an iCal feed, you can “feed” events from the source calendar to a subscribing calendar automatically.

What are iCalendar feeds?
-------------------------

The **[iCalendar](https://en.wikipedia.org/wiki/ICalendar) format** is a standardized data format allowing the exchange of calendar data between different calendar products. It is supported by many calendar services.

**iCalendar feeds provide automatic, periodic event syncing from a source calendar to a read-only subscribing calendar.**

- **Automatic:** Once the feed is set up, it continues to sync automatically unless it is turned off.
- **Periodic**: The feed is not updated instantly but refreshed periodically. This is called the refresh rate.
- **Event syncing:** Event data from the source calendar is sent to the subscribing calendar.
- **Read-only:** In the subscribing calendar, the events from the source calendar are read-only. They can be viewed but not modified.

Note: The term **[iCalendar](https://en.wikipedia.org/wiki/ICalendar)** refers to a standardized data format for the exchange of calendaring information among products of different vendors. This is not to be confused with iCal, a product name for Apple’s calendar.

Inbound or outbound iCal feeds
------------------------------

Inbound iCalendar feeds sync events from another calendar (Google, Apple iCal, Outlook, or a different Teamup calendar) into your Teamup calendar. The event sync is incoming: from a source calendar into your Teamup calendar. The events will be read-only in your Teamup calendar.

Outbound iCalendar feeds sync events from your Teamup calendar to another calendar (Google, Apple iCal, Outlook, or a different Teamup calendar). The event sync is outgoing: from your Teamup calendar out to a subscribing calendar. The events will be read-only in the subscribing calendar.

### Inbound feeds: View other calendars in Teamup

Inbound iCalendar feeds allow you to view events from other calendar services (Apple Cal, Google Cal, Outlook, etc.) in Teamup.

- Inbound iCalendar feeds are added to Teamup as **read-only sub-calendars**.
- An inbound iCal feed is an active **[one-way synchronization](https://calendar.teamup.com/kb/icalendar-feeds-inbound/#about-inbound-icalendar-feeds).** You can view events from the source calendar in Teamup, but it is not possible to send changes back to the feed source.
- **Only the [calendar administrator](https://calendar.teamup.com/kb/what-is-the-calendar-administrator/)** can [subscribe](https://calendar.teamup.com/kb/icalendar-feeds-inbound/) to inbound iCalendar feeds.
- The feed source is refreshed periodically by Teamup; you can **set the [refresh interval](https://calendar.teamup.com/kb/icalendar-feeds-inbound/#refresh-interval-and-status)** for each iCalendar feed from the available options.

#### Add an inbound Calendar feed to Teamup

1. Find the iCal feed URL of the calendar that you want to subscribe to, and
2. Add the iCal feed URL to your Teamup Calendar in **Settings &gt; Calendars.**

**ℹ️ [Learn more](https://calendar.teamup.com/kb/icalendar-feeds-inbound/#how-to-add-an-icalendar-feed-to-your-teamup-calendar)**

### Outbound feeds: View Teamup in other calendars

Outbound iCalendar feeds allow you to view events from Teamup in other calendars such as Google Calendar, Microsoft Outlook or Apple’s iCal.

- An outbound iCalendar feed goes **out** from Teamup to another calendar service, or to another [Teamup Calendar](https://calendar.teamup.com/kb/subscribe-to-teamup-icalendar-feeds/#teamup-calendar).
- An outbound iCal feed provides a **one-way read-only synchronization**. You can view the events from Teamup in the other calendar, but you cannot modify them.
- You need to **open Teamup in a browser** to get the iCalendar feed URL. The iCal feed links are not available in the Teamup app.
- The calendar administrator can set up a [**customized iCalendar feed**](https://calendar.teamup.com/kb/how-to-create-an-icalendar-feed-with-selected-sub-calendars/) with selected sub-calendars combined into one feed.
- Calendar administrators: See [how to manage outbound feeds](https://calendar.teamup.com/kb/what-you-need-to-know-about-icalendar-feeds/).

#### Set up an outbound feed from Teamup

1. Obtain the [iCalendar feed URL(s)](https://calendar.teamup.com/kb/how-to-find-a-teamup-icalendar-feed-url/) from Teamup, and
2. Configure the other calendar application to receive the feed(s).

ℹ️ **[Learn more](https://calendar.teamup.com/kb/subscribe-to-teamup-icalendar-feeds/)**

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on October 6, 2025 </div><div class="hkb-article-tags"> Tagged: [Apple integration](https://calendar.teamup.com/kb-tags/apple-integration/)[Google Integration](https://calendar.teamup.com/kb-tags/google-integration/)[iCalendar feeds](https://calendar.teamup.com/kb-tags/icalendar-feeds/)[Outlook integration](https://calendar.teamup.com/kb-tags/outlook-integration/)[sync](https://calendar.teamup.com/kb-tags/sync/)</div>