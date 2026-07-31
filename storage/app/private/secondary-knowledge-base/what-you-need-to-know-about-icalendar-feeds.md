---
title: "Managing Outbound iCalendar Feeds from Teamup"
url: "https://calendar.teamup.com/kb/what-you-need-to-know-about-icalendar-feeds/"
---

<meta content="March 14, 2015" itemprop="datePublished"></meta> <header class="hkb-article__header">Manage Outbound iCalendar Feeds from Teamup
===========================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [What is a Teamup iCalendar feed?](#what-is-a-teamup-icalendar-feed)
2. [What you need to know about iCalendar feeds](#what-you-need-to-know-about-icalendar-feeds)
    1. [1. iCalendar feeds are read-only](#1-icalendar-feeds-are-read-only)
    2. [2. iCalendar feeds are one-way](#2-icalendar-feeds-are-one-way)
    3. [3. Consider security with iCalendar feeds](#3-consider-security-with-icalendar-feeds)
    4. [4. How to disable iCalendar feeds](#4-how-to-disable-icalendar-feeds)
    5. [5. How to terminate an iCalendar feed](#5-how-to-terminate-an-icalendar-feed)
    6. [6. Date range covered in iCalendar feeds](#6-date-range-covered-in-icalendar-feeds)
    7. [7. Update frequency of iCalendar feeds](#7-update-frequency-of-icalendar-feeds)
    8. [8. Using other devices and calendar apps](#8-using-other-devices-and-calendar-apps)

 </nav> </div><div class="hkb-article__content" itemprop="text">An iCalendar feed syncs data from one calendar or calendar service to another. You can set up iCalendar feeds to be inbound (coming into your calendar from another calendar) or outbound (going out of your calendar to another calendar). This article discusses how to manage outbound iCalendar feeds from your Teamup calendar to other calendars. For information about inbound iCalendar feeds, see [this article](https://calendar.teamup.com/kb/icalendar-feeds-inbound/).

### What is a Teamup iCalendar feed?

An **iCalendar feed**, often also called **ics feed**, is a calendar format which allows you to share calendar data from one calendar service to another calendar service.

With an ics feed, you can display Teamup Calendar events in Apple iCal, Google Calendar, Outlook or any other calendar applications that supports iCalendar feeds. You can set up an outbound iCalendar feed whether you have [account-based](https://calendar.teamup.com/kb/how-to-manage-account-based-calendar-users/) calendar access or access via shareable [calendar link](https://calendar.teamup.com/kb/managing-calendar-urls/).

To set up iCalendar feeds in these other calendar services, see [how to subscribe to Teamup iCalendar feeds](http://calendar.teamup.com/kb/subscribe-teamup-calendar-feed-from-other-calendars/) to view Teamup in other calendar programs.

### What you need to know about iCalendar feeds

#### **1. iCalendar feeds are read-only**

An iCalendar feed can only be used to view calendar data, not to modify calendar data. The events that are shown via iCalendar feed are read-only. So the user of the calendar receiving the feed will be able to view the event data, but not modify the events on the feed.

#### **2. iCalendar feeds are one-way** 

This is a one-way synchronization from Teamup Calendar to another calendar system. The event data from the Teamup calendar is sent via the feed to the other calendar system; there is no data being sent from the calendar to Teamup. (To set up a feed from another calendar into Teamup, see [inbound iCalendar feeds](https://calendar.teamup.com/kb/icalendar-feeds-inbound/).)

#### **3. Consider security with iCalendar feeds**

If your Teamup Calendar contains private or time-critical data, please carefully consider the security implications and update frequency issues described below before enabling the iCalendar feeds for all your users.

It is important to know that the iCalendar feed URLs contain the secret key of the associated calendar link. When sharing iCalendar feed URLs with your calendar users, please be sure to share feed URLs with the proper permission.

For example, if you open your Teamup Calendar with a link that has administration permission, the associated iCalendar feed URLs will contain the secret key of the administration link. Obviously, these feed URLs should not be shared with users that are not administrators. It is important to obtain the iCalendar feed URLs from a calendar link with the appropriate permission.

Good practice for both account users and those using shareable calendar links:

- First, create and view your calendar with a [read-only](https://calendar.teamup.com/kb/what-are-access-permissions/#read-only) link.
- Then obtain the iCalendar feed link to share with others:

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2019/02/locate_icalendar_feeds.gif)</noscript>](https://calendar.teamup.com/wp-content/uploads/2019/02/locate_icalendar_feeds.gif)</figure></div>#### 4. How to disable iCalendar feeds

<figure class="wp-block-image">![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2020/07/Screen-Shot-2020-07-24-at-8.53.34-AM-1024x254.png)</noscript><figcaption>Enable or disable outbound iCalendar feeds for all users.</figcaption></figure>If you wish to prevent the use of iCalendar feeds from your Teamp calendar, you can do so globally in the calendar settings.

- Open the calendar with administrator access.
- Go to Settings -&gt; General Settings.
- Check No to disable iCalendar feeds for all calendar users.

#### **5. How to terminate an iCalendar feed**

If you need to prevent former collaborators from accessing an iCalendar feed, you can delete the associated [calendar link](https://calendar.teamup.com/kb/what-is-a-calendar-link/). If a calendar link is deleted, all iCalendar feed URLs associated with that calendar link will stop working. However, data shared in the past cannot be taken back.

You can also reset all iCalendar feeds at one time. This is helpful if you wish to tighten up calendar security, after major organizational change, etc. See how to [reset all outbound iCalendar feeds](https://calendar.teamup.com/kb/how-to-reset-all-outbound-icalendar-feeds/).

#### **6. Date range covered** in iCalendar feeds

iCalendar feeds include event data from 6 months in the past to 12 months in the future.

If you need to export all event data of your calendar, for backup or migration to another tool, the recommended approach is to use the [export tool](https://calendar.teamup.com/kb/bulk-export-calendars-file/) available in the settings of your calendar.

#### **7. Update frequency** of iCalendar feeds

Teamup refreshes the feed source immediately after each change. However, the update frequency a user experiences varies depending on the subscribing calendar program:

- Apple iCal: It is possible to configure the feed update frequency between 5 minutes and once a week.
- Outlook and Google Calendar: The update frequency is not configurable. In our experience it can take several hours to days to refresh. This is outside the control of Teamup.

You can force an update by removing a feed and re-subscribing. Consider cache busting by appending a parameter such as a timestamp, e.g. ?t=090301 at the end of the feed URL.

#### **8. Using other devices and calendar apps**

How other calendars or devices will allow subscription to an ics format calendar feed may vary greatly and is beyond the control of Teamup.

If you are experiencing problems with subscribing from your device, especially non-iPhone smart phones, please google for answers. If you find useful tips and would like to [share with us](https://www.teamup.com/help/general-help/), we’d most appreciate it.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on April 23, 2025 </div><div class="hkb-article-tags"> Tagged: [export](https://calendar.teamup.com/kb-tags/export/)[iCalendar](https://calendar.teamup.com/kb-tags/icalendar/)[iCalendar Feed](https://calendar.teamup.com/kb-tags/icalendar-feed/)[ics](https://calendar.teamup.com/kb-tags/ics/)[import](https://calendar.teamup.com/kb-tags/import/)</div>