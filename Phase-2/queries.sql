select book_name,semester,pname from book,publisher where book.type='Educational' and pid_book=pid order by semester;
select book_name,book.genre,pname from book,publisher where book.type='Fiction' and pid_book=pid order by age_rest;
select branch_id,count(*) from branch,student where branch_id_stud=branch_id group by branch_id;
select branch_id,count(*) from branch,book where branch_id_book=branch_id group by branch_id;
select borrowal_id,book_id_borrows,book_name from book,borrows where current_date>due_date and book_id_borrows=book_id;
select aid_issues,count(book_id_issues) from issues group by aid_issues;
select fid_borrows,book_id_borrows,book_name,fname,minit,lname from borrows,faculty,book where fid_borrows=fid and book_id_borrows=book_id;
update borrows set overdue_fees=(current_date::date-due_date::date)*10 where current_date>due_date;