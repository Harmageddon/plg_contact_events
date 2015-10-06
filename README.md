# plg_contact_events
A small plugin to test the newly added plugin events for com_contact.

## Events
### onContentPrepare
Adds the suffix "(edited)" to the title of...
- ...the contact title in the "Single Contact" view.
- ...the category title in the "Contact Category" view.
- ...the contact titles in the "Contact Category" view.

### onContentAfterTitle
Adds "onContentAfterTitle at com_contact.VIEWNAME" after the title of every single contact in the views "Single Contact" and "Contact Category".

### onContentBeforeDisplay
Adds "onContentBeforeDisplay at com_contact.VIEWNAME" before the content of every single contact in the views "Single Contact" and "Contact Category".

### onContentAfterDisplay
Adds "onContentAfterDisplay at com_contact.VIEWNAME" after the content of every single contact in the views "Single Contact" and "Contact Category".
