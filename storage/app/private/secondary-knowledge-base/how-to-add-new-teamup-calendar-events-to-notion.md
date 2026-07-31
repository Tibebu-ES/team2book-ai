---
title: "How to Add New Teamup Calendar Events to Notion"
url: "https://calendar.teamup.com/kb/how-to-add-new-teamup-calendar-events-to-notion/"
---

<meta content="July 7, 2023" itemprop="datePublished"></meta> <header class="hkb-article__header">How to Add New Teamup Calendar Events to Notion
===============================================

 </header></head><body><div class="ht-mobile-toc">**Contents** <nav id="navtoc" role="navigation">1. [Set up a Notion table](#set-up-a-notion-table)
2. [Send new Teamup Calendar events to Notion](#send-new-teamup-calendar-events-to-notion)
    1. [Set up the Teamup trigger](#set-up-the-teamup-trigger)
        1. [Test the Teamup trigger](#test-the-teamup-trigger)
    2. [Set up the Notion action](#set-up-the-notion-action)
        1. [Customize the Notion database](#customize-the-notion-database)
    3. [Test the Zap](#test-the-zap)

 </nav> </div><div class="hkb-article__content" itemprop="text"><script src="https://cdn.zapier.com/packages/partner-sdk/v0/zapier-elements/zapier-elements.esm.js" type="module"></script>

Your Notion database doesn’t have to remain static with just notes, ideas, and tables. It can be transformed into a dynamic hub of information with the help of powerful automation.

One effective method is automatically syncing Teamup Calendar events with your Notion database using Zaps — Zapier’s automated workflows. This automation allows you to capture important details like event time, participants, and description, consolidating all your vital information within Notion without any additional effort.

Set up a Notion table
---------------------

To ensure a well-organized data flow, you’ll need to set up a table in Notion where all the Teamup Calendar data can be seamlessly integrated.

- In your Notion account, create a new page.
- Add a new table (from the list of suggestions). While you can import existing data, starting with a blank database is recommended in this case.
- Within the table, create columns that correspond to the data you wish to capture from Teamup Calendar. For this example, let’s create four columns: Event Title, Start Date, End Date and Description.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-1.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-1.png)

**Send new Teamup Calendar events to Notion**
---------------------------------------------

Zapier allows you to create automated workflows known as Zaps, which facilitate the transfer of information between different applications. You can build a Zap from scratch (no coding knowledge required) or use a pre-designed templates to get started quickly.

If you prefer using a template, [click here](https://zapier.com/apps/notion/integrations/teamup-calendar/1526597/add-new-teamup-calendar-events-to-databases-in-notion) to be directed to the Zap editor.

### **Set up the Teamup trigger**

Let’s begin by configuring the trigger — the task that initiates your Zap.

If you’re using a Zap template, this step will already be pre-selected for you. Otherwise, follow these steps:

1. Search for **Teamup Calendar** and select it as the trigger app
2. Choose **New Event** as the trigger event.
3. Click **Continue** to proceed.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/01-teamup-1.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/01-teamup-1.png)

If you haven’t connected your Teamup Calendar yet, you will be prompted to do so. Once you’ve connected, click **Continue**.

Now it’s time to set up your trigger.

- In the **Sub-calendar field**, select the specific calendar you wish to use.
- Click **Continue.**

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/01-teamup-2.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/01-teamup-2.png)

#### Test the Teamup trigger

To ensure your trigger step is properly configured you’ll need to perform a test.

If your Teamup Calendar doesn’t have any events, create a test event now. This test event is necessary for Zapier to set up the remaining steps of your workflow.

- Click **Test Trigger** to run the test. Zapier will display the details of the event you just created.
- Once you’ve confirmed that the details are correct, click **Continue** to proceed with setting up the action step.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/01-teamup-3.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/01-teamup-3.png)

### **Set up the Notion action**

Now it’s time to configure the action — the task your Zap will perform when triggered.

If you’re using a Zap template, the action steps will already be pre-selected. Otherwise, follow these steps:

1. Search for **Notion** as your action app.
2. Select **Create Database Item** as the action event.
3. Click **Continue** to proceed.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-2.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-2.png)

If you’ve already connected your Notion account, it will automatically appear.

If not, click **Sign In** to connect your Notion account. Then choose the workspaces that contain the database you want to work with and click **Allow Access** to establish the connection with Zapier.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-3.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-3.png)

After connecting your Notion account, click **Continue**.

#### Customize the Notion database

Now it’s time to customize the database.

1. **Select the database** you created in the **Database field**.![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-4.png)</noscript>
2. Map the data from your Teamup Calendar to the corresponding columns you created in Notion. The Zap editor will display the columns you created. 
    - Click on each field and select the appropriate Teamup Calendar data from the options provided in the **Insert Data dropdown**. For example, choose Event Title for the Event Title field.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-5.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-5.png)

Here’s what our finished mapping looks like.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-6.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-6.png)

Once you’re satisfied with your action step, click **Continue**.

### Test the Zap

Click **Test Action** to perform a test run of your Zap.

If the test is successful, you should see your Teamup Calendar event correctly added to your Notion database.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-7.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-7.png)

You can also verify if the data appears correctly in your Notion database. Here’s an example of how our test run looked in the Notion.

[![](https://calendar.teamup.com/wp-content/plugins/native-lazyload/assets/images/placeholder.svg)<noscript>![](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-8.png)</noscript>](https://calendar.teamup.com/wp-content/uploads/2023/06/02-notion-8.png)

If everything appears as expected, your Zap is now ready to use. Going forward, every time you create a new event in your Teamup Calendar, it will automatically populate your Notion database.

 </div><div class="hkb-article__lastupdated" itemprop="dateModified"> Updated on July 21, 2023 </div><div class="hkb-article-tags"> Tagged: [automation](https://calendar.teamup.com/kb-tags/automation/)[integrate](https://calendar.teamup.com/kb-tags/integrate/)[Notion](https://calendar.teamup.com/kb-tags/notion/)[sync](https://calendar.teamup.com/kb-tags/sync/)[zap](https://calendar.teamup.com/kb-tags/zap/)[Zapier](https://calendar.teamup.com/kb-tags/zapier/)</div>