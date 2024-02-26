SELECT first_db.categories.title
FROM first_db.posts
INNER JOIN first_db.category_post 
ON first_db.posts.id = first_db.post_id
INNER JOIN first_db.categories
ON first_db.posts.id = first_db.category_post.category_id; 
