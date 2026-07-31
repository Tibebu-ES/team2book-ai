---
title: "Teamup Calendar Security: Protecting Your Data and Privacy"
url: "https://calendar.teamup.com/kb/secure-teamup-calendar/"
---

<meta content="March 11, 2015" itemprop="datePublished"></meta> <header class="hkb-article__header">Is Teamup Calendar Secure?
==========================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Working with users, groups, and links](#working-with-users-groups-and-links)
2. [Calendar security with shareable links](#calendar-security-with-shareable-links)
3. [Sharing and saving links](#sharing-and-saving-links)
4. [Encryption](#encryption)
5. [Data backup](#data-backup)
6. [Privacy policy](#privacy-policy)
7. [Certification and compliance](#certification-and-compliance)
8. [User steps to better protect calendar data](#user-steps-to-better-protect-calendar-data)

 </nav> </div><div class="hkb-article__content" itemprop="text">At Teamup Calendar, we take the security and privacy of your data very seriously. This article provides information about how Teamup protects your data, and suggests some steps you can take to maintain the security of your calendar.

---

### Working with users, groups, and links

**You can grant calendar access to Teamup registered [users and groups](https://calendar.teamup.com/kb/how-to-share-your-teamup-calendar-users-groups-links/). This is the recommended method for ongoing calendar access for your team, employees, volunteers, or other organizational scenario. Account-based access provides the needed security for managing users and maintaining calendar security. Learn more about [sharing your calendar with users and groups here](https://calendar.teamup.com/kb/how-to-share-your-teamup-calendar-users-groups-links/).**

### Calendar security with shareable links

Access to a Teamup Calendar can be granted via shareable link when appropriate:

- [ Embedding](https://calendar.teamup.com/kb/embed-teamup-calendar/) a calendar.
- Sharing a calendar with a [social group](https://calendar.teamup.com/kb/teamup-facebook-groups/).
- Sharing a calendar with [the public](https://blog.teamup.com/create-a-public-calendar-for-members/).
- In some cases (if security is not an issue), providing [temporary calendar access](https://www.teamup.com/learn/product-tips/give-someone-temporary-calendar-access/).

If the calendar contains confidential information, always use account-based access for better security. [See here](https://calendar.teamup.com/kb/how-to-share-your-teamup-calendar-users-groups-links/) for details about working with account-based access for individual users and groups.

When calendar access via shareable link is preferred, calendar administrators can [create shareable links](http://calendar.teamup.com/kb/share-calendars-access-permissions/) with customized access permissions. Be sure to set the permission appropriately to avoid unauthorized changes to the calendar. See more about [managing calendar links](https://calendar.teamup.com/kb/managing-calendar-urls/).

A basic level of security is built into **shareable calendar links**. These links are ‘secret’ and contain random strings that are virtually impossible to guess. They are also not visible to search engines.

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/teamup-security-1.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/teamup-security-1.png)</figure></div>A Teamup Calendar link with the random string is also called a **capability URL**. For more details about capability URLs and their security aspects please see [this article](https://www.w3.org/TR/capability-urls/).

### Sharing and saving links

It is not possible to customize a calendar link. However, there are several ways to make shareable links easily accessible:

- Create a [Teamup user account](https://calendar.teamup.com/kb/using-teamup-user-account/) and add all your calendar links to the calendar dashboard. User accounts are free and optional. They provide an easy way to access all your Teamup calendar links. Learn [more about user accounts](https://calendar.teamup.com/kb/using-teamup-user-account/).
- Bookmark your calendar link in your browser.
- Add a calendar link to your browser’s default opening pages.
- [Create a shortcut](https://calendar.teamup.com/kb/shortcuts-2/) to your calendar link on your desktop.
- Add the calendar links to your [mobile apps](http://calendar.teamup.com/kb/teamup-mobile-app/), which allows you to access your calendar any time, anywhere, even if you have no Internet connection. You can also use the link from within your mobile app to open your calendar on a mobile browser. See [instructions for iOS](https://calendar.teamup.com/kb/access-teamup-calendar-in-a-mobile-browser-ios/) or [instructions for Android](https://calendar.teamup.com/kb/access-calendar-mobile-browser/).
- For an easier-to-remember link for a **public** **calendar**, create a web page with a link you want, and [embed your public calendar](http://calendar.teamup.com/kb/embed-teamup-calendar/). Then share the link to the web page. Creating [a QR code for the public link](https://www.instagram.com/p/Bx0ZpVCJW9T/) is another way to make access easier with a smart phone. If sharing your calendar publicly or embedding it on a webpage, use a shareable link with [read-only access](https://blog.teamup.com/2019/02/04/what-are-read-only-and-read-only-no-details-access-permissions/) to prevent unauthorized changes to your calendar.

### Encryption

- All communication between calendar users and Teamup Calendar servers is always encrypted using the HTTP over SSL protocol. You can see this in the address bar of your browser. Old links that don’t use the HTTPS protocol will automatically be redirected to use HTTPS.

<div class="wp-block-image"><figure class="aligncenter">[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2018/08/teamup-security-2.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2018/08/teamup-security-2.png)</figure></div>- Calendar data stored on disk is encrypted (encryption of data at rest).
- Employees of Teamup responsible for operating the service and supporting users must, by necessity, have access to calendar data that is not encrypted. All employees with access to unencrypted calendar data are committed contractually to treat calendar data with the highest confidentiality.

### Data backup

We have implemented high standards to prevent the loss of data:

- Calendar data is continually replicated from the main database server to two independent, remote servers. In case of an outage of the main database server, one of the remote servers will take over.
- Calendar data is backed up periodically and supports point-in-time recovery.

### Privacy policy

The security and privacy of your data are taken seriously at Teamup. We will never use your information or share your information for purposes that are not strictly related to operating the Teamup service. For more information, please review our [Privacy Policy](http://www.teamup.com/privacy-policy.html).

Teamup’s servers are hosted with premium hosting providers in Oregon (United States) and Dublin (Ireland).

### Certification and compliance

- Data center is certified SOC 2 Type II.
- Payments are executed by [stripe.com](https://www.stripe.com/), a PCI Level 1 service provider.
- [Teamup Data Processing Agreement](https://www.teamup.com/dpa/) provides the details of how Teamup is compliant with the General Data Protection Regulation (GDPR).

### User steps to better protect calendar data

Here are some practices for calendar administrators and users that will help maintain the security and privacy of your calendar and calendar data.

- Enable [user account-based access](https://calendar.teamup.com/kb/what-are-user-accounts/) instead of shareable links.
- Periodically review calendar access in **Settings &gt; Sharing.**  Ensure that all users and groups are still entitled to access the calendar with the assigned permissions, and all shareable links are set up with [the appropriate permission levels](http://calendar.teamup.com/kb/share-calendars-access-permissions/).
- You can deactivate, modify, or delete a user or group or calendar link at anytime. See [how to manage calendar links](http://calendar.teamup.com/kb/managing-calendar-urls/).
- If a shareable link is given to a group, and one individual should no longer have calendar access, delete the link and create a new shareable link for those who still need access. The delete option is available in **Settings &gt; Sharing**. Learn more [about managing calendar links](http://calendar.teamup.com/kb/managing-calendar-urls/).
- Work with [account-based access](https://calendar.teamup.com/kb/how-to-share-your-teamup-calendar-users-groups-links/) for members of your organization. This ensures a greater level of security and control, and is easier to manage calendar administrators. If an employee leaves your organization, you can simply **remove that** employee from your users or groups.
- If you have enabled calendar users to subscribe to [iCalendar feeds](http://calendar.teamup.com/kb/subscribe-teamup-calendar-feed-from-other-calendars/) from your Teamup Calendar, and want to prevent a departing employee from accessing the feeds, you can **disable or delete the calendar link** used to create the feeds.
- Periodically review who has subscribed to [email notifications](http://calendar.teamup.com/kb/use-teamup-notifications/) and [daily agenda emails](http://calendar.teamup.com/kb/how-to-use-teamup-daily-agenda/) in **Settings &gt; Notifications**. The calendar administrator can subscribe or unsubscribe users if needed.
- For calendar administrators: if you created your Teamup calendar prior to September 2020, you may be accessing your calendar with an administrator link. Switch to[ account-based access ](https://blog.teamup.com/2019/10/07/secure-a-compromised-administrator-link/)as soon as possible. Then delete the administrator link. This practice reduces the risk of accidentally sharing administration access to the calendar.
- Teamup supports the export of calendar data. This can be useful in cases where the Internet is temporarily not available. Learn [how to save data to a PDF file](http://calendar.teamup.com/kb/backup-calendar-data/) or [export calendar data](http://calendar.teamup.com/kb/bulk-export-calendars-file/).

*Keywords: Data privacy, security, password protection, access control*

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on April 10, 2025 </div><div class="hkb-article-tags"> Tagged: [Data privacy](https://calendar.teamup.com/kb-tags/data-privacy/)[Data protection](https://calendar.teamup.com/kb-tags/data-protection/)[FAQ](https://calendar.teamup.com/kb-tags/faq/)[Https](https://calendar.teamup.com/kb-tags/https/)[password protection](https://calendar.teamup.com/kb-tags/password-protection/)[secret URLs](https://calendar.teamup.com/kb-tags/secret-urls/)[security](https://calendar.teamup.com/kb-tags/security/)[Sharing](https://calendar.teamup.com/kb-tags/sharing/)</div>