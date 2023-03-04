# Laravel 10 Course

## Get this course from Bitfumes youtube channel

#### Project Idea
1. User can create a new help ticket
2. Admin can reply on help ticket
3. Admin can reject or resolve the ticket
4. When admin update on the ticket then user will get one notification via email that ticket status is updated
5. User can give ticket title and description
6. User can upload a document like pdf or image

#### Table Structure
1. Tickets
   - title( string ) {required}
   - description(text) {required}
   - status(open {default}, resolved, rejected)
   - attachment(string) {nullable}
   - user_id {required} filled by laravel
   - status_changed_by_id {nullable}

2. Replies
   - body(text) {required}
   - user_id {required} filled by laravel
   - ticket_id {required} filled by laravel