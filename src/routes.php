<?php
$routes = [
    'metadata',
    'getMailboxConversations',
    'getFolderMailboxConversations',
    'getCustomerMailboxConversations',
    'getUserMailboxConversations',
    'getSingleConversation',
    'getAttachmentData',
    'createConversation',
    'updateConversation',
    'createConversationThread',
    'updateConversationThread',
    'getThreadSource',
    'deleteConversation',
    'deleteNote',
    'createAttachment',
    'deleteAttachment',
    'getCustomersList',
    'getMailboxCustomers',
    'getSingleCustomer',
    'createCustomer',
    'updateCustomer',
    'getMailboxList',
    'getSingleMailbox',
    'getMailboxFolders',
    'getConversationsReport',
    'getBusiestDayTimeReport',
    'getNewConversationsReport',
    'getReceivedMessagesReport',
    'getDrillDownReport',
    'getFieldDrillDownReport',
    'getNewDrillDownReport',
    'getDocsReport',
    'getHappinessOverallReport',
    'getHappinessRatingsReport',
    'getProductivityOverallReport',
    'getFirstResponseTimeReport',
    'getRepliesSentReport',
    'getResolvedReport',
    'getResolutionTimeReport',
    'getResponseTimeReport',
    'getProductivityDrillDownReport',
    'getCompanyOverallReport',
    'getCustomersHelpedReport',
    'getCompanyDrillDownReport',
    'getUserReport',
    'getUserConversationHistoryReport',
    'getUserCustomersHelpedReport',
    'getUserDrillDownReport',
    'getUserRepliesReport',
    'getUserResolutionsReport',
    'getUserHappinessReport',
    'getUserRatingsReport',
    'searchConversations',
    'searchCustomers',
    'getTagsList',
    'getTeamsList',
    'getSingleTeam',
    'getTeamMembers',
    'getUsersList',
    'getSingleUser',
    'getCurrentUser',
    'getMailboxUsersList',
    'createWebhook',
    'getWorkflowsList',
    'updateWorkflow',
    'runWorkflowOnSingleConversation',
    'runWorkflowOnMultiplyConversation'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

