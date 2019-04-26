--This statement finds out which author has the most number of books under his name in the library
select author.fname,author.minit,author.lname from author where au_id = (select au_id_book from book group by au_id_book order by count(*) desc limit 1);
--This statement finds out which faculty member has the maximum fees overdue
select fid,fname from faculty where fid = (select fid_borrows from borrows where overdue_fees=(select max(overdue_fees) from borrows));
--This statement lists all students who have borrowed at least one book from the library
select usn,fname from student where usn in (select usn_borrows from borrows);
--This statement lists the publisher name of the publisher who has both educational and fiction books in the library
select pname from publisher where pid in (select pid_book from book where type='Educational') and pid in (select pid_book from book where type='Fiction');
--This statement lists the usn and first name of students who have borrowed books of the same genre as ghale@stevens.biz
select usn,fname from student,book,borrows where genre in (select distinct genre from student,borrows,book where email='ghale@stevens.biz' and book_id_borrows=book_id and usn_borrows=usn) and book_id_borrows=book_id and usn_borrows=usn;