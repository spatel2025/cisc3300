-- select by id 1:
SELECT * FROM posts WHERE id = 1;

-- select all posts where title includes "title 2":
SELECT * FROM posts WHERE title LIKE '%title 2%';

-- select all posts and order by the title column alphabetically:
SELECT * FROM posts ORDER BY title ASC;

-- insert 3 new posts:
INSERT INTO posts (title, content, author, date) VALUES 
('Post Title 1', 'Post content 1', 'Author 1', '2023-01-01'),
('Post Title 2', 'Post content 2', 'Author 2', '2023-01-02'),
('Post Title 3', 'Post content 3', 'Author 3', '2023-01-03');

-- update posts where id = 1, set the title to "new title":
UPDATE posts SET title = 'new title' WHERE id = 1;

-- delete post where id = 2:
DELETE FROM posts WHERE id = 2;