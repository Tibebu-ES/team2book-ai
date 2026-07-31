---
title: "How to Bulk Export Calendar Data from Teamup: Step-by-Step Tutorial"
url: "https://calendar.teamup.com/kb/bulk-export-calendars-file/"
---

<meta content="May 23, 2016" itemprop="datePublished"></meta> <header class="hkb-article__header">How to Bulk Export Calendar Data
================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [The bulk export feature](#the-bulk-export-feature)
    1. [Supported formats: ICS or CSV](#supported-formats-ics-or-csv)
2. [How to export events (ICS or CSV)](#how-to-export-events-ics-or-csv)
    1. [Export events in ICS format](#export-events-in-ics-format)
    2. [Export events in CSV format](#export-events-in-csv-format)
        1. [Advanced options for exporting events](#advanced-options-for-exporting-events)
3. [Export event signups or event comments (CSV)](#export-event-signups-or-event-comments-csv)
    1. [Export event signups](#export-event-signups)
    2. [Export event comments](#export-event-comments)

 </nav> </div><div class="hkb-article__content" itemprop="text">Calendar administrators can use **the bulk export feature** to export **calendar data, including events, event signups, and/or event comments** to a file.

---

The bulk export feature
-----------------------

To use the bulk export option (available only to [calendar administrators](https://calendar.teamup.com/kb/calendar-administrator-link-explained/)), open your calendar in a web browser.

**Go to Settings &gt; Export Events.**

<div class="wp-block-image"><figure class="aligncenter">![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2019/11/exportevents1-1024x627.png)</noscript></figure></div>#### Supported formats: ICS or CSV

Teamup supports two file formats for exporting calendar data:

- **iCalendar format (ICS, with .ics extension)**: The iCalendar format is a standardized format for the exchange of calendar data among calendaring products. This format is useful for backup or the migration of calendar data from one product to another product. It provides full support for repeating events.
- **CSV format (comma-separated values, with .csv extension)**: The CSV format is well-supported by spreadsheet tools like MS Excel and many database products. You can export events, event signups, and/or event comments in the CSV format. If you plan to migrate calendar data from one Teamup calendar to another Teamup calendar we highly recommend using the CSV format. It supports the migration of data without any loss of information because it supports Teamup-specific features like multiple sub-calendars per event, custom fields, and the migration of an entire calendar in one file.

<figure class="wp-block-image">![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2019/11/exportevents2.png)</noscript></figure>### How to export events (ICS or CSV)

#### Export events in ICS format

1. **Choose iCalendar (.ics) for the export format.**
2. **Select the calendar(s) to include.**
3. **Set the date range.**
4. **Click the green Export button**.

Important notes:

- When exporting to an ICS file, **each sub-calendar will be exported to its own file**. All files are zipped in one file when downloading.
- Note that ICS files do not keep the custom fields in separate fields, but appended to the text in the Description field. If you do not have custom fields, the ICS format is a good choice. If you do have custom fields, consider using CSV file format (see below for details).

#### Export events in CSV format

1. **Choose Comma Separated Values (.csv) for the export format.**
2. **Select the calendar(s) to include.**
3. **Set the date range.**
4. **Click the green Export button**.

##### Advanced options for exporting events

In the Export Events dialog, scroll to **Advanced Options** and click the blue **Show button**.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2016/05/tu-export-events-advanced-878x1024.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2016/05/tu-export-events-advanced.png)

Advanced options:

- Date format
- Unique event identifier
- How to handle multiple sub-calendars per event: one row, or one row per sub-calendar. 
    - In Teamup, events can be associated with multiple sub-calendars. If you want to maintain that association, select “One row”. Otherwise, one record will be exported for each sub-calendar that is associated with an event.
- How to handle repeating events: “One row for each event instance”, or “One row for entire event series”. 
    - Option “One row for each event instance” will export a record for each instance of a repeating event. Information about the repeating characters of a an event is lost.
    - Option “One row for entire event series” will export one single record to represent a repeating event. Choose this option if you plan to import the exported data into another Teamup calendar.

### Export event signups or event comments (CSV)

![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2019/11/exportevents3.png)</noscript>

1. **Choose Comma Separated Values (.csv) for the export format.**
2. **Select the calendar(s) to include.**
3. **Set the date range.**
4. **Click Show to see the advanced options and set as desired.** (See details below.)

#### Export event signups

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2016/05/export-event-signups-1024x1005.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2016/05/export-event-signups.png)

Select Comma Separated Values (.csv) for the export format, select the calendar(s) to include, and set the date range.

In Advanced Options &gt; What section, click the button next to **Event Signups**, then set the advanced options as preferred:

- Preferred date format
- Unique signup identifier
- Signups on repeating events exported with one row for each event instance or one row for the entire event series.

#### Export event comments

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2016/05/export-event-comments-1002x1024.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2016/05/export-event-comments.png)

Select Comma Separated Values (.csv) for the export format, select the calendar(s) to include, and set the date range.

In Advanced Options &gt; What section, click the button next to **Event Comments**, then set the advanced options as preferred:

- Preferred date format
- Unique comment identifier
- Comments on repeating events exported with one row for each event instance or one row for the entire event series.

*Keywords: transfer, backup, migrating calendar data*

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on February 18, 2025 </div><div class="hkb-article-tags"> Tagged: [bulk export](https://calendar.teamup.com/kb-tags/bulk-export/)[export](https://calendar.teamup.com/kb-tags/export/)[import](https://calendar.teamup.com/kb-tags/import/)[sub-calendars](https://calendar.teamup.com/kb-tags/sub-calendars/)</div>