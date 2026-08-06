{\rtf1\ansi\ansicpg1252\cocoartf2870
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs24 \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 ---\
chunk_id: demo_team2book_en_09\
title: Priorities and Resource Preferences\
category: demo\
role:\
- manager\
- professional\
keywords:\
- priority\
- preferences\
- reserved resource\
- office assignment\
- resource allocation\
- scheduling\
- premises\
- Team2Book\
source: Team2Book Demonstration Presentation (English)\
---\
\
# Priorities vs Resource Preferences\
\
## Overview\
\
One of the core concepts of Team2Book is the distinction between:\
\
- priorities;\
- resource preferences.\
\
Although these concepts work together during the scheduling process, they serve different purposes.\
\
Understanding the difference is essential for configuring resource assignments correctly.\
\
---\
\
# What Is a Priority?\
\
## Definition\
\
A priority determines the order in which Team2Book evaluates consumers when assigning resources.\
\
Higher-priority consumers are evaluated before lower-priority consumers.\
\
---\
\
## Purpose\
\
Priorities help organizations enforce operational rules such as:\
\
- reserved offices;\
- seniority requirements;\
- ownership agreements;\
- contractual resource access.\
\
---\
\
# Priority 1 and Reserved Resources\
\
## Reserved Resource Assignment\
\
A consumer with Priority 1 may have a dedicated reserved resource.\
\
When the consumer is available, Team2Book automatically assigns the reserved resource.\
\
---\
\
## Example\
\
Assume that Michael pays for guaranteed access to Office 120.\
\
Configuration:\
\
- Priority: 1\
- Reserved Resource: Room 120\
\
---\
\
## Result\
\
Whenever Michael is available:\
\
- Room 120 is assigned to Michael.\
\
When Michael is absent:\
\
- Room 120 becomes available for other team members.\
\
---\
\
# Advantages of Reserved Resources\
\
## Predictability\
\
Professionals know exactly where they will work.\
\
---\
\
## Operational Stability\
\
Organizations can guarantee access to important resources when required.\
\
---\
\
## Simple Administration\
\
Resource ownership and access rules are handled automatically by Team2Book.\
\
---\
\
# What Are Resource Preferences?\
\
## Definition\
\
Preferences represent the order in which a consumer would like to receive available resources.\
\
Preferences are used when the consumer does not have a dedicated reserved resource.\
\
---\
\
## Purpose\
\
Preferences help Team2Book choose the most desirable available resource for a professional.\
\
---\
\
# Preference Rankings\
\
Consumers may specify multiple preferred resources.\
\
Example:\
\
1. Room 120\
2. Room 130\
3. Room 140\
\
The system attempts to assign resources following this order whenever possible.\
\
---\
\
# Example of Priorities and Preferences\
\
## Scenario\
\
Consider two professionals:\
\
- Peter (Nurse)\
- John (Psychologist)\
\
Neither has a reserved office.\
\
---\
\
## Peter's Configuration\
\
- Priority: 2\
- Preference 1: Room 120\
- Preference 2: Room 130\
- Preference 3: Room 140\
\
---\
\
## John's Configuration\
\
- Priority: 3\
- Preference 1: Room 120\
- Preference 2: Room 130\
- Preference 3: Room 140\
\
---\
\
# Assignment Process\
\
## Step 1\
\
Team2Book evaluates priority levels.\
\
Peter is evaluated before John because:\
\
- Peter = Priority 2\
- John = Priority 3\
\
---\
\
## Step 2\
\
Team2Book evaluates Peter's preferences.\
\
The system attempts to assign:\
\
1. Room 120\
2. Room 130\
3. Room 140\
\
in that order.\
\
---\
\
## Step 3\
\
After Peter receives an assignment, Team2Book evaluates John's preferences.\
\
The system assigns the next available room according to John's preference list.\
\
---\
\
# Outcome of the Example\
\
## When Michael Is Working\
\
Because Michael has:\
\
- Priority 1\
- Reserved Room 120\
\
Room 120 is unavailable to Peter and John.\
\
Peter will receive the best remaining option based on his preferences.\
\
John will then receive the next best available option.\
\
---\
\
## When Michael Is Absent\
\
Room 120 is released.\
\
Peter, having the higher priority, is evaluated first and will normally receive Room 120.\
\
John will receive the next available preferred room.\
\
---\
\
# Relationship Between Priorities and Preferences\
\
## Priority Determines Order\
\
Priorities answer the question:\
\
> Who gets evaluated first?\
\
---\
\
## Preferences Determine Choice\
\
Preferences answer the question:\
\
> Which room should be assigned first?\
\
---\
\
## Combined Effect\
\
Team2Book first evaluates priority and then applies resource preferences.\
\
This creates a scheduling process that respects both organizational rules and professional preferences.\
\
---\
\
# Why Use Priorities?\
\
## Operational Requirements\
\
Organizations may need to guarantee offices for:\
\
- owners;\
- senior professionals;\
- specialized staff;\
- specific operational roles.\
\
---\
\
## Fair and Predictable Scheduling\
\
Priorities provide a clear and transparent framework for resource allocation.\
\
---\
\
# Why Use Preferences?\
\
## User Satisfaction\
\
Allowing consumers to express resource preferences increases flexibility and satisfaction.\
\
---\
\
## Better Resource Matching\
\
Certain professionals may prefer or require particular offices due to:\
\
- equipment;\
- workflow;\
- location;\
- convenience.\
\
---\
\
## Reduced Manual Scheduling\
\
Preferences allow Team2Book to make intelligent assignments automatically.\
\
---\
\
# Best Practices\
\
## Reserve Resources Only When Necessary\
\
Too many reserved resources can reduce scheduling flexibility.\
\
---\
\
## Use Priorities Sparingly\
\
A simple priority structure is typically easier to understand and maintain.\
\
---\
\
## Define Multiple Preferences\
\
Providing several acceptable resource options increases the likelihood of successful assignments.\
\
---\
\
## Review Preferences Periodically\
\
Preferences may change as:\
\
- resources evolve;\
- offices move;\
- operational needs change.\
\
---\
\
# Practical Assignment Logic\
\
The resource assignment process generally follows this sequence:\
\
1. Check availability.\
2. Evaluate priorities.\
3. Assign reserved resources when applicable.\
4. Evaluate resource preferences.\
5. Assign the best available resource.\
6. Continue with the next consumer.\
\
---\
\
# Benefits of the Priority and Preference Model\
\
The combination of priorities and preferences helps organizations:\
\
- protect important resource allocations;\
- improve fairness;\
- increase scheduling flexibility;\
- reduce manual intervention;\
- maximize resource utilization.\
\
---\
\
# Summary\
\
Team2Book uses two complementary mechanisms to allocate resources:\
\
## Priorities\
\
Priorities determine:\
\
- assignment order;\
- access precedence;\
- reserved resource handling.\
\
---\
\
## Preferences\
\
Preferences determine:\
\
- preferred rooms;\
- preferred offices;\
- preferred resources when multiple options are available.\
\
Together, priorities and preferences allow Team2Book to balance organizational requirements with user preferences while producing consistent and efficient resource assignments.\
}