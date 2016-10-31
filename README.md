# Search Engine for Web Application

The simple search function created with using MySQL to restore the data from clients input along with (PHP, HTML, Java Script..) which to help clients can interact with the database convientely.


# Speed the searching up

Instead of using "SELECT * FROM product" which will take a lot of time for database to find the right items, we could use "SELECT COUNT() * FROM product " without ordering the datetime will make it much more faster.

Most important thing is with the huge database it even worse when the columns have not include "INDEX". So in this case, I would like to " ALTER TABLE `product` ADD INDEX `name`(`name`)" as column serial_number as well.

A database index is a data structure that improves the speed of operations in a table. Indexes can be created using one or more columns, providing the basis for both rapid random lookups and efficient ordering of access to records.
