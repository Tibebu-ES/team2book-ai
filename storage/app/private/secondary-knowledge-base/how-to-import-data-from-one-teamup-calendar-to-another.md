---
title: "How to Import Data from One Teamup Calendar to Another"
url: "https://calendar.teamup.com/kb/how-to-import-data-from-one-teamup-calendar-to-another/"
---

<meta content="February 15, 2016" itemprop="datePublished"></meta> <header class="hkb-article__header">How to Import Data from One Teamup Calendar to Another
======================================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Choose the best method](#choose-the-best-method)
    1. [Simple calendars: Method 1 or 2 (.ics)](#simple-calendars-method-1-or-2-ics)
    2. [Other calendars: Method 3 (CSV)](#other-calendars-method-3-csv)
2. [Method 1: Using an iCalendar data feed URL](#method-1-using-an-icalendar-data-feed-url)
    1. [Step 1: Get the data feed URL from Calendar A](#step-1-get-the-data-feed-url-from-calendar-a)
    2. [Step 2: Import the data from the feed URL to Calendar B](#step-2-import-the-data-from-the-feed-url-to-calendar-b)
3. [Method 2: Using .ics files](#method-2-using-ics-files)
    1. [Step 1: Export the .ics data from Calendar A.](#step-1-export-the-ics-data-from-calendar-a)
    2. [Step 2: Import the .ics data to Calendar B.](#step-2-import-the-ics-data-to-calendar-b)
4. [Method 3: Using a CSV file](#method-3-using-a-csv-file)
    1. [Step 1: Export the CSV data from Calendar A.](#step-1-export-the-csv-data-from-calendar-a)
    2. [Step 2: Import the CSV data to Calendar B](#step-2-import-the-csv-data-to-calendar-b)

 </nav> </div><div class="hkb-article__content" itemprop="text">You can import calendar data from one Teamup Calendar (“Calendar A”) to another Teamup Calendar (“Calendar B”). An import is not a sync but a one-time move of data. To set up a sync, use [an ongoing feed](https://calendar.teamup.com/kb/subscribe-to-teamup-icalendar-feeds/#Teamup-feed) from one Teamup Calendar to another.

---

Choose the best method
----------------------

### Simple calendars: Method 1 or 2 (.ics)

If you’re working with a very simple calendar (no custom fields, no one-to-many events, no recurring events), then the .ics methods will work fine.

### Other calendars: Method 3 (CSV)

Use Method 3 if the source calendar has any of the following:

- custom fields.
- recurring events.
- one-to-many events.

Method 1: Using an iCalendar data feed URL
------------------------------------------

For this method, you need at least *read-only* access to Calendar A and [*administrator* access](https://blog.teamup.com/2018/06/20/what-is-an-administrator-link/) to Calendar B.

#### Step 1: Get the data feed URL from Calendar A

- **Locate the iCalendar feed URL** from Calendar A: **Click the blue menu icon** (top right), then **select Preferences &gt; iCalendar Feeds**.

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/iCalendar-feeds-1-1-320x255.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/iCalendar-feeds-1-1.png)</figure></div>- **Find the feed URL** for the sub-calendar you wish to import data from, then **copy the feed URL**:

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/iCalendar-feeds-2.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/iCalendar-feeds-2.png)</figure></div>#### Step 2: Import the data from the feed URL to Calendar B

- Open Calendar B with administrator access. Go to **Settings&gt; Import Events**.
- **Enter a name for the calendar** to be imported. Then **paste the feed URL** (copied in Step 1) into the URL field as shown below:

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/import-from-url.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/import-from-url.png)</figure></div>- Save and go back to your calendar view to confirm that the data has been successfully imported.
- Importing from one feed URL of Calendar A will add a new sub-calendar to Calendar B. If you use the feed URL for all sub-calendars of Calendar A, all data on all sub-calendars of Calendar A will appear on one sub-calendar on Calendar B.
- This method can also be used should you wish to merge two Teamup Calendars.

Note that this process results in a **one-time import of data.** It does not initiate an ongoing sync or iCalendar feed. For more help with setting up an ongoing iCalendar feed, see [this post](https://blog.teamup.com/2018/08/21/what-are-icalendar-feeds/).

Method 2: Using .ics files
--------------------------

For this method, you need administrator access to both calendars.

You can migrate data from one Teamup calendar to another using the iCalendar file format, often called *ics format* or *ical format.*

Note that .ics files do not keep the custom fields in separate fields, but appended to the text in Description field. If you do have custom fields, consider using .csv file format (see below for details).

#### Step 1: Export the .ics data from Calendar A.

Export the data from Calendar A by following these steps:

1. Open Calendar A and go to Settings &gt; Export Events.
2. Choose the .ics data format.
3. Select the calendar(s) to include and the date range, then click the green Export button.

Important note: when exporting to .ics file, **each sub-calendar will be exported to its own file**. All files are zipped in one file when downloading.

See more details [here](https://calendar.teamup.com/kb/bulk-export-calendars-file/).

#### Step 2: Import the .ics data to Calendar B.

1. Open Calendar B and go to Settings &gt; Import Events.
2. Import each sub-calendar separately from the respective .ics file and name it accordingly.

Method 3: Using a CSV file
--------------------------

The first line of a CSV file is a comma-separated list of field names. Subsequent lines are data records; in our case, these are calendar events. Supported fields include custom event fields. You can export events, event comments, or event signups in CSV export.

#### Step 1: Export the CSV data from Calendar A.

Export the data from Calendar A by following these steps:

1. Open Calendar A and go to Settings &gt; Export Events.
2. Choose the CSV data format.
3. Select the calendar(s) to include and set the date range
4. If there are recurring or one-to-many events, click Show to see the advanced options, then set as needed. See [detailed instructions](https://calendar.teamup.com/kb/bulk-export-calendars-file/#export-events-signups-or-comments-in-csv-format).

![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://teamup.com/14124723/attachment/01GGFWPTNMNJT8DV99KKEK55RP/preview/image.png?hash=0323a2d9d604e1e26bc78bf0ec412585cb3853c402db910f9b20b1f92e7afeb5)</noscript>

When ready, click the green Export button.

#### Step 2: Import the CSV data to Calendar B

We recommend that you use one of our [live demo calendars](https://www.teamup.com/product/live-demos/) to test the import before uploading the file to your calendar. See more details about CSV import [here](https://calendar.teamup.com/kb/import-into-teamup/#the-csv-data-format).

1. Open or create Calendar B. Make sure to have exactly the same custom fields in the destination calendar.
2. Go to Settings &gt; Import Events.
3. Upload the CSV file and Save.

If you have special importing needs, we suggest that you [talk to us first](mailto:support@teamup.com). We might be able to help you with suggestions to make the process easy.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on October 9, 2024 </div><div class="hkb-article-tags"> Tagged: [iCalendar feeds](https://calendar.teamup.com/kb-tags/icalendar-feeds/)[ics](https://calendar.teamup.com/kb-tags/ics/)[import](https://calendar.teamup.com/kb-tags/import/)[sub-calendars](https://calendar.teamup.com/kb-tags/sub-calendars/)[sync](https://calendar.teamup.com/kb-tags/sync/)</div>