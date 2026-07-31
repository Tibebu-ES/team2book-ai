---
title: "Administrator Guide: Setting Up Slack Integration with Teamup Calendar"
url: "https://calendar.teamup.com/kb/teamup-slack-integration-group-channels/"
---

<meta content="May 22, 2016" itemprop="datePublished"></meta> <header class="hkb-article__header">Connect Teamup with Slack (Calendar Administrators)
===================================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Get Teamup notifications in Slack](#get-teamup-notifications-in-slack)
2. [Set up a Slack integration](#set-up-a-slack-integration)
    1. [Step 1: Connect Teamup and Slack](#step-1-connect-teamup-and-slack)
        1. [Setting the notification permission](#setting-the-notification-permission)
    2. [Part 2: Configure notifications](#part-2-configure-notifications)
        1. [Set up notifications for all calendars](#set-up-notifications-for-all-calendars)
        2. [Set up notifications for individual calendars](#set-up-notifications-for-individual-calendars)
    3. [Test the Slack integration](#test-the-slack-integration)
3. [Manage Slack notifications](#manage-slack-notifications)

 </nav> </div><div class="hkb-article__content" itemprop="text">With a Teamup-Slack integration, your team can be instantly notified of changes on your Teamup Calendar via Slack channels.

Having Teamup notifications sent to Slack can help your team stay up-to-date on plans and schedules, streamline communication, and reduce the number of emails and messages to process.

This article explains how the calendar [administrator](http://calendar.teamup.com/kb/calendar-administrator-link-explained/) **can connect Teamup with Slack and post Teamup change notifications to Slack channels.** Other calendar users, see [this article](http://calendar.teamup.com/kb/teamup-slack-integration-private-channel/).

Get Teamup notifications in Slack
---------------------------------

<figure class="wp-block-image">![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/slack-group-channel-1.png)</noscript></figure>The Slack integration enables pop-up alerts on desktop or mobile devices via your Slack app. If your team frequently communicates via Slack, having calendar notifications there can make it easier for everyone to stay updated.

Note that changes to past events will only trigger notifications if the calendar is on a [paid plan](http://www.teamup.com/pricing/).

Set up a Slack integration
--------------------------

### Step 1: Connect Teamup and Slack

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-admin-slack-notifications-1024x576.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-admin-slack-notifications.png)

1. Open Teamup in a browser.
2. Go to **Settings &gt; Notifications**.
3. Click **New**.
4. Select **Slack Notifications.**
5. Select a **calendar user or secure link** to use for the [**notification permission**](#permission). Click **Continue.**  
    [![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-slack-admin-select-user-link.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-slack-admin-select-user-link.png)
6. On the next screen, click **Add to Slack**.   
    [![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-slack-admin-add-to-slack.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-slack-admin-add-to-slack.png)

This will take you to Slack.com to obtain the necessary authorization:

- If prompted, log into Slack.
- Select the **Slack team** and **channel.**
- Click **Allow.**

After authorizing Teamup, you will be redirected back to Teamup settings to complete the integration.

#### Setting the notification permission

Each Teamup notification sent to Slack will contain links back to the event and the calendar. The user or link you choose determines the access level applied to those notification links.

If you choose a user, only other authorized users will be able to open the notification links.

If you choose a link, be sure it is a link **with access permissions that are appropriate for all members of the channel.** Use a read-only link or [create a customized link](http://calendar.teamup.com/kb/share-selected-calendars/) specifically for the members of the Slack channel.

### Part 2: Configure notifications

After completing authorization, you’ll be taken back to Teamup settings to configure the notifications sent to Slack.

In the **Sub-Calendars** section:

1. Set up notifications for **all sub-calendars** at once or **individually for each sub-calendar**.
2. Select the notification type: **All changes, New events,** or **Important changes.** Important changes include newly created events and date/time changes to existing events.
3. When done, click **Save.**

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-slack-admin-choose-triggers.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2017/06/250707tu-slack-admin-choose-triggers.png)

#### Set up notifications for all calendars

In the **All calendars** row, click the **Changes** menu and select the notification type. Click **Save.**

#### Set up notifications for individual calendars

For each calendar, click the **Changes** menu and select the notification type for that sub-calendar. Select **None** if you do not want any notifications for a particular calendar. Click **Save.**

### Test the Slack integration

- Add a new (future) event or make a change to a future event on your Teamup calendar.
- The change notification should appear on your chosen Slack channel within seconds.
- Click on the calendar name in the post on your Slack channel and the calendar opens. Make sure that **the calendar link is the one you intended to use and appropriate for all** members of the channel, in particular, that it is not a link with the administrator rights or other inappropriate modifying permissions.

Manage Slack notifications
--------------------------

1. Open Teamup in a browser.
2. Go to **Settings &gt; Notifications** to see an overview of all existing notifications. The list will include all notifications set up by all users. [Filter](https://calendar.teamup.com/kb/managing-notifications/#filter-notification-subscriptions) to see only the Slack notifications.
3. Use the toggle to deactivate or activate a notification subscription.
4. Click the pencil icon to modify or delete notifications.
5. If you want to remove the Teamup-Slack integration completely, it’s also important to remove it within Slack: Go to the [app directory](https://teamup-calendar.slack.com/apps/A01RG0D6N5A-teamup), select the Configuration tab, and revoke the respective authorizations.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on July 9, 2025 </div><div class="hkb-article-tags"> Tagged: [admin](https://calendar.teamup.com/kb-tags/admin/)[integration](https://calendar.teamup.com/kb-tags/integration/)[notifications](https://calendar.teamup.com/kb-tags/notifications/)[slack](https://calendar.teamup.com/kb-tags/slack/)[sync](https://calendar.teamup.com/kb-tags/sync/)</div>