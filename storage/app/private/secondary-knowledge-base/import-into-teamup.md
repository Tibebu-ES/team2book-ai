---
title: "Step-by-Step Guide: Importing Data into Teamup"
url: "https://calendar.teamup.com/kb/import-into-teamup/"
---

<meta content="February 11, 2016" itemprop="datePublished"></meta> <header class="hkb-article__header">How to Import Data into Teamup Calendar
=======================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [How to import calendar data](#how-to-import-calendar-data)
    1. [Supported import formats](#supported-import-formats)
    2. [Which format to choose?](#which-format-to-choose)
    3. [Supported sources for data](#supported-sources-for-data)
2. [The iCalendar data format](#the-icalendar-data-format)
    1. [Step 1: Export data from the source calendar](#step-1-export-data-from-the-source-calendar)
    2. [Step 2: Import data into your Teamup calendar](#step-2-import-data-into-your-teamup-calendar)
3. [The CSV data format](#the-csv-data-format)
    1. [Example 1: Simple CSV file](#example-1-simple-csv-file)
    2. [Supported fields in CSV format](#supported-fields-in-csv-format)
    3. [Example 2: File with multi-line event description](#example-2-file-with-multi-line-event-description)
    4. [Example 3: File with custom fields](#example-3-file-with-custom-fields)
4. [Important notes about the CSV import](#important-notes-about-the-csv-import)
    1. [Clearing data ](#clearing-data)
    2. [Specifying sub-calendars](#specifying-sub-calendars)
    3. [CSV fields](#csv-fields)

 </nav> </div><div class="hkb-article__content" itemprop="text">Teamup supports the import of events from other calendar applications, spreadsheets, databases, and text files. Currently, supported import formats are iCalendar files (\*.ics files) and CSV files (text files with comma-separated values).

This article discusses how to import data into your calendar, the iCalendar data format, and the CSV data format.

Note that the import feature is meant for **a one-time transfer of data from a third-party application to Teamup. It can also be used to migrate calendar data from one Teamup calendar to another Teamup calendar**. It does not offer ongoing synchronization. If you need an ongoing synchronization between Teamup and another calendar source, please read about [iCalendar feeds](https://calendar.teamup.com/kb/icalendar-feeds-inbound/).

How to import calendar data
---------------------------

To use the import feature, go to **Settings &gt; Import Events**. The import feature is only available to [calendar administrators](http://calendar.teamup.com/kb/calendar-administrator-link-explained/).

<div class="wp-block-image">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2016/02/241217tu-settings-import-events-1024x576.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2016/02/241217tu-settings-import-events.png)</div>#### Supported import formats

Teamup supports two import formats: iCalendar files (\*.ics files) and CSV files (\*.csv files).

- **iCalendar files** are based on the universally supported iCalendar format created by the Internet Engineering Task Force. Virtually all calendar products support the import and export of calendar data in the iCalendar format, including Microsoft Outlook, Google Calendar, Apple Calendar, and Teamup. The iCalendar format is well suited to migrate calendar data from a third-party calendar product to Teamup.
- **The CSV format** represents data as a comma-separated list of values. CSV stands for **C**omma-**S**eparated **V**alues. It is a text-based format with the first row defining all the field names and the following rows containing the data records. See the [example below](#example-1-simple-csv-file). The CSV format is widely supported by spreadsheet tools and database tools. It is commonly used to exchange data between computer systems and is more generic than the iCalendar format. For example, the CSV format works well to prepare calendar data in a spreadsheet tool like Excel and then import it into Teamup.

#### Which format to choose?

Each format has advantages and limitations. It is important to choose the right format if you need to import data into Teamup.

**Choose the CSV format:**

- If you need to migrate calendar data from one Teamup calendar to another Teamup calendar we highly recommend using the CSV format. It supports the migration of data without any loss of information because it supports Teamup-specific features like multiple sub-calendars per event, custom fields, and the migration of an entire calendar in one file.
- For the backup of Teamup calendar data.
- For the import of calendar data from ERP and CRM systems. Such systems often don’t support the iCalendar format and therefore the CSV format is the only option.
- If you need to compile or edit calendar data in a spreadsheet tool like Excel.

**Choose the iCalendar format:**

- If you need to import calendar data from third-party calendar products like Google Calendar, Microsoft Outlook, Apple Calendar, or similar.

#### Supported sources for data

The import tool currently supports **two sources for data**: Files stored on your computer and files accessible from a link (URL). The second option can be convenient as many calendaring applications support the export of data through iCalendar feeds, which are links (URLs). If a feed is available for the application you are importing from, simply copy and paste this feed URL into the import tool.

The iCalendar data format
-------------------------

If you plan to migrate calendar data from a third-party calendar product, we recommend that you check if it supports the iCalendar format. If you need to import calendar data from another Teamup Calendar, we highly recommend using the CSV format.

#### Step 1: Export data from the source calendar

Export the data from the source calendar in the iCalendar format and store it as a file with the .ics extension.

Here are instructions on how to export data for a few widely used products:

- [Google Calendar](https://support.google.com/calendar/answer/37111?hl=en)
- [MS Outlook](http://www.ehow.com/how_5939155_convert-outlook-calendar-ics.html)
- [Teamup Calendar](https://calendar.teamup.com/kb/bulk-export-calendars-file/)

A few important notes when exporting data from another Teamup calendar:

- - When exporting in the iCalendar format, **each sub-calendar will be exported to its own file**. All files are put into a ZIP archive file when downloading.
    - Note that .ics files do not keep the custom field values in separate fields. Instead, custom field values are appended to the text in the Description field.

#### Step 2: Import data into your Teamup calendar

Import the exported file(s) into the destination calendar:

1. Create a new Teamup calendar if you haven’t done so yet.
2. Go to Settings &gt; Import. This requires administration permission.
3. Import each sub-calendar separately from the respective ics file and name it accordingly. Please note that each import will create a new sub-calendar. It is not possible to import \*.ics files into existing sub-calendars.

### The CSV data format

A CSV file (comma-separated values) stores tabular data in plain text. By default, the delimiter between fields is the comma character. Also supported delimiters are the semicolon (“;”) and the pipe character (“|”). The import tool automatically detects the used delimiter.

If you plan to migrate calendar data from another Teamup calendar, see here [how to export the data](https://calendar.teamup.com/kb/bulk-export-calendars-file/).

The first line of a CSV file is a list of field names, separated by the delimiter character. Subsequent lines are data records; in our case, these represent calendar events.

#### Example 1: Simple CSV file

```
Subject,Start Date,Start Time,End Date,End Time,All Day Event,Location,Who,Description<br></br>Project Meeting,05/12/2024,2:00pm,05/12/2024,4:00pm,False,Conf. Room A,"John, Mark","Agenda"<br></br>Linda in Paris,05/15/2024,,05/15/2024,,True,Paris,Marketing Team,<br></br>Team Meeting,05/15/2024,9:00am,05/15/2024,11:00am,False,Conf. Room B,"Linda, John", Drinks will be served<br></br><br></br>
```

#### Supported fields in CSV format

The following table defines the supported field names and their format.

<table cellpadding="0" cellspacing="5" style="height: 2035px;" width="400"><tbody><tr><td nowrap="nowrap" valign="top">**Field Name**</td><td nowrap="nowrap" valign="top">**Required?**</td><td>**Description**</td></tr><tr><td valign="top">Subject</td><td style="text-align: center;" valign="top">No</td><td>Event title. Up to 255 characters in length.</td></tr><tr><td valign="top">Start Date</td><td style="text-align: center;" valign="top">Yes</td><td>Start date of event. The required date format depends on the configuration of the date format for the calendar (see the Date &amp; Time configuration of your calendar). Supported formats are “12/31/2016”, “31/12/2016” and “31.12.2016.”</td></tr><tr><td valign="top">Start Time</td><td style="text-align: center;" valign="top">No</td><td>Start time of event. 12 hour and 24 hour date formats are supported, for example “2:30pm” and “14:30.”</td></tr><tr><td valign="top">End Date</td><td style="text-align: center;" valign="top">No</td><td valign="top">End date of event. For supported formats see above.</td></tr><tr><td valign="top">End Time</td><td style="text-align: center;" valign="top">No</td><td valign="top">End time of event. For supported formats see above.</td></tr><tr><td nowrap="nowrap" valign="top">All Day Event</td><td style="text-align: center;" valign="top">No</td><td>The *All Day Event* flag defines if an event is an all-day event or an hourly event. Supported values are “True” and “False.” If no value or an unsupported value is specified, “False” is used by default.</td></tr><tr><td valign="top">Location</td><td style="text-align: center;" valign="top">No</td><td>Location of event. Up to 255 characters in length.</td></tr><tr><td valign="top">Who</td><td style="text-align: center;" valign="top">No</td><td>Participants of event. Up to 255 characters in length.</td></tr><tr><td valign="top">RRule</td><td style="text-align: center;" valign="top">No</td><td>Recurrence rule according to [RFC 5545 iCalendar](https://icalendar.org/iCalendar-RFC-5545/3-8-5-3-recurrence-rule.html). An example is “FREQ=WEEKLY;COUNT=3” for an event that repeats weekly for three times. Please note that Teamup supports only a subset of the recurrence rules as defined by the specification. To learn about supported rules, we recommend creating some repeating test events using Teamup in the web browser. Then, export the test events in CSV format to see how the recurrence rules are represented.</td></tr><tr><td valign="top">Exceptions</td><td style="text-align: center;" valign="top">No</td><td>A list of datetime values that represent exceptions to the recurrence rules specified above. Example: “7/13/2023 00:00:00,7/27/2023 00:00:00”.

</td></tr><tr><td nowrap="nowrap" valign="top">Calendar Name</td><td style="text-align: center;" valign="top">No</td><td>Name of sub-calendar into which the event is to be imported. Up to 100 characters in length.

Note that events can be imported into an existing calendar. If no sub-calendar exists with the specified name, a new sub-calendar will be created.

If an event is assigned to multiple sub-calendars, then this field must contain a list of all sub-calendars separated by the pipe character (“|”).

Example:

```
Conf. Room Newton|Auditorium
```

</td></tr><tr><td valign="top">Description</td><td style="text-align: center;" valign="top">No</td><td>Description of event. Up to 16,000 characters in length. Simple formatting of the text is supported following the markdown approach. See [Common Mark specification](http://commonmark.org/help/ "Common Mark Specification") for a 2-minute introduction to markdown formatting.</td></tr><tr><td valign="top">&lt;Custom Field Name&gt;</td><td style="text-align: center;" valign="top">No</td><td>Teamup supports custom event fields. Custom event fields are user defined fields added to calendar events. Currently, three types of custom event fields are supported: Single line text, single choice, multiple choice. The import of values for custom fields is supported and works identically to the standard event fields. See example 3 below.

To ensure successful import with custom fields:

- Make sure the destination calendar has the matching custom fields set up. If they do not exist yet, add them before import. Otherwise the custom field values in the .csv file would be lost.
- Add the name of the custom field to the list of field names (first row)
- Add the field values to the event records (rows 2 to n)
- For multiple choice fields, separate multiple choice values by commas and enclose the entire field in double quotes as shown below: ```
    "choice 1, choice 2, choice 3"<br></br><br></br>
    ```

</td></tr></tbody></table>

#### Example 2: File with multi-line event description

```
"Subject","Start Date","Start Time","End Date","End Time","All Day Event","Location","Who","Description"
"Project Meeting","02/12/2016","2:00pm","02/12/2016","4:00pm","False","Conf. Room A","John, Mark",""
Linda in Paris,02/15/2016,,02/15/2016,,True,Paris,Linda,In case of emergencies I am reachable by email.
"Team Meeting","02/15/2016","9:00am","02/15/2016","11:00am","False","Conf. Room B","Linda, John","## Meeting Agenda
* Project review
* Next steps
* Next meeting
"
"","02/12/2016","","02/12/2016","","True","","","Minimum record values"
```

#### Example 3: File with custom fields

This example shows the import of custom field *Project Type*, which is a multiple-choice field. Three choice values are imported for this field:

```
"Subject","Start Date","Start Time","End Date","End Time","All Day Event","Project Type"
"Project Meeting","02/12/2016","2:00pm","02/12/2016","4:00pm","False","Research, Internal, Not Billable"
```

### Important notes about the CSV import

**When importing data into an existing sub-calendar, existing events will not be updated. Instead, new events will be created.**

#### Clearing data 

⚠️ The import tool supports an option to clear data before import, shown here:

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2016/02/dcf24b5ae7bffee5048eaffdbf714d1a.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2016/02/dcf24b5ae7bffee5048eaffdbf714d1a.png)Use this option with caution: When it is selected, any sub-calendar that has events being imported into it **will be cleared of all existing data (events) as part of the import**.

This option is useful if you want to “clear” a sub-calendar and import a new set of events without keeping the old events. Remember that the option applies to all sub-calendars involved in the import. If you wish to clear only one sub-calendar, but import events to multiple sub-calendars, you must do the import process separately so you can apply the clear data option only to the desired sub-calendar.

#### Specifying sub-calendars

The destination sub-calendar for imported events can be specified either in the CSV file itself or in the import tool for all imported events. CSV files support an optional field “Calendar Name” that can be used to specify the sub-calendar into which an event is imported. If the field “Calendar Name” is not present or not set, then the sub-calendar into which events are imported must be specified in the import tool.

- A CSV file can contain events for multiple different sub-calendars. This makes it possible to export an entire calendar with multiple sub-calendars into one file and use that file to restore the data in another calendar.
- If a sub-calendar specified as the import target does not exist, it is created.
- If a sub-calendar for an event is specified both inside the CSV file and in the import tool, the sub-calendar specified in the CSV file has priority.

#### CSV fields

- The order of fields does not matter. However, it is important that all lines, including the header line, use the same field order.
- Field values can span multiple lines.
- Field values must be wrapped in quote characters (“…”) if the field values contain the field delimiter (comma, semicolon, or pipe character) or span multiple lines. Otherwise, quotes are optional.
- If a field value contains the quote character, it must be escaped by doubling it, e.g. a field value of 
    - ```
        "The importance of the "" character"
        ```
    - will be imported as
    - ```
        The importance of the " character
        ```

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on May 26, 2026 </div><div class="hkb-article-tags"> Tagged: [copy calendar](https://calendar.teamup.com/kb-tags/copy-calendar/)[csv](https://calendar.teamup.com/kb-tags/csv/)[FAQ](https://calendar.teamup.com/kb-tags/faq/)[ics](https://calendar.teamup.com/kb-tags/ics/)[import](https://calendar.teamup.com/kb-tags/import/)[sub-calendars](https://calendar.teamup.com/kb-tags/sub-calendars/)</div>