---
title: "Explore The Advanced Features Of Team2book - Scheduling App"
url: "https://team2book.com/tutorials/advanced-module"
---

Introduction 
-------------

In this tutorial, we’ll overview the advanced features and guide you to use them effectively. Currently, two tabs divide the advanced features: Configuration Threshold and Assigner Parameters.

<figure class="wp-block-image">![Team2book tutorials](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Team2book tutorials](https://lh3.googleusercontent.com/UXqLZv9tkq3QSW6AnBMDwgjpQW9s0yWtYxxqUQE0MW-k0WJTyhmTjlbf4H3ii-g0uB6TxetlHFP0rJlk1K0YRRfaH1I_42OH3n_vuQ4G2KB_2fsr8yvj-2-mX8CsVkyihJ7knS1UQML_0FVTS2hZXoQ)</noscript></figure>The Configuration Threshold section allows you to configure thresholds for various aspects, namely Free Resources, Consumers Availability, and Resource Events.

Moving on to the Assigner Parameters section, you will find additional settings to fine-tune the consumer assignment process. Here, you can set the minimum gap between consecutive special events. Furthermore, the Assigner Parameters section enables you to enable the consecutive assignment of consumers in a row.

To access the Advanced Menu in [Team2Book](https://team2book.com/), please follow these steps:

1. Start by logging into your Client Manager Team2Book account. Once you log in, Team2Book will direct you to its homepage.
2. Look for the “Members Area” tab on the homepage and click on it.
3. Inside the Members Area, you will find a menu.
4. Locate and click on “Client Dashboard” in the menu.

<figure class="wp-block-image">![Team2book guide
](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Team2book guide
](https://lh3.googleusercontent.com/3z7QM78-WYlNui_tMz3nN2jB7peMR9S8IHC9Qydtp-Q79pwv5h9-OZuxYpB7xAm6eai9CPgT0EET5VwgdYSJLaJMOl1KcpNTbjPrOvRp8ZNX_JwyTHqXD3xbIkRNmSLrj6hTbbl5yl4_P_JCNC-3NYE)</noscript></figure>5. On the Client Dashboard, navigate to the bottom left corner of the screen.
6. In that area, you will see an option labeled “Advanced.” Click on it to access the Advanced Menu.

<figure class="wp-block-image">![advanced features](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![advanced features](https://lh3.googleusercontent.com/_tKMxychR2wAdeLs2v1YgHR8XJltQL213TleuhdzLUoxYnYCcmekuWikW1xzEXZeOphJHjq5yezxunZICsxxi6HU-4pF_lc3H_QuWqzDT6OW5-BIkG6qDfU0E8AL3gb7NXjHHO-9tTOlQRuW1MQ4ikE)</noscript></figure>Let’s delve into the details of each tab.

Configuration Threshold
-----------------------

With the Configuration Threshold feature in Team2Book, set specific time intervals or hours for parameters. Here are the key settings you can adjust:

1. **Ignore Free Resources Less Than (hours):** By configuring this parameter, you can determine the minimum duration for which a resource needs to be available to be displayed on the “Free Resources” sub-calendar. For example, if you set it to 2 hours, any free resource available for less than 2 hours will not be shown on the sub-calendar.

<figure class="wp-block-image">![configurations](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![configurations](https://lh3.googleusercontent.com/l1jWEpmXajClIe82JPWwEbaN_EgtDI_UMhZyrkxrW73DJbN8P8QqedZ_Wf9KmvJNYmAfAg-SwRYm-t0A6i02gG4bBq38_iGZxjghrSHP4AgKsQ2WrFFEnSP52--obZvayQTrJglGjf7N87unBbqsflU)</noscript></figure>In Team2Book, enabling free resources and booking options displays all resources on a separate sub-calendar. Consumers can then reserve resources using their availability sub-calendar. However, by utilizing the threshold configuration advanced features, you can set specific hour values. By setting “Ignore Free Resources Less Than,” resources with short availability won’t appear on the “Free Resources” sub-calendar.

2. **Ignore Consumers Availability Less Than (hours):** This setting allows you to define the minimum time interval that a consumer needs to be available in order to be eligible for resource assignment. For instance, if you set it to 3 hours, the scheduler will not assign a resource to a consumer if their availability is less than 3 hours.

<figure class="wp-block-image">![Ignore Consumers Availability Less Than (hours):](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Ignore Consumers Availability Less Than (hours):](https://lh3.googleusercontent.com/5UyapbPa2-B9-FVHZt21v5VFbr3Vwd6rxBF7lP9vbm92Z75F3wNhG7byHMOMhiIjDkTeHCfKEfvlV0f_kstWkoSa9o5EQRaXqUr9OdRtHCuBtndUjQrB-a_eouxHwzPpHfU-CB3OA3DdcpNSckIJ_VQ)</noscript></figure>Similarly, in Team2Book, the scheduler assigns a resource to a consumer if the consumer’s availability aligns. By configuring “Ignore Consumers Availability Less Than,” the scheduler won’t assign resources to consumers with availability below the specified hour value, enabling efficient scheduling in Team2Book.

3. **Desired Minimum Gap Between Resource Events (hours):** With this configuration, you can specify the minimum time gap required between consecutive resource events. For example, if you set it to 1 hour, there must be at least a 1-hour gap between two resource events for the same resource. Team2Book will attempt to assign consumers to its preferred resource if that resource is free for at least X hours after a previous assignment. If the number of resources is insufficient, Team2Book will ignore this parameter.

<figure class="wp-block-image">![Desired Minimum Gap](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Desired Minimum Gap](https://lh3.googleusercontent.com/4ycPbtX1npmMg04XSkEw9r-9-jaS7zfbICb5vBoOTQzF-Jqxvkuos3h2BrCwjU2hnyXqzN27Jab9_HWieDV6kVg6AVZOa736XJoqBzLHu_ajRhKeWhiNkclqOBPsCpKPVIbxPP2tanf-TY5tay7HZnU)</noscript></figure>Constraint Tolerance For Different Time Intervals
-------------------------------------------------

In Team2Book, the concept of constraint refers to the minimum number of available consumers required within a specific time duration. The Constraint Tolerance configuration offers flexibility to modify tolerance values based on clients’ needs.

Customize constraint tolerance levels for different time intervals with the feature “Constraint Tolerance For Different Time Intervals.” The following parameters are available for configuration:

1. **Constraint Tolerance – Morning (hours):** With this parameter, you can define the constraint tolerance for the morning time interval. Team2Book considers a consumer present if available between start of day + X hours and lunchtime – X hours. This parameter applies only to the constrained section of the dashboard.

For example, setting the value of this field to 1.

<figure class="wp-block-image">![Constraint Tolerance - Morning (hours)](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Constraint Tolerance - Morning (hours)](https://lh4.googleusercontent.com/S3EjkW-TaGdJvsaV67Ui5DhzJ48PoxOsV_q3jAI8ziNyD4QPxQHfOzosJZRwDVSNVvYiWF90L2YXXWaEqqxl_gURJ8QXKYQq46dO2NmXjRl7luiCNACt6offpCt4_S2oxMw4EuCY6EJwKCSu_FBQQdU)</noscript></figure>For example, let’s assume your organization’s working day is from 8:30 a.m. to 5 p.m., with lunchtime starting at 12:30 p.m. If the value of this field is set to 1, Team2Book will consider a consumer present in the morning if they are available from 9:30 a.m. (8:30 a.m. + 1 hour) to 11:30 a.m. (12:30 p.m. – 1 hour). Not available within this time range? Not counted for meeting this constraint.

2. **Constraint Tolerance – Afternoon (hours):** This parameter allows you to specify the constraint tolerance for the afternoon time interval. Team2Book considers a consumer present if available between lunchtime + X hours and end of working day – X hours. Again, this parameter applies only to the constrained section of the dashboard.

<figure class="wp-block-image">![Constraint Tolerance - Afternoon (hours): ](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Constraint Tolerance - Afternoon (hours): ](https://lh4.googleusercontent.com/IR7QkKUxW-w2MqFpsDU_YJl9hwP3yWVvrw_tNCjXIK6KFDlWlpcdW7D_L8BZwtpPe-InTaCET_sWkUePiOKqMxDcbJpUjcVsffwG4UVeqbuIj3N7CB_96-iEw5iYjMkqDICEpNYoS9rxbjduhdwea-M)</noscript></figure>Using the previous example of a working day from 8:30 a.m. to 5 p.m. with lunchtime at 12:30 p.m., if the value of this field is set to 1, Team2Book will consider a consumer present in the afternoon if they are available from 1:30 p.m. (12:30 p.m. + 1 hour) to 4:00 p.m. (5 p.m. – 1 hour). Outside this time range? Not counted among available consumers for this constraint.

3. **Constraint Tolerance – Day (hours):** This parameter enables you to define the constraint tolerance for the entire day. Team2Book considers a consumer present if available between start of day + X hours and end of working day – X hours.

<figure class="wp-block-image">![Constraint Tolerance - Day (hours): ](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Constraint Tolerance - Day (hours): ](https://lh5.googleusercontent.com/XNCYz-syWZu6XGkzbdOdOwpF2FbNzh_5wlhpADC5NkX8kEwPTkdgUkdYsjl7UioV-1Jq3eyo0AGjepEjwXRS9uR_8PuaKHTeN2_sLPZtyFdeWlBuCrNDiWDfptCJWlU1xAjb0B3WIY-zUlpWutyiT2s)</noscript></figure>Similar to the previous parameters, this applies only to the constrained section of the dashboard. Continuing with the example of a working day from 8:30 a.m. to 5 p.m., if the value of this field is set to 2, Team2Book will consider a consumer present for the day if they are available from 10:30 a.m. (8:30 a.m. + 2 hours) to 3:00 p.m. (5 p.m. – 2 hours). Outside this time range? Not counted among available consumers for this constraint.

Fine-tune constraint tolerance to align consumer assignments with specific time intervals in Team2Book.

Assigner Parameters
-------------------

When you enable Automatic Assignment, the scheduler takes care of automatically assigning special events to the corresponding consumers. However, if you want more control over the assignment process. In such cases, we have provided an option to manually select a consumer and customize certain advanced features.

Assigner Parameters in Team2Book’s advanced features: Minimum Gap Between Consecutive Special Events and Number of Consecutive Special Event Assignments.

Minimum Gap Between Consecutive Special Events
----------------------------------------------

The Minimum Gap Between Consecutive Special Events attribute in Team2Book allows you to specify the minimum time gap required between consecutive special events assigned to a consumer. This parameter ensures that there is a specific duration of time between two consecutive special events.

The Minimum Gap Between Consecutive Special Events attribute offers a filter function for consumer, Source Special Event Type, and Destination Special Event Type options. By tapping the box for each parameter, you can easily filter your selections for consumer, Source Special Event Type, and Destination Special Event Type. Once you choose them, the system displays their corresponding combinations, enabling you to set a Minimum Gap Between Consecutive Special Events for the selected consumer.

For instance, choose “Efirem Tamiru” as the consumer, and “Emergency AM” as both Source Special Event Type and Destination Special Event Type.

<figure class="wp-block-image size-full">![Minimum Gap Between Consecutive Special Events](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20979%20210'%3E%3C/svg%3E)<noscript>![Minimum Gap Between Consecutive Special Events](https://team2book.com/wp-content/uploads/2023/07/image.png)</noscript></figure><figure class="wp-block-image">![Minimum Gap Between Consecutive Special Events](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Minimum Gap Between Consecutive Special Events](https://lh4.googleusercontent.com/voAmk6XcfDEok25YvXIH7UrIIM3QEVajz3dqj5FAZetAHPAvUnxsxUny-d9wL-reav96tjxl6Jgta0yBvUQclI0E3kcOYLccm9iOsQGhZ5-NtzkumPfG-Fcumvldxm7iEz_p0kt_Ke8KfV3Hr0kiQew)</noscript></figure>The “Minimum Gap Between Consecutive Special Events” feature offers several attributes to customize the assignment process. Here are the key aspects of this feature:

- List of Consumers: This attribute allows you to view and select any consumer from a list. Once you select the consumer, the system will display their special event details for further customization.
- Source Special Event Type: This attribute refers to the event in which the consumer is currently participating or working.
- Destination Special Event Type: This attribute indicates the next event to which the consumer will be assigned to work. The source and destination special event types can either be the same or different. For example, events named “Weekend” and “Emergency” can combine in various ways.
- Minimum Gap (hrs): This attribute allows you to set the minimum time gap between consecutive special events for a consumer. By adjusting this value, you ensure the system doesn’t assign another special event to the consumer for the specified minimum gap duration.

The system automatically generates a list of possible arrangements between source and destination special event types.

To display the special event type combination, there are two essential conditions to consider:

**Automatic Assignment:** Ensure that Automatic Assignment is enabled for the selected special event type. When this feature is activated, the system will automatically assign consumers to the special event type based on their preferences and availability.

**Target Consumers:** Confirm that the consumer is designated as one of the target consumers for either the source or destination special event type. By designating specific consumers as targets, you can ensure that they receive preferential consideration when assigning special events.

Users have the flexibility to manage these conditions through the Dashboard -&gt; Special Event Types page. They can enable or disable Automatic Assignment for particular special event types and set target consumers accordingly.

By fulfilling these two conditions, you optimize the assignment process, ensuring that consumers are efficiently assigned to their preferred special event types based on their availability and designated targets.

To provide you with a clearer understanding of the “Minimum Gap Between Consecutive Special Events” feature, let’s walk through a specific scenario. Suppose we select a consumer named Efirem Tamiru and want to customize the source and destination special event types, along with a minimum gap duration.

<figure class="wp-block-image">![Selected consumer](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Selected consumer](https://lh4.googleusercontent.com/7no0AaPAybiEX2UwRwilNy_VlwsAVhcQ0xLVs0-HIzTjbpMDhCPeSzpPI5ZH4zcXRw8B-iUwZIA9UvCblO2hRIAvKtkOy7v_xq0g1KOY9cK6yK6IteFaYPSq1rp4WbQFAHpGGJSPte8rAOcy4_FbdfM)</noscript></figure>Let’s choose “Emergency AM” as both the Source Special Event Type and Destination Special Event Type. This means that Efirem Tamiru is currently participating in the “Emergency AM” event and will be assigned to the same event next.

Next, let’s set a Minimum Gap of 24 hours. This ensures that once Efirem Tamiru has completed the “Emergency AM” event, they won’t be assigned another “Emergency AM” event for at least 24 hours.

<figure class="wp-block-image">![Selected consumer](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Selected consumer](https://lh3.googleusercontent.com/G8q8-kMLBzBbLIizEaprvvIbdQisDYIp2jOBmD-s6lIquoqCagyLA-98jRjI3y1QdQu4WBxDYHC2uR8o-mL_FM_A3HtlDdECy4MSmzVsy_tuj_t6A3eqIgLBdkCzd4Ru4oMIlZBuU8vGAvPGovxYWvs)</noscript></figure>Click this icon to save the entry

<figure class="wp-block-image">![save](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![save](https://lh4.googleusercontent.com/dOB-Q5u2eQLpEaDu4Hi9cqMjXxp-NJEAHHZjvljzcly-HLJF7x4gS-PJn7t5-W8ZCE9PxQZuvlP8CLpP8X-ggeXSa5MODDMbgyQty_p7Dq-rhL7ffWbzaJ7x754qrG9kPxjlCQSjRxkEpf15TuiZqU8)</noscript></figure>You will get information for your new update

<figure class="wp-block-image">![successfully updated](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![successfully updated](https://lh3.googleusercontent.com/cZT0Y-Acx7EpXVjEVnF_gSSOBOcjIYwm_rqrNE2UKzcyNk5AHOg2RcoK3axK4Xk20_fu5Av4RsP0Maa_1b6DGOzA3PG4Sjs-k6Z1Yzyz1zjcbTITNJDhyIwAK6UL1y7sFhYdMIDfMw6iva1oVoEOZhc)</noscript></figure>After saving these changes, go to the [scheduler dashboard](https://team2book.com/tutorials/scheduler-part-1-the-user-interface) and click on “Assign Special Events.”

<figure class="wp-block-image">![scheduler](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![scheduler](https://lh5.googleusercontent.com/UaaHc9UcTZjc-9JAQU54GCbkGFMEoa4B3PPgYcbCcs9PjXHslmtReV8BMAErbEo_BlmhlvP89SIvREE2UbTAwjT2AdvyxbOzXGJgcktmv6r59dgWB6ou-jfxaiZLzzpevskj2bGbRm8L0E_0qEUzClE)</noscript></figure>Select the desired Special Event Type, which in this case is “Emergency AM.” Enter the corresponding date and click “Assign.”

<figure class="wp-block-image">![special events](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![special events](https://lh3.googleusercontent.com/6I8PdrBk-9qdF8j8e-p_VQiksRzynrc8yBPhmMRspPHquOl9F9sDN6DZK9N_aOLqYxiYDVmca2BDfuViP2_ZgdKbJl9KMQQEqZKgsRBx7t1YoOzbfwXyYzsk0-ttkCivx19KbiIUMrCsR1OxTsuCVuI)</noscript></figure>By doing this, you will be able to see the newly updated event information.

<figure class="wp-block-image">![information](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![information](https://lh4.googleusercontent.com/FicqJ55a6BmXSPcFEEBGPR8BgHghfi3U7EkMWWUMr3GwuXk-bdUNgnpEjZUkfKKyDO2MXIuY4yql8I7oLzeBR8wvPCqLZ1zXTquArwPCNdx-hDzYm1QPQCONV8sQTnmfY5ftPx-lKgIiPVpOZrcVv-U)</noscript></figure>The scheduler calendar will show the successful assignment of “Emergency AM” to Efirem Tamiru with the designated minimum gap.

<figure class="wp-block-image">![Emergency AM](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Emergency AM](https://lh3.googleusercontent.com/LUZkDkajAmrU-E484vMIcr8UnB_WZnyM2iCSrHxLnr3TebQoou_9Y8GNih6EuzyXQMgjD_HSonskwXyBvCG5qw7Ixr5W2RSg8b-_xj8_wwQc9OY9zwKHxDPJRANxlY3L39owpVyss7skJvhyKGbkySY)</noscript></figure>Team2Book will ensure that there is at least a 1-day gap between two consecutive special events for a consumer. This means that once a consumer has participated in a special event “Emergency AM”, Efirem Tamiru won’t be assigned another special event for at least 24 hours.

The Minimum Gap Between Consecutive Special Events values can range from 0 to 744.

Here are a few examples:

- Setting the value to 0 means no minimum gap is required between consecutive special events. This allows for the immediate consecutive assignment of special events to a consumer.
- If you set the value to 24, it indicates a minimum gap of 24 hours between consecutive special events. This ensures that a consumer has a full day of rest between two special events.
- If you set the value to 168, it represents a minimum gap of 168 hours, equivalent to 1 week. This means that a consumer must have at least one week of rest between consecutive special events.
- If you set the value to 744, it signifies a minimum gap of 744 hours, equivalent to 31 days. This ensures that there is a full month between consecutive special events for a consumer.

To further clarify the concept of “Minimum Gap Between Consecutive Special Events,” let’s explore another example. Consumer Efirem Tamiru prefers Evening shifts on Fridays, not Weekend special events.

In this case, Source Special Event Type is “Evening Shift,” and Destination Special Event Type is “Weekend.” Efirem Tamiru wants to ensure there is a minimum gap between these two events.

To achieve this, we need to set a Minimum Gap of 48 hours, representing a 2-day gap (Saturday and Sunday) between the two consecutive special events.

<figure class="wp-block-image">![Minimum Gap](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Minimum Gap](https://lh4.googleusercontent.com/jHP0U0GZvADy2U7dDdOHvs6QOPGDwHO8RQUN2rjckhDYTFHREFVzt-NH6wu98nmi3536KZEL8v9inBo4-sUqjNgn1LZJYatu-MU_09jYIEE7PsmhpRWlnfp2DYbuM2C3Y1j10Js5pjHsMfdX24ehrnM)</noscript></figure><figure class="wp-block-image">![Columns](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![Columns](https://lh3.googleusercontent.com/HcPHICFTC10GNbPbR7tHQ5eh6SjP4eTNObL9ZahtaPZBr0NUF6zkH3QT2Ouje5x2xY8Q4XWB6LVnhqHyrj8FEVKAEVV4yqI0V7PTYJoxC0Lb2qsaI3LzQ-SC0XGgEr4x0q6VzQb2LO52BgkTjTW6TG0)</noscript></figure>Save the change to prevent Efirem Tamiru’s Weekend assignment for 48 hours after the Evening Shift. To observe the updated result, navigate to the scheduler dashboard and click on “Assign [Special Events](https://team2book.com/tutorials/special-events-module).” Select the relevant Special Event Types, in this case, Evening Shift and Weekend. Enter the appropriate date and click “Assign.” After updating, view the event information reflecting Minimum Gap Between Consecutive Special Events.

The scheduler calendar ensures Efirem Tamiru isn’t assigned the Weekend special event for 48 hours after completing the Evening Shift event.

**To Set Minimum Gap for All Consumers**

To set a Minimum Gap for All Consumers, utilize the “Set Minimum Gap for All Consumers” filter function. Tap the Source Special Event Type and Destination Special Event Type options to select the desired special event type. After that, set the Minimum Gap for All Consumers and click save. This convenient option allows you to apply the same Minimum Gap for all consumers.

<figure class="wp-block-image size-full">![ Minimum Gap](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20917%20182'%3E%3C/svg%3E)<noscript>![ Minimum Gap](https://team2book.com/wp-content/uploads/2023/07/image-1.png)</noscript></figure>Adjusting the Minimum Gap parameter controls special event assignments’ frequency and spacing for consumers based on your requirements.

Number of Consecutive Special Event Assignments
-----------------------------------------------

The “Number of Consecutive Events” parameter in Team2Book allows you to control the consecutive assignment of a consumer to a specific special event type. By setting this value, you can determine how many times to consecutively assign a consumer the same special event type.

The Number of Consecutive Special Event Assignments attribute provides a filter function for consumers, Source Special Event Type, and Destination Special Event Type options. By tapping each parameter’s box, you can conveniently filter your selections. Once you choose them, the system displays their corresponding combinations, enabling you to consecutively assign consumers in a row for the selected consumer. For example, select “Efirem Tamiru” as the consumer, and “Emergency AM” as both Source Special Event Type and Destination Special Event Type.

<figure class="wp-block-image size-full">![events](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20974%20202'%3E%3C/svg%3E)<noscript>![events](https://team2book.com/wp-content/uploads/2023/07/image-2.png)</noscript></figure>With this feature, you have the ability to assign special events in a row for a consumer. For example, if you want to schedule three consecutive special events for a consumer, you can easily set the “Number of Consecutive Special Event Assignments” to 3. This means the system will assign the consumer three special events back-to-back without any gaps in between.

Setting the value to 2 allows Consumer – Efirem Tamiru to be assigned Special Event Type – Emergency AM twice in a row.

<figure class="wp-block-image">![consumer](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E)<noscript>![consumer](https://lh6.googleusercontent.com/qppNzqhsgzkDiwb-9gUnh_gdA2T6iWVxUHwmNMsqpvsZbpohMSHeVGiOjP7hm3DrGNeNDDuNvvpbPfgg2BcMKiAJ74zoLU5Aj-EMZNos-M6EPH4g3X8vIf1fkWOSzIdVip3EzUX5__ZMQLLgaR7o-18)</noscript></figure>This ensures that Efirem Tamiru participates in Special Event Type – Emergency AM for two consecutive occurrences.

It’s important to note that setting the value to 0 or 1 has no effect on consecutive event assignments. To enable consecutive event assignments, you need to set the value to 2 or higher.

Additionally, there is the “Maximum Gap (hrs)” parameter, which determines the maximum time gap allowed between consecutive events. If the gap between two events exceeds the specified maximum gap, the assigner will not assign those events consecutively to a consumer.

For example, if you want to assign Consumer – Efirem Tamiru twice on Saturday and Sunday to a Weekend special event type, but avoid consecutive assignments on Sunday and the following Saturday. In this case, you can set the Maximum Gap to 24 hours. This means that there must be a 24-hour gap maximum between the Sunday and Saturday assignments for Consumer – Efirem Tamiru.

By default, the system sets the maximum gap between consecutive special events to 168 hours, equivalent to one week. If no specific value is assigned for the maximum gap, the system will automatically assume this default gap. The default setting of 168 hours means that after 1 week, the consecutive events counter is reseted and the Assigner may choose another consumer. Please note that you have the flexibility to customize this setting based on your specific requirements. If you prefer a different maximum gap duration between special events, you can easily adjust the value accordingly.

**To Set the Number of Consecutive Special Event Assignments For All Consumers**

Use the “Set Number of Consecutive Special Event Assignments For All Consumers” filter function to set the Number of Consecutive Special Event Assignments for all consumers. Tap the Source Special Event Type and Destination Special Event Type options to select the desired special event type. After that, specify the Number of Consecutive Events and Maximum Gap (hrs), then click save. This option enables you to set the Number of Consecutive Special Event Assignments for all consumers.

<figure class="wp-block-image size-full">![all consumer](data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20928%20218'%3E%3C/svg%3E)<noscript>![all consumer](https://team2book.com/wp-content/uploads/2023/07/image-3.png)</noscript></figure>**Concurrent Conditions: Minimum Gap and Number of Consecutive Assignments**

In cases where both the “Minimum Gap Between Consecutive Special Events” and “Number of Consecutive Special Event Assignments” conditions are applicable to a scenario, the system will prioritize the “Number of Consecutive Special Event Assignments” condition. This means that the system will override the minimum gap requirement and schedule special events based on the specified number of consecutive assignments.

For example, suppose a consumer sets a minimum gap of 24 hours between special events, but configures the “Number of Consecutive Special Event Assignments” condition to schedule three consecutive special events for themselves. In this scenario, the system will prioritize the consecutive assignments and schedule the three events back-to-back, disregarding the minimum gap requirement.

Note that the specified number of consecutive special event assignments takes precedence over the minimum gap requirement.