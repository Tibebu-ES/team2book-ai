---
title: "How Refresh Works on the Teamup App"
url: "https://calendar.teamup.com/kb/how-refresh-works-on-teamup-mobile-apps/"
---

<meta content="July 13, 2022" itemprop="datePublished"></meta> <header class="hkb-article__header">How Refresh Works on the Teamup App
===================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Partial refresh or full refresh](#partial-refresh-or-full-refresh)
2. [When to expect a partial refresh](#when-to-expect-a-partial-refresh)
3. [When to expect a full refresh](#when-to-expect-a-full-refresh)

 </nav> </div><div class="hkb-article__content" itemprop="text">The Teamup app (iOS, Android) is free and provides convenient access to your Teamup calendars. Here’s how refresh works the Teamup app.

Partial refresh or full refresh
-------------------------------

There are two refresh types that happen in the Teamup mobile apps:

- **Partial refresh:** In this case, the server sends only events that changed since the last refresh to the mobile device. This type of refresh is fast and light.
- **Full refresh:** In this case, the server sends all events for the current month to the Teamup app. The app deletes all locally stored events and inserts the event data from the server. This type of refresh is slower since it involves much more data, but it is always correct since it is a 1:1 representation from the server to the app.

When to expect a partial refresh
--------------------------------

To avoid slowing down app performance, partial refresh is used frequently:

- When the Teamup app is started.
- When the Teamup app is brought into the foreground.
- Every 5 minutes when the Teamup app is open.
- Whenever an event is changed (created, edited, deleted) or refreshed.

When to expect a full refresh
-----------------------------

<figure aria-describedby="caption-attachment-7894" class="wp-caption alignright" id="attachment_7894" style="width: 202px">[![A Teamup app screen shows the refresh button, in the left sidebar.](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![A Teamup app screen shows the refresh button, in the left sidebar.](https://calendar.teamup.com/wp-content/uploads/2022/07/refresh-button-teamup-apps-296x300.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2022/07/refresh-button-teamup-apps.png)<figcaption class="wp-caption-text" id="caption-attachment-7894">*The refresh button is on the left sidebar.*</figcaption></figure>Since a full refresh is slower and transports more data, it occurs less often:

- When a user manually taps the Refresh button in the left sidebar. The left sidebar always shows the time when the data was last refreshed. See screenshot.
- Once every 24 hours, a full refresh is performed.

This combination of partial and full refresh allows the apps to stay updated without getting slowed down. However, at any time you can tap the Refresh button for a full refresh of the Teamup app.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on August 7, 2024 </div><div class="hkb-article-tags"> Tagged: [calendar data](https://calendar.teamup.com/kb-tags/calendar-data/)[mobile app](https://calendar.teamup.com/kb-tags/mobile-app/)[refresh](https://calendar.teamup.com/kb-tags/refresh/)[sync](https://calendar.teamup.com/kb-tags/sync/)[Teamup app](https://calendar.teamup.com/kb-tags/teamup-app/)</div>