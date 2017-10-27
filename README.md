[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/HelpDesk/functions?utm_source=RapidAPIGitHub_HelpDeskFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# HelpDesk Package
Ticket numbers, customer portals & robo-emails aren't a great way to build trust. Help Scout makes every customer interaction a personalized one.
* Domain: [helpscout.net](https://www.helpscout.net/help-desk-software)
* Credentials: apiKey

## How to get credentials: 
1. Sign in https://www.helpscout.net.
2. Click the `person` icon on the top right of your account, next to the search, then click Your Profile.
3. Click the Authentication link in the menu on the left, followed by the API Keys tab.
4. You can generate as many help desk API keys as necessary and label them.

## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 

## Webhook credentials
 Please use SDK to test this feature.
 0. Go to [RapidAPI](http://rapidapi.com)
 1. Log in or create an account
 2. Go to [My apps](https://dashboard.rapidapi.com/projects)
 3. Add new project with projectName to get your project Key

 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key

  
## HelpDesk.getMailboxConversations
Return conversations in a mailbox.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| mailboxId    | String     | Unique mailbox id
| page         | Number     | Page number
| status       | Select     | Status
| modifiedSince| DatePicker | Returns conversations that have been modified since the given date/time. 
| tags         | List       | Returns conversations that have been tagged with any of the specified tags.

## HelpDesk.getFolderMailboxConversations
Return conversations in a specific folder of a mailbox.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| mailboxId    | String     | Unique mailbox id
| folderId     | String     | Unique folder id
| page         | Number     | Page number
| status       | Select     | Status
| modifiedSince| DatePicker | Returns conversations that have been modified since the given date/time. 
| tags         | List       | Returns conversations that have been tagged with any of the specified tags.

## HelpDesk.getCustomerMailboxConversations
Return conversations for a specific customer in a mailbox.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| mailboxId    | String     | Unique mailbox id
| customerId   | String     | Unique customer id
| page         | Number     | Page number
| status       | Select     | Status
| modifiedSince| DatePicker | Returns conversations that have been modified since the given date/time. 
| tags         | List       | Returns conversations that have been tagged with any of the specified tags.

## HelpDesk.getUserMailboxConversations
Return conversations assigned to a specific user in a mailbox.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| mailboxId    | String     | Unique mailbox id
| userId       | String     | Unique user id
| page         | Number     | Page number
| status       | Select     | Status
| modifiedSince| DatePicker | Returns conversations that have been modified since the given date/time. 
| tags         | List       | Returns conversations that have been tagged with any of the specified tags.

## HelpDesk.getSingleConversation
Return a single conversation.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| conversationId| String     | Unique conversation id

## HelpDesk.getAttachmentData
Return attachment data object.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| attachmentId| String     | Unique attachment id

## HelpDesk.createConversation
Create conversation object

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| imported    | Select     | The 'imported' request parameter enables conversations to be created for historical purposes (i.e. if moving from a different platform, you can import your history). When 'imported' is set to true, no outgoing emails or notifications will be generated.
| conversation| JSON       | The body of the request. [Read more](https://developer.helpscout.com/help-desk-api/objects/conversation/)
| autoReply   | Select     | The 'autoReply' request parameter enables auto replies to be sent when a conversation is created via the API. When 'autoReply' is set to true, an auto reply will be sent as long as there is at least one 'customer' thread in the conversation.
| reload      | Select     | Set this request parameter to true to return the created conversation in the response.

## HelpDesk.updateConversation
Update conversation object

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| conversationId| String     | Unique conversation id.
| conversation  | JSON       | The body of the request.[Read more](https://developer.helpscout.com/help-desk-api/objects/conversation/)
| reload        | Select     | Set this request parameter to true to return the created conversation in the response.

## HelpDesk.createConversationThread
Create conversation thread

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| conversationId| String     | Unique conversation id.
| thread        | JSON       | The body of the request.[Read more](https://developer.helpscout.com/help-desk-api/objects/thread/)
| imported      | Select     | The 'imported' request parameter enables conversations to be created for historical purposes (i.e. if moving from a different platform, you can import your history). When 'imported' is set to true, no outgoing emails or notifications will be generated.
| reload        | Select     | Set this request parameter to true to return the created conversation in the response.

## HelpDesk.updateConversationThread
Update conversation thread

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| conversationId| String     | Unique conversation id.
| threadId      | String     | Unique thread id.
| thread        | JSON       | The body of the request.[Read more](https://developer.helpscout.com/help-desk-api/objects/thread/)
| reload        | Select     | Set this request parameter to true to return the created conversation in the response.

## HelpDesk.getThreadSource
Return the raw email source just as it was received by Help Scout.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| conversationId| String     | Unique conversation id.
| threadId      | String     | Unique thread id.

## HelpDesk.deleteConversation
Delete conversation

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| conversationId| String     | Unique conversation id.

## HelpDesk.deleteNote
Delete note

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| noteId| String     | Unique note id.

## HelpDesk.createAttachment
Create Attachment

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key
| filename| String     | Filename with extension
| file    | File       | File link

## HelpDesk.deleteAttachment
Delete attachment

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| attachmentId| String     | Unique attachment id.

## HelpDesk.getCustomersList
Return list of mailbox customers. Customers can be filtered on any combination of first name, last name, email, and modifiedSince.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| firstName    | String     | Customer first name
| lastName     | String     | Customer last name
| email        | String     | Customer email
| modifiedSince| DatePicker | Returns customers that have been modified since the given date/time. 
| page         | Number     | Page number

## HelpDesk.getMailboxCustomers
Returns a list of Customers with conversations associated with the specified mailbox.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| mailboxId| String     | Unique mailbox id
| page     | Number     | Page number

## HelpDesk.getSingleCustomer
Returns a single customer object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| customerId| String     | Unique customer id

## HelpDesk.createCustomer
Create customer

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| firstName     | String     | Customer first name
| lastName      | String     | Customer last name
| emails        | Array      | At least one email address is required.
| organization  | String     | Organization name
| jobTitle      | String     | Job title
| background    | String     | Background
| address       | JSON       | Customer address object [Read more](https://developer.helpscout.com/help-desk-api/objects/address/)
| socialProfiles| JSON       | Collection of CustomerSocialProfile objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/social/)
| phones        | JSON       | Collection of CustomerPhone objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/phone/)
| chats         | JSON       | Collection of CustomerChat objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/chat/)
| websites      | JSON       | Collection of CustomerWebsite objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/website/)
| reload        | Select     | Set this request parameter to true to return the customer in the response.

## HelpDesk.updateCustomer
Update customer. When updating a customer, you can either pass the entire customer, or pass only the fields that need to be updated. 

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| customerId    | String     | Unique customer id
| firstName     | String     | Customer first name
| lastName      | String     | Customer last name
| emails        | Array      | At least one email address is required.
| organization  | String     | Organization name
| jobTitle      | String     | Job title
| background    | String     | Background
| address       | JSON       | Customer address object [Read more](https://developer.helpscout.com/help-desk-api/objects/address/)
| socialProfiles| JSON       | Collection of CustomerSocialProfile objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/social/)
| phones        | JSON       | Collection of CustomerPhone objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/phone/)
| chats         | JSON       | Collection of CustomerChat objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/chat/)
| websites      | JSON       | Collection of CustomerWebsite objects. [Read more](https://developer.helpscout.com/help-desk-api/objects/website/)
| reload        | Select     | Set this request parameter to true to return the customer in the response.

## HelpDesk.getMailboxList
Return mailbox list.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| page  | Number     | Page number

## HelpDesk.getSingleMailbox
Returns a mailbox object.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| mailboxId| String     | Unique mailbox id

## HelpDesk.getMailboxFolders
Returns a mailbox folders.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| mailboxId| String     | Unique mailbox id
| page     | Number     | Page number

## HelpDesk.getConversationsReport
The conversations report provides statistics about conversation volume over a given time range. You may optionally specify two time ranges to see how conversation volume changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers

## HelpDesk.getBusiestDayTimeReport
The busiest time of day report provides a summary of which days and times had the highest coversation volume. Days/hours are reported using the company's time zone.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers

## HelpDesk.getNewConversationsReport
The new conversations report provides a summary of new conversation volume over a given time range.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month

## HelpDesk.getReceivedMessagesReport
The received messages report provides a summary of he volume of received messages over a given time range. Only messages from customers are counted.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month

## HelpDesk.getDrillDownReport
This report is similar to the Conversations Report, but instead of returning statistics about conversation volume, it drills down and returns the conversation data that makes up the Conversations Report.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| rows         | Number     | Number of results to return per page; defaults to 10; maximum is 50

## HelpDesk.getFieldDrillDownReport
This report is similar to the Conversations Report, but instead of returning statistics about conversation volume, it drills down and returns the conversation data (by conversation field) that makes up the Conversations Report.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| field        | Select     | The identifier on which to drill down; can be an identifier representing a tag, saved reply, workflow, or customer
| fieldId      | String     | The identifier on which to drill down; can be an identifier representing a tag, saved reply, workflow, or customer
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| rows         | Number     | Number of results to return per page; defaults to 10; maximum is 50

## HelpDesk.getNewDrillDownReport
This report is similar to the New Conversations Report, but instead of returning statistics about new conversation volume, it drills down and returns the actual new conversations that makes up the New Conversations Report.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| rows         | Number     | Number of results to return per page; defaults to 10; maximum is 50

## HelpDesk.getDocsReport
The Docs report provides statistics about Docs usage (searches, top articles, etc.) over a given time range. You may optionally specify two time ranges to see how usage changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| sites        | List       | List of site identifiers

## HelpDesk.getHappinessOverallReport
The happiness report provides information about how many Great, Okay, and Not Good ratings your company received for each period in a specified time range. You may optionally specify two time ranges to see how happiness ratings changed between the two time ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| types        | List       | List of types identifiers

## HelpDesk.getHappinessRatingsReport
The happiness ratings report provides a company's ratings for over a specified time range.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| folders      | List       | List of folders identifiers
| types        | List       | List of types identifiers
| page         | Number     | The page number
| rating       | Select     | Which set of ratings to display. Must be: 0 - for all ratings, 1 - for Great ratings, 2 - for Okay ratings, 3 - for Not Good ratings
| sortField    | Select     | Field which to sort results by. Must be: number, modifiedAt, rating
| sortOrder    | Select     | Must be: ASC, DESC

## HelpDesk.getProductivityOverallReport
The productivity report provides a snapshot of productivity over a given time range. You may optionally specify two time ranges to see how productivity changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used

## HelpDesk.getFirstResponseTimeReport
This report provides average first response times for each period in a specified time range. You may optionally specify two time ranges to see how first response time changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| viewBy       | Select     | Represents the resolution at which data is returned. Must be: day - only allowed if time range is <= 120 days, week - only allowed if time range is <= 1 year, month - only allowed if time range is >= 61 days

## HelpDesk.getRepliesSentReport
This report provides the number of replies sent for each period in a specified time range. You may optionally specify two time ranges to see how the number of replies sent changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| viewBy       | Select     | Represents the resolution at which data is returned. Must be: day - only allowed if time range is <= 120 days, week - only allowed if time range is <= 1 year, month - only allowed if time range is >= 61 days

## HelpDesk.getResolvedReport
This report provides the number of resolved conversations for each period in a specified time range. You may optionally specify two time ranges to see how the number of resolved conversations changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| viewBy       | Select     | Represents the resolution at which data is returned. Must be: day - only allowed if time range is <= 120 days, week - only allowed if time range is <= 1 year, month - only allowed if time range is >= 61 days

## HelpDesk.getResolutionTimeReport
A variety of filters are available as query parameters. Including any of these will result in only conversations that match the filters being included in the report.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| viewBy       | Select     | Represents the resolution at which data is returned. Must be: day - only allowed if time range is <= 120 days, week - only allowed if time range is <= 1 year, month - only allowed if time range is >= 61 days

## HelpDesk.getResponseTimeReport
This report provides average response times for each period in a specified time range. You may optionally specify two time ranges to see how response time changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| viewBy       | Select     | Represents the resolution at which data is returned. Must be: day - only allowed if time range is <= 120 days, week - only allowed if time range is <= 1 year, month - only allowed if time range is >= 61 days

## HelpDesk.getProductivityDrillDownReport
This report is similar to the Productivity Report, but instead of returning statistics about productivity, it drills down and returns the conversation data that makes up the Productivity Report.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| page         | Number     | The page number
| rows         | Number     | Number of results to return per page. Defaults to 25. Maximum is 50
| range        | Select     | Range Details
| rangeId      | Number     | Range ID Details

## HelpDesk.getCompanyOverallReport
The company report provides statistics about your company performance over a given time range. You may optionally specify two time ranges to see how performance changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers

## HelpDesk.getCustomersHelpedReport
The customers helped report provides statistics about how many customers were helped over a given time range. You may optionally specify two time ranges to see how the number of customers helped changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month

## HelpDesk.getCompanyDrillDownReport
This report is similar to the Company Report, but instead of returning statistics about the company, it drills down and returns the conversation data that makes up the Company Report.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| page         | Number     | The page number
| rows         | Number     | Number of results to return per page. Defaults to 25. Maximum is 50
| range        | Select     | Range Details
| rangeId      | Number     | Range ID Details

## HelpDesk.getUserReport
The report provides a snapshot of a user or team activity over a specified time range. You may optionally specify two time ranges to see how activity changed between the two ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| user         | String     | User or team identifier for this report

## HelpDesk.getUserConversationHistoryReport
The conversation history report provides details about a user's conversations for over a specified time range.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| officeHours  | Select     | Whether to take office hours into consideration in the report (defaults to 0); office hours must be enabled if 1 is passed, otherwise the default of 0 will be used
| user         | String     | User or team identifier for this report
| page         | Number     | The page number
| sortField    | Select     | Field which to sort results by. Must be: number, repliesSent, responseTime, resolveTime
| sortOrder    | Select     | Must be: ASC, DESC

## HelpDesk.getUserCustomersHelpedReport
This reports provides the number of customers a user helped for each period in a specified time range. You may optionally specify two time ranges to see how the number of customers helped changed between the two time ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month
| user         | String     | User or team identifier for this report

## HelpDesk.getUserRepliesReport
This reports provides the number of replies a user sent for each period in a specified time range. You may optionally specify two time ranges to see how the number replies changed between the two time ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month
| user         | String     | User or team identifier for this report

## HelpDesk.getUserResolutionsReport
This reports provides the number of conversations a user helped resolve for each period in a specified time range. You may optionally specify two time ranges to see how the number of resolved conversations changed between the two time ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month
| user         | String     | User or team identifier for this report

## HelpDesk.getUserHappinessReport
The happiness report provides information about how many Great, Okay, and Not Good ratings a user received for each period in a specified time range. You may optionally specify two time ranges to see how happiness ratings changed between the two time ranges.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| viewBy       | Select     | Resolution at which data is returned. Must be: day,week,month
| user         | String     | User or team identifier for this report

## HelpDesk.getUserRatingsReport
The user ratings report provides a user's ratings for over a specified time range.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| start        | DatePicker | Start date
| end          | DatePicker | Finish date
| previousStart| DatePicker | Previous Start
| previousEnd  | DatePicker | Previous End
| mailboxes    | List       | List of mailbox identifiers
| tags         | List       | List of tags identifiers
| types        | List       | List of types identifiers
| folders      | List       | List of folders identifiers
| user         | String     | User or team identifier for this report
| page         | Number     | The page number
| rating       | Select     | Which set of ratings to display. Must be: 0 - for all ratings, 1 - for Great ratings, 2 - for Okay ratings, 3 - for Not Good ratings
| sortField    | Select     | Field which to sort results by. Must be: number, modifiedAt, rating
| sortOrder    | Select     | Must be: ASC, DESC

## HelpDesk.searchConversations
Search conversations.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| page     | Number     | The page number
| pageSize | Number     | 50 is the default and also the maximum page size
| query    | String     | If no query is specified, all conversations will be returned. Example: (subject:'Learning')
| sortField| Select     | Field which to sort results by. Must be: customerName, mailboxid, modifiedAt, number, score, status, subject
| sortOrder| Select     | Must be: ASC, DESC

## HelpDesk.searchCustomers
Search customers.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| page     | Number     | The page number
| pageSize | Number     | 50 is the default and also the maximum page size
| query    | String     | If no query is specified, all conversations will be returned.
| sortField| Select     | Field which to sort results by. Must be: number, modifiedAt, rating
| sortOrder| Select     | Must be: ASC, DESC

## HelpDesk.getTagsList
Returns a list of tags used across all mailboxes. Tags are returned in alphabetical order, A-Z.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| page  | Number     | The page number

## HelpDesk.getTeamsList
Returns a list of teams

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| page  | Number     | The page number

## HelpDesk.getSingleTeam
Returns a single team

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| teamId| String     | Unique team id

## HelpDesk.getTeamMembers
Returns a team members

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| teamId| String     | Unique team id

## HelpDesk.getUsersList
Returns a list of users

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| page  | Number     | The page number
| type  | Select     | Must be: user or team

## HelpDesk.getSingleUser
Returns a single user

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| userId| String     | Unique user id

## HelpDesk.getCurrentUser
Returns a current user

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key

## HelpDesk.getMailboxUsersList
Returns a mailbox users list

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| mailboxId| String     | Unique mailbox id
| page     | Number     | The page number
| type     | Select     | Must be: user or team

## HelpDesk.createWebhook
Clients may create and configure up to one webhook per company. A webhook may be configured to receive multiple event notifications (e.g. conversation created, note added). Each request to this API will replace the existing webhook (if any) with the one specified in the request body.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| url   | String     | The callback URL where Help Scout will post your webhook events. This is the script or location where you'll handle the data received from Help Scout.
| events| List       | The list of events to subscribe to.
| secret| String     | A randomly-generated (by you) string of 40 characters or less used to create signatures for each webhook method. Help Scout uses this secret key to generate a signature for each webhook message. When the message is received at your callback URL, you can calculate a signature and compare to the one Help Scout sends. If the signatures match, you know it's from Help Scout.

## HelpDesk.getWorkflowsList
Returns a list of manual workflows that are associated with the specified mailbox. The list is ordered by the workflow order property, in ascending order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API key
| mailboxId| String     | Unique mailbox id
| page     | Number     | The page number

## HelpDesk.updateWorkflow
Update workflow object. Note: At this time, this endpoint will only update the status of a workflow to either 'active' or 'inactive'. Any other attributes passed will be ignored.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| workflowId| String     | Unique workflow id
| workflow  | JSON       | Workflow object. [Read more](https://developer.helpscout.com/help-desk-api/objects/workflow/) 
| reload    | Select     | Set this request parameter to true to return the workflow in the response.

## HelpDesk.runWorkflowOnSingleConversation
Applies the actions for the specified manual workflow on the specified conversation. Specifying an automatic workflow will return an error.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your API key
| workflowId    | String     | Unique workflow id
| conversationId| String     | Unique conversation id

## HelpDesk.runWorkflowOnMultiplyConversation
Applies the actions for the specified manual workflow on each conversation specified in the body of the request. Specifying an automatic workflow will return an error.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API key
| workflowId     | String     | Unique workflow id
| conversationIds| List       | Conversation ids list

