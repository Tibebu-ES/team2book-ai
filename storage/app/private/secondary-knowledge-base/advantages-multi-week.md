---
title: "Multiple Week Calendar View: An Alternative to Monthly View"
url: "https://calendar.teamup.com/kb/advantages-multi-week/"
---

<meta content="October 19, 2014" itemprop="datePublished"></meta> <header class="hkb-article__header">The Multi-Week View
===================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Configure multi-week view](#configure-multi-week-view)
    1. [Set the number of weeks](#set-the-number-of-weeks)
    2. [Set multi-week view as default ](#set-multi-week-view-as-default)
2. [Keep the current week in the first row](#keep-the-current-week-in-the-first-row)
3. [Switch between flexible grid and static grid](#switch-between-flexible-grid-and-static-grid)
4. [Use link parameters to adjust the number of weeks](#use-link-parameters-to-adjust-the-number-of-weeks)
5. [Show more events in multi-week view](#show-more-events-in-multi-week-view)
    1. [Expand the daily blocks](#expand-the-daily-blocks)
    2. [Use a smaller number of weeks](#use-a-smaller-number-of-weeks)
    3. [Optimize your calendar display](#optimize-your-calendar-display)
6. [Tips for printing multi-week view](#tips-for-printing-multi-week-view)

 </nav> </div><div class="hkb-article__content" itemprop="text">Multi-week view (browser only) shows the current week always in the first row. It’s a good alternative to the standard monthly view. You can choose how many weeks to show in multi-week view.

For details about the other calendar views, see [this article](https://calendar.teamup.com/kb/how-to-use-calendar-views/).

### Configure multi-week view

*Reminder: to access [calendar settings](https://calendar.teamup.com/kb/what-are-the-calendar-settings/), you must have [administrator access](https://calendar.teamup.com/kb/what-is-an-administrator-link/) and use a browser. Calendar settings are [not the same](https://teamup.com/event/show/id/XwuoVn23H2nBQNPLqBxLbuiHH1FbBU) as user account settings.*

#### Set the number of weeks

Set the number of weeks to display in the multi-week view:

- Go to **Settings &gt; Calendar Views**
- Choose from 1 to 12 weeks.
- You can change the number of weeks displayed at any time.

A big advantage of the multi-week view is that it keeps the current week at the top of your calendar. So the displayed events will always be current and future events, rather than past events.

Note: if you don’t have access to calendar settings, use a link parameter to adjust the number of weeks displayed. See below for details.

#### Set multi-week view as default 

If you are a calendar administrator, consider making multi-week (rather than month) the default view if current and future events are most important for calendar users. Set the multi-week view to 4 weeks to mimic the standard monthly view.

To set the default calendar view:

- Go to **Settings &gt; Calendar Views**.
- In the Default View section, select **Multi-Week** from the menu.
- Scroll down to the Multi-Week View section and choose the number of weeks to display.
- Your changes will be saved automatically.

### Keep the current week in the first row

With the multi-week view, your calendar display stays current automatically.

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/monthly-view.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/monthly-view.png)<figcaption>*With the month view, events shown will be in the past when it is mid to late month.*</figcaption></figure></div><div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/multi-week-view-2.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/multi-week-view-2.png)<figcaption>The multi-week view always shows the current week in the top row, keeping your calendar focused on current and future events.</figcaption></figure></div>The standard month calendar view displays events of the current month, from the first to the last day of the month. If the current date is toward the end of the month, then, your calendar view will show mostly past events.

To have the view of a month (or more) at a time, while keeping current and future events displayed, use the multi-week view: it displays the designated number of weeks, with **the current week always in the first row**.

Note: Be sure that the calendar’s [start date](https://calendar.teamup.com/kb/change-calendar-start-date/) is set to the current date.

### Switch between flexible grid and static grid

In both **Multi-week and Month view**, click the arrow (top left, above the week number) to switch between a flexible grid and a static grid.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2014/10/231113-static-or-flexible-grid-multiweek-month-1024x512.gif)</noscript>](https://calendar.teamup.com/wp-content/uploads/2014/10/231113-static-or-flexible-grid-multiweek-month.gif)

**Flexible grid:** Daily blocks expand across the row to show all events for each day. Some weeks may be out of view due to the expanded row. There will be a single scroll bar on the right side of the grid. Use your mouse wheel or the scroll bar to move up and down over the weeks.

**Static grid:** The daily blocks will not expand to accommodate many events. Some events may be hidden. When you switch to static grid, the scroll bar will adjust automatically to individual scroll bars for each row (week). Use your mouse wheel or the scroll bar to see any hidden events on a weekly row.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2014/10/231113-staticview-scroll-min.gif)</noscript>](https://calendar.teamup.com/wp-content/uploads/2014/10/231113-staticview-scroll-min.gif)

### Use link parameters to adjust the number of weeks

Calendar link parameters are *key=value* pairs which you can add to the end of a calendar link, for a customized view. You can append *?view=mw#* and replace the “#” with the number of weeks desired in the multi-week view. Doing so will force the calendar to be displayed in a multi-week view with the number of weeks chosen.

For example, *?view=mw3* will force the calendar to open in a three-week view. This is a helpful option when different user groups have different needs for viewing blocks of time, e.g., an operations engineer may prefer a 2-week view, while an 8-week view is more suitable for a sales director.

Read more about [link parameters](http://calendar.teamup.com/kb/calendar-link-parameters/).[ ](http://calendar.teamup.com/kb/calendar-link-parameters/)

### Show more events in multi-week view

#### Expand the daily blocks

As mentioned above, you can expand the daily blocks by clicking the double arrow in the top left. If you have many events on some days, and you wish to see them as well, the expanded daily blocks will help.

Please note that the number of events displayed in the daily blocks depends on the browser window size. So if you have many events, the calendar display may still be limited in each block, depending on what screen space allows.

#### Use a smaller number of weeks

You can also display more events by showing fewer weeks in the multi-week view. This will allow more screen space for the daily blocks.

For example, it’s possible to display 10+ events on a 2-week view, as demonstrated below:

![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/2-weeks-view.png)</noscript>

#### Optimize your calendar display

Here are some more options to optimize screen space for events when viewing a Teamup Calendar:

- **Enlarge** the browser window.
- Put your browser into **full screen mode.**
- **Zoom out** by pressing CONTROL – on a Windows PC, or COMMAND – on a Mac.
- [Collapse the left hand control panel.](http://calendar.teamup.com/kb/hiding-showing-calendars-left-control-panel/) This can create more space.
- Try the [List or Agenda views](http://calendar.teamup.com/kb/how-to-use-calendar-views/). These could be an alternative if a very large number of events needs to be displayed.
- View the calendar on a **larger screen** if possible.
- Hide the weekends to create more space for the weekday blocks. Do this in Settings &gt; Calendar Views. Hiding the weekends allows for more horizontal space, which allows longer event titles to be displayed.

### Tips for printing multi-week view

- When printing the multi-week view (and all other grid views), the printout is limited to one page with equally divided rows. If space on the printout allows, events that are hidden on your on-screen calendar display may be visible on your printout. It’s worth experimenting; try printing in Portrait with a 2 or 3 week view.
- Please note that when printing from the List or the Agenda views, Teamup Calendar supports the printing of multiple pages and all events will be printed out.
- Read more about [printing a Teamup Calendar here](https://calendar.teamup.com/kb/print-a-calendar/).

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on July 24, 2024 </div><div class="hkb-article-tags"> Tagged: [display](https://calendar.teamup.com/kb-tags/display/)[display more events](https://calendar.teamup.com/kb-tags/display-more-events/)[month view](https://calendar.teamup.com/kb-tags/month-view/)[Multi-week view](https://calendar.teamup.com/kb-tags/multi-week-view/)</div>